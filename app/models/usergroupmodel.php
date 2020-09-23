<?php
namespace PHPMVC\Models;

class UserGroupModel extends AbstractModel
{
    public $Group_id;
    public $Group_name;

    
    protected static $tableName='app_users_groups';
    protected static $tableSchema = [
        'Group_id'            => self::DATA_TYPE_INT,
        'Group_name'           => self::DATA_TYPE_STR,
    ];
    protected static $primaryKey = 'Group_id';


}
