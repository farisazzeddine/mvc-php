<?php


namespace PHPMVC\LIB;


class SessionManager extends \SessionHandler
{
    private $sessionName= SESSION_NAME;
    private $sessionMaxLifetime=SESSION_LIFE_TIME;
    private $sessionSSL= false;
    private $sessionHTTPOnly = true;
    private $sessionPath='/';
    private $sessionDomain = '.mvcapp.local';
    private $sessionSavePath = SESSION_SAVE_PATH;

    private $sessionCipherAlgo = 'AES-128-ECB';
    private $sessionCipherKey = 'WYCRYPT0K3Y@2020';
    private $ttl = 30;

    public function __construct()
    {
       ini_set('session.use_cookies',1);
       ini_set('session.use_only_cookies',1);
       ini_set('session.use_trans_sid',0);
       ini_set('session.save_handler','files');

       session_name($this->sessionName);
       session_save_path($this->sessionSavePath);
       session_set_cookie_params(
           $this->sessionMaxLifetime, $this->sessionPath,
           $this->sessionDomain, $this->sessionSSL,
           $this->sessionHTTPOnly
       );
       session_set_save_handler($this,true);
    }
    public function __get($key)
    {
        return false !== $_SESSION[$key] ? $_SESSION[$key] : false;
    }
    public function __set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public function __isset($key)
    {
        return isset($_SESSION[$key]) ? true : false;
    }
    public function read($id)
    {
      return mcrypt_decrypt($this->sessionCipherAlgo,$this->sessionCipherKey,parent::read($id),$this->sessionCipherMode);
    }
    public function write($id, $data)
    {
        return parent::write($id, mcrypt_decrypt($this->sessionCipherAlgo,$this->sessionCipherKey,$data,$this->sessionCipherMode) );
    }
    public function start()
    {
       if(''===session_id()){
           if (session_start()){
               $this->setSessionStartTime();
               $this->checkSessionValidity();
           }
           
       }
    }
    private function setSessionStartTime()
    {
        if (!isset($this->sessionStartTime)){
            $this->sessionStartTime=time();
        }
        return true;
    }
    private function checkSessionValidity()
    {
     if((time() - $this->sessionStartTime) > ($this->ttl * 60)){
        $this->renewSession();
        $this->generateFingerPrint();
     }
     return true;
    }
    private function renewSession()
    {
      $this->sessionStartTime=time();
      return session_regenerate_id(true);
    }

    public function kill()
    {
      session_unset();
      setcookie(
              $this->sessionName,'',time()-1000,
              $this->sessionPath,
              $this->sessionDomain,
              $this->sessionSSL,
              $this->sessionHTTPOnly
      );
      session_destroy();
    }

    private function generateFingerPrint()
    {
        $userAgentId = $_SERVER['HTTP_USER_AGENT'];
        $this->cipherKey = mcrypt_create_iv(32);
        $sessionId = session_id();
        $this->fingerPrint = md5($userAgentId . $this->cipherKey. $sessionId);
    }

    public function isValidFingerPrint()
    {
      if(!isset($this->fingerPrint)){
         $this->generateFingerPrint();
      }
      $fingerPrint = md5($_SERVER['HTTP_USER_AGENT'].$this->cipherkey. session_id());
      if($fingerPrint===$this->fingerPrint){
            return true;
      }
      return false;
    }



}
$session = new SessionManager();
$session->start();
//$session->kill();
var_dump($_SERVER);