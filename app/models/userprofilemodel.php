<?php
namespace PHPMVC\Models;

class UserProfileModel extends AbstractModel
{
    public $User_id;
    public $FirstName ;
    public $LastName;
    public $Adress;
    public $DOB;
    public $Image;


    protected static $tableName='app_users_profiles';
    protected static $tableSchema = [
        'User_id'               => self::DATA_TYPE_INT,
        'FirstName'             => self::DATA_TYPE_STR,
        'LastName'              => self::DATA_TYPE_STR,
        'Adress'                => self::DATA_TYPE_STR,
        'DOB'                   => self::DATA_TYPE_DATE,
        'Image'                 => self::DATA_TYPE_STR,
    ];
    protected static $primaryKey = 'User_id';



}
