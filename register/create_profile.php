<?php
session_start();
$userId=$_SESSION['user'];
$type=$_SESSION['type'];
$count=$_SESSION['count'];
if(!$count){
 include("index.php");
 exit;
 $count=0;

}
//echo $type;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Employee Information</title>
    <link href="forall.css" rel="stylesheet" type="text/css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <?php
  $_SESSION['user']=$userId;
  $_SESSION['type']=$type;
  ?>
  <body>
        <h1 id="top_all"><img src="employees.jpg" height="200" width="400" align="middle"/> Employee Management System</h1>
        <div class="leftmenu">
            <?php include("menu1.php"); ?>
        </div>
         <br/>
         <br/>
        <h2 id="heading">Employee Information</h2>
        <form action="profile_save.php" method="post">
            <i>Enter Data in all the fields</i><br/>
        <label for="e_id">Login Id:</label>  <br/> <input type="text" class="class1"id="e_id" name="e_id"/>
        <br/>
        <label for="f_name">Full Name:</label> <br/> <input type="text" class="class1" id="f_name" name="f_name"/>
        <br/>
        <br/>
        
        <label for="addr">Address(house no,thana,dist only):</label> <br/> <input type="text" class="class1" id="addr" name="addr" />
        <br/>
         <br/>

        <label for="mail">Email:</label> <br/> <input type="text" class="class1" id="mail" name="mail"/>
        <br/>
        <label for="phone">Phone No:</label> <br/> <input type="text" class="class1" id="phone" name="phone"/>
        <br/>
        Gender:<input type="radio" name="r1"  value="male"/> male
        <input type="radio" name="r1"  value="female"/> female
        <br/>
        <br/>
        <label for="dob">Date of Birth(example:01/01/1990)<br/></label> <input type="text" class="class1" id="dob" name="dob"/>
        <br/>
        <br/>
        <label for="ta1">Academic qualifications</label>
        <br/>
        <br/>
        <label for="degree">Highest Degree Received:</label> <br/> <input type="text" class="class1" id="degree" name="degree"/>
        <br/>
        <label for="inst">Name of the institution:</label> <br/> <input type="text" class="class1" id="inst" name="inst"/>
        <br/>
        <label for="result">Result(CGPA):</label> <br/> <input type="text" class="class1" id="result" name="result"/>
        <br/>
        <br/>
        Department:
        <br/>
        <input type="radio" name="r2"  value="Developer"/>Developer
        <br/>
        <input type="radio" name="r2"  value="Analyst"/>Analyst
        <br/>
        <input type="radio" name="r2"  value="Management"/>Management
        <br/>
        <br/>
        Position:
        <br/>
        <input type="radio" name="r3"  value="General Employee"/>General Employee
        <br/>
        <input type="radio" name="r3"  value="Manager"/>Manager
        <br/>
        <input type="radio" name="r3"  value="Admin"/>Admin
        <br/>
        <label for="salary">Present Salary:(without comma)</label> <br/> <input type="text" class="class1" id="salary" name="salary"/>
        <br/>
        <label for="doj">Date of Joining(example:01/01/1990)<br/></label> <input type="text" class="class1" id="doj" name="doj" />
        <br/>
        
        <br/>
        Give Password(mixed characters)<br/>
        <input  type="password" id="p1" name="p1"/>
        <br/>
        Confirm Password<br/>
        <input  type="password" id="p2" name="p2"/>
        <br/>

        <br/>
        <br/>
        <input type="reset" id="res1" value="Reset All"/>
        <br/>
        <br/>
        <input type="submit" id="s1" value="Submit"/>
        <br/>
        <br/>
    </form>
    </div>
  </body>
</html>
