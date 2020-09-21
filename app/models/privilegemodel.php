<?php
namespace PHPMVC\Models;

class PrivilegeModel extends AbstractModel
{
    public $Privilege_id;
    public $Privilege ;
    public $PrivilegeTitle ;

    
    protected static $tableName='app_users_privileges';
    protected static $tableSchema = [
        'Privilege_id'            => self::DATA_TYPE_INT,
        'Privilege'               => self::DATA_TYPE_STR,
        'PrivilegeTitle'          => self::DATA_TYPE_STR,
    ];
    protected static $primaryKey = 'Privilege_id';


}
