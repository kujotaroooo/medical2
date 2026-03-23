<?php
session_start();
require_once '../model/loginAuth.php';
require_once '../../config/config.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    if (isset($_POST["login"])) {

        $username = $_POST["UserName"];
        $pwd = $_POST["Password"];

        $user = getUser($conn,$username);

     if( $user && $user['password'] === $pwd){
    $_SESSION['user'] = $user;
  
    session_regenerate_id(true);
 
    header("Location: /medical/app/view/dashboard.php");
    exit();
} else {
    $_SESSION['error'] = "Wrong Credentials";
    header("Location: /medical/app/view/login.php");
    exit();
}

    }
}
?>