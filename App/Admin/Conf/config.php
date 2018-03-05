<?php
return array(
	//'配置项'=>'配置值'
	/* 操作方法后缀 */
	'ACTION_SUFFIX' => 'Action',
	/* 模板相关配置 */
	/*'TMPL_PARSE_STRING' => array(
		'__STATIC__'=>__ROOT__.'/Public/static',
		'__ADDONS__'=>__ROOT__.'/Public/'.MODULE_NAME.'Addons',
		'__CSS__'=>__ROOT__.'/Public/'.MODULE_NAME.'css',
		'__IMG__'=>__ROOT__.'/Public/'.MODULE_NAME.'images',
		'__JS__'=>__ROOT__.'/Public/'.MODULE_NAME.'js',
	),*/
	/*'TMPL_PARSE_STRING'=>array(
		'__PUBLIC__'=>'http://localhost/tp3/App/Admin/Public/static',
		'__ADDONS__'=>__ROOT__.'/Public/'.MODULE_NAME.'Addons',
		'__CSS__'=>__ROOT__.'/Public/'.MODULE_NAME.'css',
		'__IMG__'=>__ROOT__.'/Public/'.MODULE_NAME.'images',
		'__JS__'=>__ROOT__.'/Public/'.MODULE_NAME.'js',
	),*/
	/* 数据库设置 */
    'DB_TYPE'=>'mysql',// 数据库类型
    'DB_HOST'=>'127.0.0.1',// 服务器地址
    'DB_NAME'=>'tp3',// 数据库名
    'DB_USER'=>'root',// 用户名
    'DB_PWD'=>'root',// 密码
    'DB_PORT'=>'3306',// 端口
    'DB_PREFIX'=>'tp_',// 数据库表前缀
	/* PDO专用定义 */
	/*'DB_TYPE'=>'pdo',// 数据库类型
    'DB_USER'=>'root',// 用户名
    'DB_PWD'=>'root',// 密码
    'DB_PORT'=>'3306',// 端口
    'DB_PREFIX'=>'tp_',// 数据库表前缀
	'DB_PREFIX'=>'mysql:host=127.0.0.1;dbname=tp3;charset=UTF8',// 数据库表前缀*/
);