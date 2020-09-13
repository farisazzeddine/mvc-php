<?php
namespace PHPMVC\Models;

class UserModel extends AbstractModel
{
    public $User_id;
    public $Username ;
    public $Password;
    public $Email;
    public $PhoneNumber;
    public $SubscriptionDate;
    public $LastLogin;
    public $Group_id;
    
    protected static $tableName='app_users';
    protected static $tableSchema = [
        'User_id'            => self::DATA_TYPE_INT,
        'Username'           => self::DATA_TYPE_STR,
        'Password'           => self::DATA_TYPE_STR,
        'Email'              => self::DATA_TYPE_STR,
        'PhoneNumber'        => self::DATA_TYPE_STR,
        'SubscriptionDate'   => self::DATA_TYPE_DATE,
        'LastLogin'          => self::DATA_TYPE_STR,
        'Group_id'           => self::DATA_TYPE_INT,
    ];
    protected static $primaryKey = 'User_id';


}
