<?php
session_start();
$userId=$_SESSION['user'];
$type=$_SESSION['type'];
//echo $type;
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
      <div id="menu">
			<ul id="main">
			  <?php include('menu1.php'); ?>
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
        
                <div class="post">													
																<?php
											
											//$db=mysql_connect("localhost","root","");
											//mysql_select_db('emp_mgt',$db) or die("error");
																$db=mysql_connect("localhost","1251526","352Sabuj");
										mysql_select_db("1251526db2",$db) or die( "Unable to select database");
																	//$Emp_id=$_POST["emp_id"];

																$sql4="select * from leave_info ";
																$res4=mysql_query($sql4) or die("Not executed4");
																$row4=mysql_fetch_array($res4);
																$nrow =  mysql_num_rows($res4);
															   
																 echo"<br/>";
																  echo"<br/>";
																echo"<div id='table'>";
																echo "<table border='2' id='leave_info'>";
																echo "<tr>";
																echo "<th >Employee_Id</th>";
																echo "<th >Start Date</th>";
																echo "<th >End Date</th>";
																echo "<th >Cause</th>";
																echo "<th >Status</th>";
																echo "<th >Action</th>";
																echo "</tr>";
																echo "<tr>";
																
																while ($row4 = mysql_fetch_array($res4)) {
													   
																echo "<tr><form action=make_decision_query.php method=post>";
																echo "<td><input type=text name=pname value='".$row4['emp_id']."'</td>";
																echo "<td><input type=text name=sdate value='".$row4['start_date']."'</td>";
																echo "<td><input type=text name=edate value='".$row4['end_date']."'</td>";
																echo "<td><input type=text name=cause value='".$row4['cause']."'</td>";
																echo "<td><input type=text name=stat value='".$row4['status']."'</td>";
															   
																echo "<td><input type=submit>";
																	echo"</form></tr>";
																	
																						  }
															?>	 
															 
															<br/>
															</table>
																</div>
															 
															   
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
			  
        
    <!-- end content -->
    <!-- start sidebars -->
    
    <!-- end sidebars -->
    <div style="clear: both;">&nbsp;</div>
  
  <!-- end page -->
</div>
<div id="footer">
  <p class="copyright">&copy;&nbsp;&nbsp;2016 All Rights Reserved &nbsp;&bull;&nbsp; Design by <a href="http://www.freecsstemplates.org/"></a>.</p>
</div>
</html>
