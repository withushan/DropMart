<?php
$con = mysqli_connect("localhost","sureahgx_ggj","125#@LOLOLOGjjChamiraAyye","sureahgx_gg");
if(!$con)
{
  die("Cannot connect to DB server");
}

if(isset($_POST["register"])){


  if(isset($_POST["Name1"])){
    $TeamName=$_POST["TeamName"];
    // $NumberOfMembers=$_POST["NumberOfMembers"];
    // $Location=$_POST["Location"];
    // $Name1=$_POST["Name1"];
    // $ContactNumber1=$_POST["ContactNumber1"];
    // $Age1=$_POST["Age1"];
    // $IDNumber1=$_POST["IDNumber1"];
    // $GuardianNumber1=$_POST["GuardianNumber1"];
    // $Organization1=$_POST["Organization1"];
    // $Gender1=$_POST["Gender1"];
    // $Email1=$_POST["Email1"];
    // $Size1=$_POST["Size1"];
    // $Leader1="1";

    $sql="INSERT INTO `participants` (`id`, `team`) VALUES (NULL, 'HELPPPPP');";
    // $sql="INSERT INTO `participants` (`id`, `team`, `members`, `location`, `name`, `contact_number`, `age`, `id_number`, `guardian_number`, `organization`, `gender`, `email`, `size`, `leader`) VALUES (NULL, '".$TeamName."', '".$NumberOfMembers."', '".$Location."', '".$Name1."', '".$ContactNumber1."', '".$Age1."', '".$IDNumber1."', '".$GuardianNumber1."', '".$Organization1."', '".$Gender1."', '".$Email1."', '".$Size1."', '".$Leader1."');";

    if(mysqli_query($con,$sql))
    {
      echo "console.log(Registered)";
      header("HTTP/1.1 201 OK");

    }
    else
    {
      echo "console.log(Error!)";
      header("HTTP/1.1 404 Not Found");

    }

  }

  // if(isset($_POST["Name2"])){
  //   $TeamName=$_POST["TeamName"];
  //   $NumberOfMembers=$_POST["NumberOfMembers"];
  //   $Location=$_POST["Location"];
  //   $Name2=$_POST["Name2"];
  //   $ContactNumber2=$_POST["ContactNumber2"];
  //   $Age2=$_POST["Age2"];
  //   $IDNumber2=$_POST["IDNumber2"];
  //   $GuardianNumber2=$_POST["GuardianNumber2"];
  //   $Organization2=$_POST["Organization2"];
  //   $Gender2=$_POST["Gender2"];
  //   $Email2=$_POST["Email2"];
  //   $Size2=$_POST["Size2"];
  //   $Leader2=0;
  //
  //   $sql="INSERT INTO `participants` (`id`, `team`, `members`, `location`, `name`, `contact_number`, `age`, `id_number`, `guardian_number`, `organization`, `gender`, `email`, `size`, `leader`) VALUES (NULL, '".$TeamName."', '".$NumberOfMembers."', '".$Location."', '".$Name2."', '".$ContactNumber2."', '".$Age2."', '".$IDNumber2."', '".$GuardianNumber2."', '".$Organization2."', '".$Gender2."', '".$Email2."', '".$Size2."', '".$Leader2."');";
  //   if(  mysqli_query($con,$sql))
  //   {
  //     echo "Registered";
  //   }
  //   else
  //   {
  //     echo "Error!";
  //   }
  // }

  // if(isset($_POST["Name3"])){
  //   $TeamName=$_POST["TeamName"];
  //   $NumberOfMembers=$_POST["NumberOfMembers"];
  //   $Location=$_POST["Location"];
  //   $Name3=$_POST["Name3"];
  //   $ContactNumber3=$_POST["ContactNumber3"];
  //   $Age3=$_POST["Age3"];
  //   $IDNumber3=$_POST["IDNumber3"];
  //   $GuardianNumber3=$_POST["GuardianNumber3"];
  //   $Organization3=$_POST["Organization3"];
  //   $Gender3=$_POST["Gender3"];
  //   $Email3=$_POST["Email3"];
  //   $Size3=$_POST["Size3"];
  //   $Leader3=0;
  //
  //   $sql="INSERT INTO `participants` (`id`, `team`, `members`, `location`, `name`, `contact_number`, `age`, `id_number`, `guardian_number`, `organization`, `gender`, `email`, `size`, `leader`) VALUES (NULL, '".$TeamName."', '".$NumberOfMembers."', '".$Location."', '".$Name3."', '".$ContactNumber3."', '".$Age3."', '".$IDNumber3."', '".$GuardianNumber3."', '".$Organization3."', '".$Gender3."', '".$Email3."', '".$Size3."', '".$Leader3."');";
  //   if(  mysqli_query($con,$sql))
  //   {
  //     echo "Registered";
  //   }
  //   else
  //   {
  //     echo "Error!";
  //   }
  // }

  // if(isset($_POST["Name4"])){
  //   $TeamName=$_POST["TeamName"];
  //   $NumberOfMembers=$_POST["NumberOfMembers"];
  //   $Location=$_POST["Location"];
  //   $Name4=$_POST["Name4"];
  //   $ContactNumber4=$_POST["ContactNumber4"];
  //   $Age4=$_POST["Age4"];
  //   $IDNumber4=$_POST["IDNumber4"];
  //   $GuardianNumber4=$_POST["GuardianNumber4"];
  //   $Organization4=$_POST["Organization4"];
  //   $Gender4=$_POST["Gender4"];
  //   $Email4=$_POST["Email4"];
  //   $Size4=$_POST["Size4"];
  //   $Leader4=0;
  //
  //   $sql="INSERT INTO `participants` (`id`, `team`, `members`, `location`, `name`, `contact_number`, `age`, `id_number`, `guardian_number`, `organization`, `gender`, `email`, `size`, `leader`) VALUES (NULL, '".$TeamName."', '".$NumberOfMembers."', '".$Location."', '".$Name4."', '".$ContactNumber4."', '".$Age4."', '".$IDNumber4."', '".$GuardianNumber4."', '".$Organization4."', '".$Gender4."', '".$Email4."', '".$Size4."', '".$Leader4."');";
  //   if(  mysqli_query($con,$sql))
  //   {
  //     echo "Registered";
  //   }
  //   else
  //   {
  //     echo "Error!";
  //   }
  // }

  // if(isset($_POST["Name5"])){
  //   $TeamName=$_POST["TeamName"];
  //   $NumberOfMembers=$_POST["NumberOfMembers"];
  //   $Location=$_POST["Location"];
  //   $Name5=$_POST["Name5"];
  //   $ContactNumber5=$_POST["ContactNumber5"];
  //   $Age5=$_POST["Age5"];
  //   $IDNumber5=$_POST["IDNumber5"];
  //   $GuardianNumber5=$_POST["GuardianNumber5"];
  //   $Organization5=$_POST["Organization5"];
  //   $Gender5=$_POST["Gender5"];
  //   $Email5=$_POST["Email5"];
  //   $Size5=$_POST["Size5"];
  //   $Leader5=0;
  //
  //   $sql="INSERT INTO `participants` (`id`, `team`, `members`, `location`, `name`, `contact_number`, `age`, `id_number`, `guardian_number`, `organization`, `gender`, `email`, `size`, `leader`) VALUES (NULL, '".$TeamName."', '".$NumberOfMembers."', '".$Location."', '".$Name5."', '".$ContactNumber5."', '".$Age5."', '".$IDNumber5."', '".$GuardianNumber5."', '".$Organization5."', '".$Gender5."', '".$Email5."', '".$Size5."', '".$Leader5."');";
  //   if(  mysqli_query($con,$sql))
  //   {
  //     echo "Registered";
  //   }
  //   else
  //   {
  //     echo "Error!";
  //   }
  // }

}


?>
