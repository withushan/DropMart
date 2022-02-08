<?php
session_start();
$tid = $_GET["id"];
$status=$_POST["status"];

include "../dbconfig.php";

$sql="UPDATE `teachers` SET  `regstatus` = '".$status."' WHERE `teachers`.`id` = ".$tid.";";

if(  mysqli_query($con,$sql))
{
  echo "File uploaded Successfully";
}
else
{
  echo "Opps something is wrong, Please select the file again";
}

header('Location:unregisteredTeachers.php');

?>
