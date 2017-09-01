     
<html>
   
   <head>
     
   </head>
   
   <body>
      <?php
session_start();        
     $db= mysql_connect('localhost','1251526','352Sabuj');
	   mysql_select_db('1251526db2',$db) or die('error');
			$email=$_POST["mail"];
			$dob=$_POST["dob"];
			$doj=$_POST["doj"];
			
			$qury1="insert into register values (NULL,'$email', '$dob','$doj')";
			$res1=mysql_query($qury1);
			include('home.php');
       ?>			
	</body>
</html>