<?php
namespace PHPMVC\Models;

class SupplierModel extends AbstractModel
{
    public $Supplier_id;
    public $Name;
    public $PhoneNumber;
    public $Email;
    public $Address;


    protected static $tableName='employees';
    protected static $tableSchema = [
        'Name'              => self::DATA_TYPE_STR,
        'PhoneNumber'       => self::DATA_TYPE_STR,
        'Email'             => self::DATA_TYPE_STR,
        'Address'           => self::DATA_TYPE_STR,

    ];
    protected static $primaryKey = 'Supplier_id';


}
