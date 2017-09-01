<?php
//session_start();
$type=$_SESSION['type'];
//echo $type;
?>
<?php
switch ($type)
        {
            case 1:
         echo "<ul>";
         
         echo  "<li><a href='viewprofile.php'>ViewProfile</a></li> ";
         echo  " <li><a href='Create_employee.php'>Create Employee</a></li>";
         echo  " <li><a href='updateprofile.php'>Updateprofile</a></li>";
         echo  " <li><a href='leave_apply.php'>Leave Apply</a></li>";
         echo  " <li><a href='select_for_grant.php'>Show Apply</a></li>";
         echo  " <li><a href='view_all.php'>View All Employee</a></li>";
         echo  " <li><a href='logout.php'>Logout</a></li>";
            
         echo  " </ul>";
                break;
            case 2:
                echo "<ul>";
        
         echo  "<li><a href='viewprofile.php'>ViewProfile</a></li> ";   
         echo  " <li><a href='updateprofile.php'>Updateprofile</a></li>";
         echo  " <li><a href='leave_apply.php'>Leave Apply</a></li>";        
         echo  " <li><a href='view_all.php'>View All Employee</a></li>";
         echo  " <li><a href='logout.php'>Logout</a></li>";
                break;
            case 3:
                echo "<div class=\"leftmenu\">";
                echo "<a href=\"home.php\">Home</a>";
                echo "</div>";
                echo "<div class=\"leftmenu\">";
                echo "<a href=\"viewprofile.php\">ViewProfile</a>";
                echo "</div>";
                echo "<div class=\"leftmenu\">";
                echo "<a href=\"updateprofile.php\">Updateprofile</a>";
                echo "</div>";
                echo "<div class=\"leftmenu\">";
                echo "<a href=\"leave_apply.php\">Leave_Apply</a>";
                echo "</div>";
                echo "<div class=\"leftmenu\">";
                echo "<a href=\"salaryadjust.php\">SalaryAdjust</a>";
                echo "</div>";
                echo "<div class=\"leftmenu\">";
                echo "<a href=\"view_all.php\">View All Employee</a>";
                echo "</div>";
                echo "<div class=\"leftmenu\">";
                echo "<a href=\"leavegrant.php\">Status Of Apply</a>";
                echo "</div>";
                echo "<div class=\"leftmenu\">";
                echo "<a href=\"logout.php\">Logout</a>";
                echo "</div>";

                break;
        }
?>



