<?php
namespace PHPMVC\Models;

class AreaModel extends AbstractModel
{
    public $AreaId;
    public $ArabicName;
    public $EnglishName;
    public $ParentLevel;
    public $Level;

    protected static $tableName = 'app_areas';

    protected static $tableSchema = array(
        'ArabicName'        => self::DATA_TYPE_STR,
        'EnglishName'       => self::DATA_TYPE_STR,
        'ParentLevel'       => self::DATA_TYPE_INT,
        'Level'             => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'AreaId';
}