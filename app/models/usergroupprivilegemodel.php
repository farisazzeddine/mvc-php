<?php
namespace PHPMVC\Models;

class UserGroupPrivilegeModel extends AbstractModel
{
    public $id;
    public $Group_id;
    public $Privilege_id;

    
    protected static $tableName='app_users_groups_privileges';
    protected static $tableSchema = [
        'Group_id'            => self::DATA_TYPE_INT,
        'Privilege_id'        => self::DATA_TYPE_INT,

    ];
    protected static $primaryKey = 'id';

    public function getGroupPrivileges(UserGroupModel $groupe)
    {
        $groupPrivileges=self::getBy(['Group_id' => $groupe->Group_id]);

        $extractPrivilegesId=[];
        if(false !== $groupPrivileges ){
            foreach ($groupPrivileges as $privilege){
                $extractPrivilegesId[]=$privilege->Privilege_id;
            }
        }
        return $extractPrivilegesId;
    }
    public static function getPrivilegesForGroup($groupId){
        $sql='SELECT app_users_groups_privileges.*, app_users_privileges.Privilege FROM '.self::$tableName. ' app_users_groups_privileges';
        $sql .=' INNER JOIN app_users_privileges app_users_privileges ON app_users_privileges.Privilege_id = app_users_groups_privileges.Privilege_id';
        $sql .=' WHERE app_users_groups_privileges.Group_id=' . $groupId;
        $privileges=self::get($sql);
        $extractedUrls=[];
        if(false !== $privileges){
            foreach ($privileges as $privilege ){
                $extractedUrls[]=$privilege->Privilege;
            }
        }
        return $extractedUrls;
    }


}
