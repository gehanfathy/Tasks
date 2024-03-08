<?php
session_start();
if(!isset($_SESSION['password'])){
    header('Location: login.php');
    exit();
}
else{
    if(isset($_GET['username'])){ 
$newname=$_GET['newname'];
require_once 'config.php';
$sql="UPDATE users SET username=:new WHERE password=:pass";
$stmt=$conn->prepare($sql);
$stmt->execute(array(
    ':new'=>$newname,
    ':pass'=>$_SESSION['password']
));
if($stmt){
    echo "successfully changed";
}
}
}
?>