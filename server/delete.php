<?php 

    header("Content-type: application/json; charset=utf-8");

    // 连接数据库
    require_once('db.php');

    if($link){
    	$newsid = $_POST['newsid'];

    	mysqli_query($link, "SET NAMES utf8");
        // 删除数据库里相关内容
    	$sql = "DELETE FROM `news` WHERE `news`.`id` = {$newsid}";

        $result = mysqli_query($link,$sql);
        echo json_encode(array('delete'=>'success'));
    }

    // 关闭连接
    mysqli_close($link);








 ?>