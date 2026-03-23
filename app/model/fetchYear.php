<?php
$sql =  "SELECT * FROM year_level";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$years =  $result->fetch_all(MYSQLI_ASSOC);
?>
      <ul class="nav nav-third-level">
<?php foreach($years as $year):?>
            <li>
       
                <a href="">
                            <i class="fa fa-level-up fa-fw"></i>
                    <?php echo $year['year_level_name'] ?></a>
            </li>
            <?php endforeach;?>
        </ul>

