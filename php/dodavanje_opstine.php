<?php
header('Content-Type: text/html; charset=utf-8');

session_start();
$_SESSION['open']=1;
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    if(empty($_POST['naziv_opstine']))
        $errors="<font color='red'>Nisti uneo opstinu!</font>";
    else 
        $ime_opstine=trim($_POST['naziv_opstine']);
}
if (empty($errors))
{
    require('connect.php');
    $query="INSERT INTO opstine (id_okrug,ime_opstine) VALUES(1,'$ime_opstine')";
    $result=@mysqli_query($dbcon,$query);   
    $_SESSION['message']="<font color='green'>Uneli ste opstinu: $ime_opstine</font>";
}
else 
{    
    $_SESSION['message']=$errors;
}
header("location:../sajt/Dodavanje.php");
?>