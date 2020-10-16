<?php


namespace PHPMVC\LIB;


class Language
{
    private $dictonary=[];
    public function load($path)
    {
        $defaultLanguage=APP_DEFAULT_LANGUAGE;
        if(isset($_SESSION['lang'])){
            $defaultLanguage=$_SESSION['lang'];
        }
        $pathArray=explode('.',$path);
        $languageFileToLoad=LANGUAGES_PATH.$defaultLanguage.DS.$pathArray[0].DS.$pathArray[1].'.lang.php';
        if(file_exists($languageFileToLoad)){
            require $languageFileToLoad;
            if(is_array($_) && !empty($_)){
                foreach ($_ as $key=>$value){
                    $this->dictonary[$key] =$value;
                }

            }
        }else{
            trigger_error('the language file'.$path.' dosent existes '.E_USER_WARNING);
        }
    }

    public function get($key)
    {
       if(array_key_exists($key,$this->dictonary)){
           return $this->dictonary[$key];
       }
    }
    public function feedKey($key,$data)
    {
       if(array_key_exists($key,$this->dictonary)){
           array_unshift($data,$this->dictonary[$key]);
           return call_user_func_array('sprintf',$data);

       }
    }

    public function getDictionary()
    {
        return $this->dictonary;
    }
}