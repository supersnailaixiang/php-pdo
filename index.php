<?php
	require_once "./config.php";
	require_once "./untils.php";
    require_once "Mysql.class.php";
    $db = db();
    // 适用于web 不用进行错误处理
    // 执行sql
    $db->beginTransaction();
    $insert_data = array("user_name"=>"测试");
    $insert_sql = "insert into cfg_user(user_name)values(:user_name)";
    $db->prepare_execute($insert_sql,$insert_data);
    // 返回单行
    $check_data = array("user_name"=>"测试");
    $check_sql ="select user_name from cfg_user where user_name =:user_name";
    $check_result = $db->prepare_execute_result_single($check_sql,$check_data);
    print_r($check_data);

    // 返回多行
  
    $check_mul_sql = "select user_name from cfg_user limit 10 ";
    // 没有参数传入空字符串
    $check_mul_result = $db->prepare_execute_result($check_mul_sql,"");
    print_r($check_mul_result);
    $db->commit();

?>