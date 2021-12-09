<?php
ob_clean();
session_start();

$f_open = fopen("login.txt", "r") or die("Unable to open file!");
$login = trim(fgets($f_open));
$password = fgets($f_open);

if($_POST['username']==$login and $_POST['userpass']==$password){
    $_SESSION['validation']="correct";
    header("Location:index.php");
} elseif ($_POST['username']=="" or $_POST['userpass']==""){
    $_SESSION['validation']="noReqests";
    header("Location:index.php");
} else{
    $_SESSION['validation']="incorrect";
    header("Location:index.php");
}
?>