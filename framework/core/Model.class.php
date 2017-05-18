<?php

class Model
{
    protected $db; //数据库连接对象
    protected $table; //表名
    protected $fields = array(); //字段列表

    public function __construct($table)
    {
        $dbconfig['host'] = $GLOBALS['config']['host'];
        $dbconfig['user'] = $GLOBALS['config']['user'];
        $dbconfig['password'] = $GLOBALS['config']['password'];
        $dbconfig['dbname'] = $GLOBALS['config']['dbname'];
        $dbconfig['port'] = $GLOBALS['config']['port'];
        $dbconfig['charset'] = $GLOBALS['config']['charset'];

        $this->db = new Mysql($dbconfig);
        $this->table = $GLOBALS['config']['prefix'] . $table;
    }
}
