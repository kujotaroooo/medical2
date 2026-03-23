<?php
require_once '../../config/config.php';

$sql = "SELECT * FROM program";
$stmt = $conn->prepare($sql); // prepare ini for statement
$stmt->execute();              // tapos ig execute
$result = $stmt->get_result(); // ngan ig get an result
$programs = $result->fetch_all(MYSQLI_ASSOC); // tapos ig fetch all as associative array


?>
<?php foreach ($programs as $program): ?>
    <li>
    
        <a href="#">
               <i class="fa fa-graduation-cap fa-fw"></i>
            <?php echo $program['program_code']; ?>
            <span class="fa arrow"></span>
        </a>

        <ul class="nav nav-third-level collapse">
            <?php include('fetchYear.php'); ?>
        </ul>
    </li>
<?php endforeach; ?>

