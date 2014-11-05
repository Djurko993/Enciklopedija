<?php

require('connect.php');
$myusername=$_POST['k_ime_zp'];
$mypassword=$_POST['lozinka_zp'];

$myusername = stripslashes($myusername);    
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($dbcon,$myusername);    
$mypassword = mysqli_real_escape_string($dbcon,$mypassword);

$mypassword=sha1($mypassword);

$sql="SELECT * FROM korisnici WHERE username='$myusername' and password='$mypassword'";

$result=@mysqli_query($dbcon,$sql);


$count=@mysqli_num_rows($result);

if ($count==1){
    session_start();
    $_SESSION['k_ime_zp']=$myusername;
    $_SESSION['lozinka_zp']=$mypassword;
  
    header("location:../sajt/Dodavanje.php");
}
else 
    header("location:index.php");


?>