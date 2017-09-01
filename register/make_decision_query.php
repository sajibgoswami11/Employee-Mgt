<?php
session_start();
$userId=$_SESSION['user'];
$type=$_SESSION['type'];
//echo $type;
?>
<?php
        $decision=$_POST['stat'];
        $Emp_id=$_POST['pname'];$db= mysql_connect('localhost','1251526','352Sabuj');
	   mysql_select_db('1251526db2',$db) or die('error');
        $sql1="update leave_info set status='$decision' where emp_id='$Emp_id'";
        $res1=mysql_query($sql1) or die("Not executed1");

        $_SESSION['type']=$type;
        $_SESSION['user']=$userId;
        if(mysql_query($sql1))
             include("home.php");

        ?>
