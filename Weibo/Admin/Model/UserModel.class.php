<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
//    protected $tablePrefix = 'tp_';
//    protected $tableName = 'abc';
//    protected $trueTableName = 'asd';
//    protected $dbName = "imooc";
    public function __construct() {
        parent::__construct();
        echo '\Admin';
    }
}

