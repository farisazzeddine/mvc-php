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

    public function getDictionary()
    {
        return $this->dictonary;
    }
}