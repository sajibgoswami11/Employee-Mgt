<?php
        error_reporting(E_ALL ^ E_DEPRECATED);

        session_start();
  $db= mysql_connect('localhost','1251526','352Sabuj');
	   mysql_select_db('1251526db2',$db) or die('error');

        $email = $_GET['emailid']; 


        $data = "";


       $sql = "select * from login_info where id = '$email'";

       $resu = mysql_query($sql);
       
       $count = 0;

       while($temp = mysql_fetch_assoc($resu))
       {
            $count ++;

        }

       if ($count > 0)
       {
            $data  = "email already exist";
       }
        else
       {
          $data = "you can register";
       }
         echo $data;
?>