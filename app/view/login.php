<?php
session_start();
?>
 <!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1"/>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="cache-control" content="no-cache,no-store"/>
        <meta http-equiv="pragma" content="no-cache"/>
        <meta http-equiv="expires" content="-1"/>
        <meta name='mswebdialog-title' content='Connecting to Valdosta State University'/>

        <title>Sign In</title>



        
        <link rel="stylesheet" type="text/css" href="/medical/public/css/style.css" /><style>.illustrationClass {background-image:url(/adfs/portal/illustration/illustration.jpg?id=D15CF3C7F4E3571428A79296B0280DCA21E3F9626F2CAD1D96615C4F8D8913B1);}</style>

    </head>
<style>
    #header{
        position:relative;
        left:5px;
    }
</style>
    <body dir="ltr" class="body">
   
    <script type="text/javascript" language="JavaScript">
         document.getElementById("noScript").style.display = "none";
    </script>
    <div id="fullPage">
        <div id="brandingWrapper" class="float">
            <div id="branding"></div>
        </div>
        <div id="contentWrapper" class="float">
            <div id="content">
                <div id="header">
                    <img class='logoImage' id='companyLogo' src='/medical/public/images/med.png' alt='Alang-Alang State University'/>
                </div>
                <main>
                    <div id="workArea">
                        
    <div id="authArea" class="groupMargin">
        
        
        
    <div id="loginArea">        
        <div id="loginMessage" class="groupMargin">Log in</div>

        <form method="POST" id="loginForm" autocomplete="off" action="/medical/app/controller/login.php" >
            <div id="error" class="fieldMargin error smallText">
                <span id="errorText" for="" aria-live="assertive" role="alert"></span>
            </div>

            <div id="formsAuthenticationArea">
                <div id="userNameArea">
                    <label id="userNameInputLabel" for="userNameInput" class="hidden">User Account</label>
                    <input id="userNameInput" name="UserName" type="text" value="" tabindex="1" class="text fullWidth"
                        spellcheck="false" placeholder="@alang-alang" autocomplete="off"/>
                </div>

                <div id="passwordArea">
                    <label id="passwordInputLabel" for="passwordInput" class="hidden">Password</label>
                    <input id="passwordInput" name="Password" type="password" tabindex="2" class="text fullWidth"
                        placeholder="Password" autocomplete="off"/>
                        <?php
                      if (isset($_SESSION['error'])) {
    echo "<p style='color:red;'>".$_SESSION['error']."</p>";
    unset($_SESSION['error']);
}
                        ?>
                </div>
            
                <div id="submissionArea" class="submitMargin">
                    <input id="LoginB" type="submit" name="login" value="Log in">
                </div>
            </div>
            <input id="optionForms" type="hidden" name="AuthMethod" value="FormsAuthentication"/>
    
      </div>
</form>
       

       
    </div>

    </div>

                    </div>
                </main>
                <div id="footerPlaceholder"></div>
            </div>
            <footer id="footer">
               
            </footer>
        </div>     
    </div>
   


    </body>
</html> 

