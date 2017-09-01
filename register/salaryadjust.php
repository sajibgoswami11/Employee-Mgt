<?php
session_start();
$userId=$_SESSION['user'];
$type=$_SESSION['type'];
$info=$_SESSION["info"];
//echo $type;
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="forall.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        <h1 id="top_all"><img src="employees.jpg" height="200" width="400" align="middle"/> Employee Management System</h1>

        <?php
        $_SESSION['user']=$userId;
        $_SESSION['type']=$type;
        include("menu1.php");

       $db=mysql_connect("localhost","root","");
        mysql_select_db("emp_mgt",$db) or die( "Unable to select database");
        $sql="SELECT * FROM salary where emp_id!='$userId'";
        $result=mysql_query($sql,$db);
        $nrow=mysql_numrows($result);
        echo"<br/>";
        echo"<br/>";
        echo"<br/>";
        echo"<form action=\"select_for_salaryadjust.php\" method=\"post\">";
        echo"<b>Employee:</b>";
        echo"<select name=\"emp\">";
        for($i=0;$i<$nrow;$i++) {
            $id=mysql_result($result,$i,"emp_id");
            echo "<option value=\"$id\">$id</option>";
        }
        echo"<br/>";
        echo"<br/>";
        echo"</select>";
        echo "<input type=\"submit\" value=\"select\"/>";
        echo"</form>";


        mysql_close($db);



        ?>
    </body>
</html>
