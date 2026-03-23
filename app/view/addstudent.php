<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>

    <link href="/medical/public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/medical/public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="/medical/public/css/sb-admin-2.css" rel="stylesheet">
    <link href="/medical/public/css/add.css" rel="stylesheet">

    <style>
        .row {
            margin-left: -10px;
            margin-right: -10px;
        }

        .col-md-6 {
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
</head>

<body>
<div id="wrapper">

    <?php include('leftbar.php'); ?>

    <div id="page-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Add Student</h2>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="form-box">

                <form method="POST" action="../controller/addStudent.php">

                    <div class="row">

               
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Number</label>
                                <input type="text" name="student_number" placeholder="2024-0001" required>
                            </div>
                        </div>

                 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="stud_email" placeholder="student@email.com">
                            </div>
                        </div>

             
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="first_name">
                            </div>
                        </div>

                     
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="last_name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" name="middle_name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Birth Date</label>
                                <input type="date" name="birth_date">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sex</label>
                                <select name="sex">
                               
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                      <option value="female">yes please</option>
                                      
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" name="contact_number" placeholder="09XXXXXXXXX">
                            </div>
                        </div>

                    </div>

                    <div class="form-actions">
                        <button type="submit" name="add" class="btn-save">Save Student</button>
                        <a href="students.php" class="btn-cancel">Cancel</a>
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
