<?php
function insertProgram($conn, $programCode, $programName) {
    $sql = "INSERT INTO program (program_code, program_name) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        return "Prepare failed: " . $conn->error;
    }

    $stmt->bind_param("ss", $programCode, $programName);

    if ($stmt->execute()) {
        $stmt->close();
        return true; 
    } else {
        $error = $stmt->error;
        $stmt->close();
        return "Error: " . $error;
    }
}
