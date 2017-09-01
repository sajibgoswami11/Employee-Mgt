<html>
<head>
<title>
Verify Register
</title>
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>


<body>
<div id="container">
		<div id="mainpic">
        	<h1><span class="lighter">Employee Mgt System</span></h1>
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.php">Home</a></li>
                <li class="menuitem"><a href="#">About</a></li>
                
              <li class="menuitem"><a href="#">Contact</a></li>
            </ul>
        </div>
        
		<div id="content">
<form name="ve" method="post" action="CheckRegister.php">
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
        <label for="dob">Date of Birth(example:01.01.1990)<br/></label> <input type="text" class="class1" id="dob" name="dob"/>
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
        <label for="doj">Date of Joining(example:01.01.2015)<br/></label> <input type="text" class="class1" id="doj" name="doj" />
        <br/>
        
     
        

		 <br/>
        <br/>
        <input type="reset" id="res1" value="Reset All"/>
        <br/>
        <br/>
        <input type="submit" id="s1" value="Submit"/>
        <br/>
        <br/>
  
         <?php
      session_start();
        
?>
	<div id="footer"><h3><a href="http://www.salesorder.com">Sillicon_lab web design</a></h3></div>
       </div>
	</body>
</html>	
