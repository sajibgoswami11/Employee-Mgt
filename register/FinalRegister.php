<?php
session_start();
  $_SESSION['user']=$userId;
?>

<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
        <link href="a1.css" rel="stylesheet" type="text/css"/>
   </head>
   
   <body>
       <div class="container">
      <?php
       
         session_start();
         
        error_reporting(E_ALL ^ E_DEPRECATED);
    

        $v;
        $e="";
     //  $pass = $_POST["pass"];

        $email = $_SESSION["email_id"];
        $pass = $_SESSION["pass"];
        $veri_code = $_POST["code"];
        
        

          $db= mysql_connect('localhost','1251526','352Sabuj');
	   mysql_select_db('1251526db2',$db) or die('error');


         $retval = "select * from random where ran_num = $veri_code";

          $res = mysql_query($retval);
   
         while($temp=mysql_fetch_assoc($res))
                { 
			
                    		$e = $temp['emailid'];
                                $v = $temp['ran_num'];
                                
                  }
           
         
         if($v == $veri_code and $e == $email)
          {
              $sql2 = "insert into login_info value ('$email','$pass','2')";
              mysql_query($sql2);

             
     
             
             include ('index.php');
          }
          else
          {
             echo "You have entered something wrong";
           }
             
             
          

      ?>
      
   </body>
</html>						