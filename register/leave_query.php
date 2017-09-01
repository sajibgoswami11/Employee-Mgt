<?php
session_start();
$type=$_SESSION['type'];
?>
<?php
        $userId=$_POST["emp_id"];
        $leave_id = $_POST["r2"];
        $start_date=$_POST["start_date"];
        $end_date=$_POST["end_date"];
        $cause=$_POST["cause"];
        $db= mysql_connect('localhost','1251526','352Sabuj');
	   mysql_select_db('1251526db2',$db) or die('error');;
        $decision=$_POST['stat'];
        $sql1="insert into leave_info values ('$userId','$start_date','$end_date','$cause') ";
        $res1=mysql_query($sql1) or die("Not executed1");

        $_SESSION['type']=$type;
        $_SESSION['user']=$userId;
        include("home.php");

?>