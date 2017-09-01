<?php
session_start();
$update_field=$_SESSION['update'];
$userId=$_SESSION['user'];
$type=$_SESSION['type'];
?>
<?php
        switch($update_field)
        {
            case "emp_info":    //$userId=$_POST["e_id"];
                                $name = $_POST["f_name"];
                                $address=$_POST["addr"];
                                $email=$_POST["mail"];
                                $phone=$_POST["phone"];
                                //$gender=$_POST["r1"];
                               // $dob=$_POST["dob"];
                                break;
                 case "acad_info":
                                //$userId=$_POST["e_id"];
                                $degree=$_POST["degree"];
                                $inst=$_POST["inst"];
                                $result=$_POST["result"];
                     break;
                      case "official_info":
                                //$userId=$_POST["e_id"];
                                $name = $_POST["f_name"];
                                $department=$_POST["r2"];
                                //$position=$_POST["r3"];
                                $salary=$_POST["salary"];
                                //$doj=$_POST["doj"];
                          break;
                            case "use_pass":
                                //$userId=$_POST["e_id"];
                                $password1=$_POST["p1"];
                                $password2=$_POST["p2"];
                                if ((!$password1)||($password1!=$password2))
                                {
                                    $_SESSION["info"]="Enter Valid Passwords again";
                                    include("use_pass_update.php");
                                }
                                break;
        }


        $db=mysql_connect("localhost","1251526","352Sabuj");
        mysql_select_db("1251526db2",$db) or die( "Unable to select database");
        switch($update_field)
        {
            case "emp_info":
                $sql1="update employee_info set name='$name',address='$address',email='$email',phone='$phone' where emp_id='$userId'";
                $res1=mysql_query($sql1) or die("Not executed1");
                include("viewprofile.php");
                break;
                 case "acad_info":
                        $sql2="update acad_info set degree='$degree',institution='$inst',result='$result' where emp_id='$userId'";
                        $res2=mysql_query($sql2) or die("Not executed2");
                        include("viewprofile.php");
                        break;
                      case "official_info":
                            $sql3="update official_info set name='$name',department='$department',salary='$salary' where emp_id='$userId'";
                            $res3=mysql_query($sql3) or die("Not executed3");
                            include("viewprofile.php");
                            break;
                            case "use_pass":
                                if(($password1)&&($password1==$password2)){
                                $sql4="update login_info set pass='$password1' where id='$userId'";
                                    $res4=mysql_query($sql4) or die("Not executed4");
                                    include("viewprofile.php");
                                    }
                                break;

        }
        


?>