<?php
namespace PHPMVC\LIB;

Trait Validate{
 //helpers for regular expression
    private $_regexPatterns=[
        'num'       => '/^[0-9]+(?:\.[0-9]+)?$/',
        'int'       => '/^[0-9]+$/',
        'float'     => '/^[0-9]+\.[0-9]+$/',
        'alpha'     => '/^[a-zA-Z\p{Arabic}]+$/u',
        'alphanum'  => '/^[a-zA-Z\p{Arabic}0-9]+$/u',
        'vdate'     => '/^[1-2][0-9][0-9][0-9]-(?:(?:0[1-9])|(?:1[0-2]))-(?:(?:0[1-9])|(?:(?:1|2)[0-9])|(?:3[0-1]))$/',
        'email'     => '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
//        'url'       =>'/^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&\'\(\)\*\+,;=.]+$/'
        'url'       =>'/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'
    ];
    public function req($value){
        return '' != $value || empty($value);
    }
    public function num($value){
        return (bool) preg_match($this->_regexPatterns['num'], $value);
    }
    public function int($value){
        return (bool) preg_match($this->_regexPatterns['int'], $value);
    }
    public function float($value){
        return (bool) preg_match($this->_regexPatterns['float'], $value);
    }
    public function alpha($value){
        return (bool) preg_match($this->_regexPatterns['alpha'], $value);
    }
    public function alphanum($value){
        return (bool) preg_match($this->_regexPatterns['alphanum'], $value);
    }
    public function lt($value, $matchAgainst){
        if(is_numeric($value)){
            return $value < $matchAgainst;
        }elseif(is_string($value)){
            return mb_strlen($value) < $matchAgainst;
        }
    }
    public function gt($value, $matchAgainst){
        if(is_numeric($value)){
            return $value > $matchAgainst;
        }elseif(is_string($value)){
            return mb_strlen($value) > $matchAgainst;
        }
    }
    public function min($value, $min){
        if(is_numeric($value)){
            return $value >= $min;
        }elseif(is_string($value)){
            return mb_strlen($value) >= $min;
        }
    }
    public function max($value, $max){
        if(is_numeric($value)){
            return $value <= $max;
        }elseif(is_string($value)){
            return mb_strlen($value) <= $max;
        }
    }
    public function between($value, $min, $max){
        if(is_numeric($value)){
            return $value >= $min && $value <= $max;
        }elseif(is_string($value)){
            return mb_strlen($value) >=  $max  && mb_strlen($value) <= $max;
        }
    }

    public function floatLike($value, $beforeDP, $afterDP)
    {
       if(!$this->float($value)){
           return false;
       }
       $pattern = '/^[0-9]{' .$beforeDP .'}\.[0-9]{' .$afterDP .'}$/';
       return (bool) preg_match($pattern, $value);
    }
    public function vdate($value){
        return (bool) preg_match($this->_regexPatterns['vdate'], $value);
    }  
    public function email($value){
        return (bool) preg_match($this->_regexPatterns['email'], $value);
    }
    public function url($value){
        return (bool) preg_match($this->_regexPatterns['url'], $value);
    }

    public function isValid($roles,$inputType)
    {
        $errors=[];
        if(!empty($roles)){
            foreach ($roles as $fieldName=>$validationRoles) {
                $validationRoles=explode('|',$validationRoles);
                var_dump($validationRoles);
            }
        }
        return empty($errors) ? true : false;

    }

}