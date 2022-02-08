<?php
session_start();
$tid = $_GET["id"];
$status=$_POST["status"];

include "./databases/connection.php";

$sql="UPDATE `teacher` SET  `registerStatus` = '".$status."' WHERE `teacher`.`teacherId` = ".$tid.";";

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
