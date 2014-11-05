<?php
header('Content-Type: text/html; charset=utf-8');

session_start();
$_SESSION['open']=1;
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    if(empty($_POST['fzdt_tip']))
        $errors="<font color='red'>Nisti uneo opstinu!</font>";
    else 
        $kategorija=trim($_POST['fzdt_tip']);
}
if (empty($errors))
{
    require('connect.php');
    $query="INSERT INTO kategorije (ime) VALUES('$kategorija')";
    $result=@mysqli_query($dbcon,$query);   
    $_SESSION['message']="<font color='green'>Uneli ste kategoriju: $kategorija</font>";
}
else 
{    
    $_SESSION['message']=$errors;
}
header("location:../sajt/Dodavanje.php");
?>