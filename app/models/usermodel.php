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
    public $status;

    /*
     * @var UserProfileModel
    */
    public $profile;
    public $privileges;

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
        'status'             => self::DATA_TYPE_INT,
    ];
    protected static $primaryKey = 'User_id';

    public function cryptPassword($password)
    {

        $this->Password=crypt($password,APP_SALT);
    }

    public static function getUsers(UserModel $user)
    {
        return self::get(
            ' SELECT app_users.*, app_users_groups.Group_name Group_name FROM ' . self::$tableName . ' app_users INNER JOIN app_users_groups app_users_groups ON app_users_groups.Group_id=app_users.Group_id WHERE app_users.User_id!='.$user->User_id
        );
    }

    public static function userExists($username)
    {
     return self::get('
     SELECT * FROM ' . self::$tableName . ' WHERE Username = "' .$username . '"
     ');
    }

    public static function authenticate($username,$password,$session)
    {
        $password=crypt($password,APP_SALT);
        $sql='SELECT *, (SELECT Group_name FROM app_users_groups WHERE app_users_groups.Group_id = ' .self::$tableName. '.Group_id) Group_name FROM '.self::$tableName.' WHERE Email="'.$username.'" AND Password="'. $password.'"';
        $foundUser=self::getOne($sql);
        var_dump($foundUser);
        if(false !== $foundUser ){
            if ($foundUser->status==2){
                return 2;
            }
            $foundUser->LastLogin=date('Y-m-d H:i:s');
            $foundUser->save();
            $foundUser->profile = UserProfileModel::getByPk($foundUser->User_id);
            $foundUser->privileges = UserGroupPrivilegeModel::getPrivilegesForGroup($foundUser->Group_id);
            $session->u = $foundUser;
            return 1;


        }
        return false;
    }

}
