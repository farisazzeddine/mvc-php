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


}
