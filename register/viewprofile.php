<?php
        session_start();
        if(isset($_SESSION['user']))
          $userId=$_SESSION['user'];
        if(isset($_SESSION['type']))
          $type=$_SESSION['type'];
?>

<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="Morning Dew" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
      <div id="menu">
			<ul id="main">
			  <li class="current_page_item"><a href="#">Homepage</a></li>
			  <li><a href="#">Services</a></li>
			  <li><a href="#">About Us</a></li>
			  <li><a href="#">Contact Us</a></li>
			</ul>
      </div>
  <!-- start header -->
  <div id="header">
    <div id="logo">
      <h1><a href="#"><span>Employee Management System</span></a></h1>
      
    </div>
  </div>
  <!-- end header -->
  <!-- start page -->
  <div id="page">
			<div id="sidebar1" class="sidebar">
			  <ul>
				<li>
				  <h2>Functionalities</h2>
				   <?php include('menu1.php'); ?>
				</li>
			   
				<li>
				  <h2>Archives</h2>
				  <ul>
					<li><a href="#">September</a> (23)</li>
					<li><a href="#">August</a> (31)</li>
					<li><a href="#">July</a> (31)</li>
					<li><a href="#">June</a> (30)</li>
					<li><a href="#">May</a> (31)</li>
				  </ul>
				</li>
			  </ul>
			</div>
    <!-- start content -->
        <div id="content">
                <div class="post">
									
								 <?php $_SESSION['type']=$type;?>
        

									<?php
										echo "<br/>";
										echo "<br/>";
										echo "<h2>Hi ".$userId." </h2>";
										echo "<br/>";
										$db= mysql_connect('localhost','1251526','352Sabuj');
	                                                                        mysql_select_db('1251526db2',$db) or die('error');
										$sql1="select * from `employee_info` where emp_id='$userId'";
										$res1=mysql_query($sql1) or die("Not executed1");
										$row1=mysql_fetch_array($res1);
										//
										echo"<div id=\"table\">";
										echo "Personal Info";
										echo "<table border='2' id=\"emp_info\">";
										echo "<tr>";//('$userId','$name','$address','$email','$phone','$gender','$dob')";
										
										echo "<th>Employee_Name</th>";
										echo "<th>Address</th>";
										//echo "<th>Email</th>";
										echo "<th>Phone</th>";
										echo "<th>Gender</th>";
										echo "<th>Date of Birth</th>";
										echo "</tr>";
										echo "<tr>";
										
										echo "<td>".$row1['name']."</td>";
										echo "<td>".$row1['address']."</td>";
										//echo "<td>".$row1['email']."</td>";
										echo "<td>".$row1['phone']."</td>";
										echo "<td>".$row1['gender']."</td>";
										echo "<td>".$row1['dob']."</td>";
										echo "</tr>";
										echo "</table>";
										echo"</div>";

										//
										$sql2="select * from `acad_info` where emp_id='$userId'";
										$res2=mysql_query($sql2) or die("Not executed2");
										$row2=mysql_fetch_array($res2);
										//
										echo"<div id=\"table\">";
										echo "Academic Info";
										echo "<table border='2' id=\"acad_info\">";
										echo "<tr>";//('$userId','$name','$address','$email','$phone','$gender','$dob')";
									   
										echo "<th>Degree</th>";
										echo "<th>Institution</th>";
										echo "<th>Result</th>";
										echo "</tr>";
										echo "<tr>";
										
										echo "<td>".$row2['degree']."</td>";
										echo "<td>".$row2['institution']."</td>";
										echo "<td>".$row2['result']."</td>";
										echo "</tr>";
										echo "</table>";
										echo"</div>";
										//
										$sql3="select * from official_info where emp_id='$userId'";
										$res3=mysql_query($sql3) or die("Not executed3");
										$row3=mysql_fetch_array($res3);
										//echo $row3['name'];
										//echo "<br/>";
										//
										echo"<div id=\"table\">";
										echo "Official Info";
										echo "<table border='2' id=\"official_info\">";
										echo "<tr>";//('$userId','$name','$address','$email','$phone','$gender','$dob')";
										
										echo "<th>Name</th>";
										echo "<th>Department</th>";
										echo "<th>Position</th>";
										echo "<th>Email</th>";
										echo "<th>Gross Salary</th>";
										echo "<th>Joining Date</th>";
										echo "</tr>";
										echo "<tr>";
									   
										echo "<td>".$row3['name']."</td>";
										echo "<td>".$row3['department']."</td>";
										echo "<td>".$row3['position']."</td>";
										echo "<td>".$row3['email']."</td>";
										echo "<td>".$row3['salary']."</td>";
										echo "<td>".$row3['doj']."</td>";
										echo "</tr>";
										echo "</table>";
										echo"</div>";
										////
										$sql4="select * from leave_info where emp_id='$userId'";
										$res4=mysql_query($sql4) or die("Not executed4");
										$row4=mysql_fetch_array($res4);
										////
										echo"<div id=\"table\">";
										echo "Leave Info";
										echo "<table border='2' id=\"leave_info\">";
										echo "<tr>";//('$userId','$name','$address','$email','$phone','$gender','$dob')";
										echo "<th>Employee_Id</th>";
										
										echo "<th>Start Date</th>";
										echo "<th>End Date</th>";
										echo "<th>Cause</th>";
										echo "<th>Status</th>";
										echo "</tr>";
										echo "<tr>";
										echo "<td>".$row4['emp_id']."</td>";
										
										echo "<td>".$row4['start_date']."</td>";
										echo "<td>".$row4['end_date']."</td>";
										echo "<td>".$row4['cause']."</td>";
										echo "<td>".$row4['status']."</td>";
										echo "</tr>";
										echo "</table>";
										echo"</div>";
									  /*  ////
										if($type!=3){
										$sql5="select * from salary where emp_id='$userId'";
										$res5=mysql_query($sql5) or die("Not executed4");

										echo "<br/>";
										echo "<br/>";
										echo "<h3>";
										echo "Your Overtime for the month of  ".mysql_result($res5,0,"month")." is  ".mysql_result($res5,0,"overtime")."  hours and total salary is ".mysql_result($res5,0,"total")."  taka";
										echo "</h3>";
										echo "<br/>";
										echo "<br/>";}  */


										$_SESSION['user']= $userId;
										$_SESSION['type']= $type;
									?>
						                   <style> 
                                                                         table {
															border-collapse: collapse;
															width: 1px;
												     
														}
                                                      
														th, td {
															text-align: left;
															padding: 8px;
														}

														tr:nth-child(even){background-color: #f2f2f2}

														th {
															background-color: #4e6799;
															color: white;
														}
														</style> 
                    </div>
			  <div class="post">
				<h2 class="title"><a href="#">Sample Tags</a></h2>
				<p class="byline">Posted on Novembor, 2016 by <a href="#">Sajib's team</a></p>
					<div class="entry">
					  <h3>An H3 Followed by a Blockquote:</h3>
					  
					  <h3>Bulleted List:</h3>
					  <ul>
						<li>Employee.</li>
						<li>Management.</li>
						<li>System.</li>
					  </ul>
					  <p class="links"><a href="#" class="more">Read More</a></p>
					</div>
			  </div>
				   <div class="post">
					<h2 class="title"><a href="#">Lorem Ipsum Dolor </a></h2>
					<p class="byline"><small>Posted on Novembor, 2016. <a href="#"></a></small></p>
					
					  <p class="links"><a href="#" class="more">Read More</a></p>
					</div>
       
        </div>
    <!-- end content -->
    <!-- start sidebars -->
    
    <!-- end sidebars -->
    <div style="clear: both;">&nbsp;</div>
  </div>
  <!-- end page -->
</div>
<div id="footer">
  <p class="copyright">&copy;&nbsp;&nbsp;2009 All Rights Reserved &nbsp;&bull;&nbsp; Design by <a href="http://www.freecsstemplates.org/"></a>.</p>
</div>
</html>
