<?php
session_start();
$userId=$_SESSION['user'];
$type=$_SESSION['type'];

//echo $type;
$count=$_SESSION['count'];
if(!$count){
 include("index.php");
 $count=0;
 exit;
 
 }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
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
															
												<?php
														 $db= mysql_connect('localhost','1251526','352Sabuj');
	                                                                                                mysql_select_db('1251526db2',$db) or die('error');

													$sql4="select * from official_info";
													$res4=mysql_query($sql4) or die("Not executed4");
													$row4=mysql_fetch_array($res4);
													$nrow=mysql_numrows($res4);
													////
													 echo"<br/>";
													  echo"<br/>";
													echo"<div id=\"table\">";
													echo "<table border='2' id=\"leave_info\">";
													echo "<tr>";
													echo "<th>Employee_Name</th>";
													echo "<th>DOJ</th>";
													 echo "<th>Department</th>";
													  echo "<th>Position</th>";
													echo "</tr>";
													for($i=0;$i<$nrow;$i++) {
														$id1=mysql_result($res4,$i,"name");
														$id2=mysql_result($res4,$i,"doj");
														$id3=mysql_result($res4,$i,"department");
														$id4=mysql_result($res4,$i,"position");
													echo "<tr>";
													echo "<td>".$id1."</td>";
													echo "<td>".$id2."</td>";
													echo "<td>".$id3."</td>";
													echo "<td>".$id4."</td>";
													echo "</tr>";
													}
													
													echo "</table>";
													echo"</div>";
												   
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
  <p class="copyright">&copy;&nbsp;&nbsp;2016 All Rights Reserved &nbsp;&bull;&nbsp; Design by <a href="http://www.freecsstemplates.org/"></a>.</p>
</div>
</html>
