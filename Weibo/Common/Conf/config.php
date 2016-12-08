<?php
return array(
	//'配置项'=>'配置值'
        //禁止模块访问
        //'MODULE_DENY_LIST'=>array('Admin'),
        //允许模块访问
//        'MODULE_ALLOW_LIST'=>array('Home','Admin'),
//        'DEFAULT_MODULE'=>'Admin',
//        'MULTI_MODULE'=>false,
    //设置PATHINFO的URL分隔符
//        'URL_PATHINFO_DEPR'=>'_',
//    'VAR_MODULE'=>'mm',
//    'VAR_CONTROLLER'=>'cc',
//    'VAR_ACTION'=>'aa',
    //mysql全局定义
//    'DB_TYPE'=>'mysql',
//    'DB_HOST'=>'localhost',
//    'DB_USER'=>'root',
//    'DB_PWD'=>'',
//    'DB_NAME'=>'thinkphp',
//    'DB_PORT'=>3306,
//    'DB_PREFIX'=>'think_'
    //PDO专用定义
    'DB_TYPE'=>'mysql',
    'DB_USER'=>'root',
    'DB_PWD'=>'',
    'DB_PREFIX'=>'think_',
    'DB_DSN'=>'mysql:host=localhost;dbname=thinkphp;charset=utf8',
    'SHOW_PAGE_TRACE' => true,
);