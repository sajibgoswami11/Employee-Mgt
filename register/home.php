
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Employee Management System</title>
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
      <p></p>
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
												$_SESSION['user']=$userId;
												$_SESSION['type']=$type;
												$_SESSION['count']=1;
												

												echo "<br/>";
												echo "<br/>";
												echo "<h1>Welcome $userId !</h1>";
												echo "<br/>";
												echo "<br/>";												
												?>
        
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
        <div class="entry">
          <p>Welcome to our website. </p>
          <p class="links"><a href="#" class="more">Read More</a></p>
        </div>
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
<?php
			session_start();
			$userId=$_SESSION['user'];
			$type=$_SESSION['type'];
			
//echo $type;
$count=$_SESSION['count'];
if(!$count){
 include("index.php");
 exit;
 $count=0;
 }
?>