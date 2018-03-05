<?php
/**
 * 安装向导
 */
header('Content-type:text/html;charset=utf-8');
// 检测是否安装过
if(file_exists('./install.lock')){
    echo '你已经安装过该系统，重新安装需要先删除./install/install.lock 文件';
    exit;
}
if(!isset($_GET['c'])){
	require './View/agreement.html';
}
?>