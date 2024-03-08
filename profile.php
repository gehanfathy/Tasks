<?php
session_start();
if (isset($_SESSION["username"])){ 
    echo $_SESSTION['$username'];

} else {
    echo 'not exsist';
}
?>