<?php
include '../model/insertStudent.php';
session_start();

if(isset($_POST['add']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(empty($_POST['student_number']) || empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['middle_name']) || empty($_POST['birth_date']) || empty($_POST['sex']) || empty($_POST['contact_number']) || empty($_POST['stud_email'])) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: ../view/addstudent.php");
        exit();
    }

    $student_number = $_POST['student_number'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $middleName = $_POST['middle_name'];
    $birthDate = $_POST['birth_date'];
    $sex = $_POST['sex'];
    $contactNumber = $_POST['contact_number'];
    $email = $_POST['stud_email'];

    $result = insertStudent($conn, $student_number, $firstName, $lastName, $middleName, $birthDate, $sex, $contactNumber, $email);

 if($result === true){
        $_SESSION['success'] = "Student added successfully.";
        header("Location: ../view/addstudent.php#d");
        exit();
    } else {
        $_SESSION['error'] = $result;
        header("Location: ../view/addstudent.php#d");
        exit();
    }
}
