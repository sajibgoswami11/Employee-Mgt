        <?php
       
         session_start();

      $db= mysql_connect('localhost','1251526','352Sabuj');
	   mysql_select_db('1251526db2',$db) or die('error');

         $userId=$_POST["userId"];
        $pass = $_POST["pass"];
        //echo "$userId $pass";
        $userId = stripslashes($userId);
        $pass = stripslashes($pass);
        $userId = mysql_real_escape_string($userId);
        $pass = mysql_real_escape_string($pass);

        $sql="select * from login_info where id='$userId' and pass='$pass'";
        $res=mysql_query($sql) or die("Not executed");

        $num = mysql_numrows($res);
        if($num == 0) {
            include("index.php");
          
            exit;
        }
        $row=mysql_fetch_array($res);
        $_SESSION['user']=$userId;
        $_SESSION['type']=$row['type'];
        $_SESSION['count']=1;
        include_once("home.php");
        

       // echo $_SESSION['user'];
        //setcookie("user","$userId",time()+3600);
        //echo "Welcome $userId";
        //echo "<a href=\"viewProfile.php\"> View My Profile.</a>";



        ?>
