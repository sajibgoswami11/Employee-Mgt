     
<html>
   
   <head>
      <title> TAKING DATA AND VERIFYING FOR REGISTER</title>
   </head>
   
   <body>
      <?php
session_start();        
    
      $db= mysql_connect('localhost','1251526','352Sabuj');
	   mysql_select_db('1251526db2',$db) or die('error');


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
             $sqlin = "select * from register where  emailid='$email'";
         $result = mysql_query($sqlin);
		     $row44 = mysql_fetch_array($result);
        if($row44['dob'] == $dob && $row44['doj']==$doj) {
            
             

				$sql1="insert into employee_info values('$email','$name','$address','$email','$phone','$gender','$dob')";
				$sql12="delete from employee_info where emp_id=$email";
				$res1=mysql_query($sql1) or die("Not executed1");
				$sql2="insert into acad_info values('$email','$degree','$inst','$result')";
				$sql22="delete from acad_info where emp_id=$email";
				$res2=mysql_query($sql2) or (mysql_query($sql12) and die("Not executed2"));
				$sql3="insert into official_info values('$email','$name','$department','$position','$email','$salary','$doj')";
				$sql32="delete from official_info where emp_id=$email";
				$res3=mysql_query($sql3) or (mysql_query($sql12)and mysql_query($sql22)and die("Not executed3"));				
				$sql5="insert into leave_info values('$email',  '', '', '', '')";
                   $res5=mysql_query($sql5) or die ("not executed");            
					
                                        include("register.php");
                                           
                          }
						  else
						  {  
							echo "Sorry :(" ;
                          }


?>
    </body>
</html>


