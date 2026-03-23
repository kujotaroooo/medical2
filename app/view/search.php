<?php
session_start();
require_once '../../config/config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Student</title>

 
    <link href="/medical/public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/medical/public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="/medical/public/css/sb-admin-2.css" rel="stylesheet">
    <link href="/medical/public/css/add.css" rel="stylesheet">

    <style>
        .content-wrapper {
            padding: 30px;
        }

        .form-box {
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            width: 100%;
            max-width: 700px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid #e5e5e5;
            margin: 0 auto;
        }

        .form-group input {
            padding: 10px 12px;
            font-size: 14px;
        }

        .form-actions {
            margin-top: 15px;
            text-align: center;
        }

        .btn-search {
            background: #3c8dbc;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 0 6px 6px 0;
            cursor: pointer;
        }

        .btn-search:hover {
            background: #337ab7;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        table th, table td {
            text-align: left;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background: #f5f5f5;
        }

        @media (max-width: 576px) {
            .input-group .btn-search {
                width: 100%;
                border-radius: 6px;
                margin-top: 8px;
            }
        }
    </style>
</head>

<body>
<div id="wrapper">

 
    <?php include('leftbar.php'); ?>


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Search Student</h2>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="form-box">

      
                <form method="GET" action="">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="Enter student number, name, or email" value="<?= isset($_GET['query']) ? htmlspecialchars($_GET['query']) : '' ?>">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-search">Search</button>
                            </span>
                        </div>
                    </div>
                </form>

             
              
            </div>
        </div>

    </div>
</div>


<script src="/medical/public/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/medical/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/medical/public/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script src="/medical/public/js/sb-admin-2.js"></script>

</body>
</html>
