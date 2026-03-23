<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Program</title>

    <link href="/medical/public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/medical/public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="/medical/public/css/sb-admin-2.css" rel="stylesheet">
    <link href="/medical/public/css/add.css" rel="stylesheet">

   
</head>
<body>
    <div id="wrapper">
    
        <?php include('leftbar.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2  class="page-header">Add Program</h2>
                </div>
            </div>

         
            <div class="content-wrapper">
                <div class="form-box">
                    <form method="post" action="../controller/addProgram.php">

                        <div class="form-group">
                            <label>Program Name</label>
                            <input type="text" name="program" placeholder="Bachelor of Science in IT" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Program Code</label>
                            <input type="text" name="code" placeholder="BSIT" class="form-control">
                        </div>

                     

                       <?php if (isset($_SESSION['error'])):?>
      <div class="alert alert-danger">
       <?php echo $_SESSION['error']; ?>
    </div>
<?php endif;  unset($_SESSION['error']); ?>

<?php if(isset($_SESSION['success'])):?>
    <div class="alert alert-success">
        <?php echo $_SESSION['success']; ?>
    </div>
<?php endif;  unset($_SESSION['success']); ?>

                        <div class="form-actions">
                            <input type="submit" value="Add Program" class="btn btn-primary" name="add">
                            
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- JS Scripts -->
    <script src="/medical/public/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/medical/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/medical/public/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="/medical/public/js/sb-admin-2.js"></script>

    <script>
        function confirmLogout() {
            if (confirm("Are you sure you want to logout?")) {
                window.location.href = "../controller/logout.php";
            }
        }
    </script>
</body>
</html>
