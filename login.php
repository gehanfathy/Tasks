<?php
session_start();
if (isset($_SESSION['Username'])){
header('Location:profile.php');}
include 'init.php';
include $tpl . 'header.php';
include 'includes/languages/english.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$username= $_POST['user'];
$password= $_POST['password'];
$hashedpass=sha1($password);
 echo $username.' '.$hashedpass.'';
 $stmt = $conn->prepare("SELECT Username,Password FROM users WHERE Username= ? AND Password=? AND GroubID=1");
$stmt ->execute(array($username, $hashedpass));
$count= $stmt->rowCount();
if($count> 0){
   $_SESSION['Username']=$username;
   $_SESSION['hashedpass']=$hashedpass;
   header('Location:profile.php');
   exit();
}
}
?>
<from class="login" action="<?php echo $SERVER['PHP_SELF'] ?>" method="post"> 
    <h3 class="text-center">Admain Login </h3>
    <input class="from-control input-lg" type="text" name="username" placeholder="usename" autocomplete="off"/><br/>
    <input class="from-control input-lg" type="password" name="pass" placeholder="password" autocomplete="new-password"/><br/>
    <input class="but but-lg but-primary but-block" type="submit" value="login" />

      