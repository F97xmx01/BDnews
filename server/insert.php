<?php 
    header("Content-type: application/json; charset=utf-8");

    // 连接数据库
    require_once('db.php');

    if ($link) {
    	// 插入数据
    	// 获取前端传入数据
        $newstitle = addslashes(htmlspecialchars($_POST['newstitle']));
        $newstype = addslashes(htmlspecialchars($_POST['newstype']));
        $newsimg = addslashes(htmlspecialchars($_POST['newsimg']));
        $newstime = addslashes(htmlspecialchars($_POST['newstime']));
        $newssrc = addslashes(htmlspecialchars($_POST['newssrc']));

    	// 查询语句
    	$sql = "INSERT INTO `news` (`newstitle`,`newstype`,`newsimg`,`newstime`,`newssrc`) VALUES ('{$newstitle}','{$newstype}','{$newsimg}','{$newstime}','{$newssrc}')";



        mysqli_query($link, "SET NAMES utf8");
        $result = mysqli_query($link,$sql);

        
        // echo json_encode($sql);
        echo json_encode(array('success'=>'OK'));
    }
    
    // 关闭连接
    mysqli_close($link);



 ?>

 