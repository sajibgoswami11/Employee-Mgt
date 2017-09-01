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
					
                                       
                                           
                          }
						  else
						 exit;



        error_reporting(E_ALL ^ E_DEPRECATED);

         


         

          $pass = $_POST["pass"];
          $email = $_POST["emailid"];   

          $_SESSION["email_id"]=$email;
          $_SESSION["pass"]=$pass;

          $a = rand(100,999999);   //generate random number which will be send to email ver.
           //echo $a;
            $_SESSION["random"]=$a;


         $to = $email;
         $subject = "Your Registration Varification Code";
         
         $message = $a;
         
         $header = "From:hackingpro20161@gmail.com \r\n";
         $header = "Cc:hackingpro20161@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
           // echo "Message sent successfully...";
           //   echo "check your email for verification code".'<br>';
            
            $sql = "insert into random values (NULL,'$email',$a)";  //storing email & random number 
            mysql_query($sql);

            include ('VerifyEmail.php');

         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>						