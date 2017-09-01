<?php
session_start();
$userId=$_SESSION['user'];
$type=$_SESSION['type'];
//echo $type;
?>
<?php
$_SESSION['user']=$userId;
$_SESSION['type']=$type;

$update_field=$_POST["r4"];
$_SESSION['update']=$update_field;
switch($update_field)
{
    case "emp_info": include("emp_info_update.php");
         break;
         case "acad_info":include("acad_info_update.php");
             break;
              case "official_info":include("official_info_update.php");
                  break;
                    case "use_pass":include("use_pass_update.php");
                        break;

}


?>