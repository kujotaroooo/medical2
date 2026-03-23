<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: 404.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../../public/css/sb-admin-2.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="/medical/public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <?php include('leftbar.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
                       <h1 style="font-family: Poppins;">DASHBOARD</h1>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>
                        <div class="panel-body">
                        
                        </div>  
                    </div>
                </div>
            </div>

        </div>
    </div>
`
    <script src="../../public/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="../../public/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../public/bower_components/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="../../public/js/sb-admin-2.js" type="text/javascript"></script>
</body>
</html>
