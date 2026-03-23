<?php
include_once '../../config/config.php';
function insertStudent($conn,$student_number, $firstName, $lastName, $middleName, $birthDate, $sex, $contactNumber,$email) {
    $sql = "INSERT INTO students 
        (student_number, first_name, last_name, middle_name, birth_date, sex, contact_number, stud_email, created_at) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, CURDATE())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $student_number, $firstName, $lastName, $middleName, $birthDate, $sex, $contactNumber, $email);
    
    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        $error = $stmt->error;
        $stmt->close();
        return "Error: " . $error;
    }
}