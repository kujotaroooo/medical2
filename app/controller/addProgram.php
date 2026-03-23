<?php
session_start();
require_once '../../config/config.php';
include('../model/insertProgram.php');

if (isset($_POST['add'])) {
    if (empty($_POST['code']) || empty($_POST['program'])) {

    $_SESSION['error'] = "All fields are required.";
            header("Location: ../view/addprogram.php");
        exit();
    }
    $programCode = $_POST['code'];
    $programName = $_POST['program'];

    $result = insertProgram($conn, $programCode, $programName);

    if ($result) {
        
         $_SESSION['success'] = "Program Added Succesfully.";
            header("Location: ../view/addprogram.php");
        exit();
       
    } else {
     
        echo $result;
    }

    $conn->close();
}
