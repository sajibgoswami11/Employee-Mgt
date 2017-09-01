<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>register</title>
<meta name="keywords" content="" />
<meta name="Morning Dew" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
      <div id="menu">
			<ul id="main">
			  <li class="current_page_item"><a href="index.php">Homepage</a></li>
			  <li><a href="home.php">Services</a></li>
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
																				  session_start();
																					
																			?>


																			<script type="text/javascript">
																			function check(value){ 
																			xmlHttp=GetXmlHttpObject()
																			var url="checkemail.php";
																			url=url+"?emailid="+value;
																			xmlHttp.onreadystatechange=stateChanged 
																			xmlHttp.open("GET",url,true)
																			xmlHttp.send(null)
																			}
																			function stateChanged(){ 
																			if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){ 
																			var showdata = xmlHttp.responseText; 
																			document.getElementById("mydiv").innerHTML= showdata;
																			} 
																			}
																			function GetXmlHttpObject(){
																			var xmlHttp=null;
																			try{
																			xmlHttp=new XMLHttpRequest();
																			}
																			catch (e) {
																			try {
																			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
																			}
																			catch (e){
																			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
																			}
																			}
																			return xmlHttp;
																			}
																			</script>
																						   
																			  
																					<form name="reg" method="post" action="MailSend.php">

																			 <i>Enter Data in all the fields</i><br/>
																					
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
																					<label for="dob">Date of Birth(example:dd.mm.yyyy)<br/></label> <input type="text" class="class1" id="dob" name="dob"/>
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
																					<input type="radio" name="r2"  value="Analyst"/>Analyst
																					<br/>
																					<input type="radio" name="r2"  value="Developer"/>Developer
																					<br/>
																					<input type="radio" name="r2"  value="Management"/>Management
																					<br/>
																					<br/>
																					Position:
																					<br/>
																					<input type="radio" name="r3"  value="General Employee"/>General Employee
																					<br/>
																					
																					<label for="salary">Present Salary:(without comma)</label> <br/> <input type="text" class="class1" id="salary" name="salary"/>
																					<br/>
																					<label for="doj">Date of Joining(example:dd.mm.yyyy)<br/></label> <input type="text" class="class1" id="doj" name="doj" />
																					<br/>
																					
																				  <br/>
																					 <br/>
																				 <h2>Enter mail-id and password for verification code</h2>
																						<input type="email" name="emailid" id="emailid" placeholder="Email Id" onkeyup="check(this.value);"><br/>
																						<input type="hidden"><font color="red"><div id="mydiv"></div></font>
																						<input type="password" name="pass" placeholder="Password"><br/>
																						<input type="submit" name="register" value="Register">
																						<input type="Reset" name="Clear" value="Clear">

		  
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
  <p class="copyright">&copy;&nbsp;&nbsp;2016 All Rights Reserved &nbsp;&bull;&nbsp; Design by <a href="http://employemgt.orgfree.com/"></a>.</p>
</div>
</html>
