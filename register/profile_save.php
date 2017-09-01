<?php
session_start();
?>
<?php

$userId=$_POST["e_id"];
$name = $_POST["f_name"];
$address=$_POST["addr"];
$email=$_POST["mail"];
$phone=$_POST["phone"];
$gender=$_POST["r1"];
$dob=$_POST["dob"];
$degree=$_POST["degree"];
$inst=$_POST["inst"];
$result=$_POST["result"];
$department=$_POST["r2"];
$position=$_POST["r3"];
$salary=$_POST["salary"];
$doj=$_POST["doj"];
$password1=$_POST["p1"];
$password2=$_POST["p2"];
//paSS
if (($password1)&&($password1==$password2))
{
 $db=mysql_connect("localhost","1251526","352Sabuj","1251526db2");
$sql1="insert into employee_info values('$userId','$name','$address','$email','$phone','$gender','$dob')";
$sql12="delete from employee_info where emp_id=$userId";
$res1=mysql_query($sql1) or die("Not executed1");
$sql2="insert into acad_info values('$userId','$degree','$inst','$result')";
$sql22="delete from acad_info where emp_id=$userId";
$res2=mysql_query($sql2) or (mysql_query($sql12) and die("Not executed2"));
$sql3="insert into official_info values('$userId','$name','$department','$position','$email','$salary','$doj')";
$sql32="delete from official_info where emp_id=$userId";
$res3=mysql_query($sql3) or (mysql_query($sql12)and mysql_query($sql22)and die("Not executed3"));
switch($position){
case 'General Employee': $type=1;break;

case 'Manager': $type=2;break;

case 'Admin':$type=3;break;
}
$sql4="insert into login_info values('$userId','$password2','$type')";
$res4=mysql_query($sql4) or (mysql_query($sql32)and mysql_query($sql12)and mysql_query($sql22) and die("Not executed2"));

$sql5="insert into leave_info values('$userId', '', '', '', '')";
$res5=mysql_query($sql5) or die("Not executed2");
/*
$sql6="insert into salary values('$userId', '', '', '', '', '')";
$res6=mysql_query($sql6) or die("Not executed2");
 */
$_SESSION['user']=$userId;
$_SESSION['type']=$row['type'];
//
if ($res1&&$res2&&$res3&&$res4)
{
include("index.php");
echo "<h3>Profile sucessfully created</h3>";
}
else
{
echo "Invalid input/s,insert again,don't left any field";
include("create_profile.php");
}
}
else {
    echo "Enter Valid Passwords again";
    include("create_profile.php");
}



?>