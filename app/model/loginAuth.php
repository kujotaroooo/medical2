<?php



function getUser( $conn, $username){


    $sql = "SELECT * FROM admin WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
