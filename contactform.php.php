<?php 

if(isset($_POST['submit'])){
$FName = "First Name: ".$_POST['first_name']." \n";
$LName = "Last Name: ".$_POST['last_name']." \n";
$Email = "Email: ".$_POST['email']." \n";
$Dept = "Department: ".$_POST['department']." \n";
$Gender = "Gender: ".$_POST['gender']." \n";
$Message = "Message: ".$_POST['message']." \n";
$file=fopen( $Fname .'.txt', "a");
fwrite($file, $FName);
fwrite($file, $LName);
fwrite($file, $Email);
fwrite($file, $Dept);
fwrite($file, $Gender);
fwrite($file, $Message);
fclose($file);
}
?>
