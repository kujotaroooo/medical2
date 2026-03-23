

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<nav class="navbar navbar-default navbar-static-top" role="navigation"
			style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="dashboard.php">Clinic Records VSUA</a>
			</div>
						 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                   <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
    <a href=""><i class="fa fa-file fa-fw"></i> Medical Records <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        
  <?php
include_once('../model/fetchProgram.php');
  ?>
          

        <li><a href="/medical/app/view/addprogram.php "><i class="fa fa-plus-circle fa-fw"></i> Add Program</a></li>
   
    </ul>
</li>

                
                 <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Student<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    
                                    <a href="addstudent.php"><i class="fa fa-plus-circle fa-fw"></i>Add Student</a>
                                </li>
                                <li>
                                    <a href="search.php"><i class="fa fa-search fa-fw"></i>Search Students</a>
                                </li>
                            </ul>
                           
                        </li>
                        
                   <li>
                            <a href="register.php"><i class="fa fa-files-o fa-fw"></i>Regsiter</a>
                  </li>     
                                            
                   <li>
                            <a href="manage-students.php"><i class="fa fa-users fa-fw"></i>View Students</a>
                  </li>      
                   <li>
                            <a href="session.php"><i class="fa fa-calendar fa-fw"></i>Session</a>
                  </li>
      
                        <li>
                   <a href="change-password.php"><i class="fa fa-cog fa-fw"></i> Change Password</a>
                        </li>
                 <li>
                   <a href="admin-profile.php"><i class="fa fa-user fa-fw"></i>Admin Profile</a>
                        </li>


    <li>
    <a onclick="confirmLogout(); ">
        <i class="fa fa-sign-out fa-fw"></i>Logout
    </a>
</li>

                  </ul>      				  
                </div>
               
            </div>
            
        </nav>
 

<script>
function confirmLogout() {
    if (confirm("Are you sure you want to logout?")) {
        window.location.href = "../controller/logout.php";
    }
}
</script>

   