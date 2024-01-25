<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Spotify</title>
    <link rel="stylesheet" href="signuppage.css">

</head>
<body>
    
    <header>
        <div class="headersignup">
            <a href="homepage.php"><img src="Images/headerlogo.png" alt="Header Logo" class="headerlogosignup"></a>
            <a href="loginpage.php" id="aid"><input type="submit" value="Log in" class="headersignuplogin"></a>
        </div>
    </header>

    <!--main-->

   
    <h1 id="h1main">Sign up to start listening</h1>

    <div class="container">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="return validateSignUp()">

            <div class="inputItem">
                <p>Email address
                    <input type="email" placeholder="name@domain.com" required="required" name="signupemail" class="inputclass" id="email">
                </p>
                
            </div>

            <div class="inputItem">
                <p>Create a password
                    <input type="password" required="required" name="signuppassword" class="inputclasspsw" id="password"> <br>
                    <span class="spantxt">The password must contain at least 8 characters, including at least 1 number and 1 special character.</span>
                </p>
                
            </div>

            <div class="inputItem">
               
                    <p>Name <br>
                        <span class="spantxt">This name will appear on your profile</span>
                    <input type="text" required="required" name="signupname" class="inputclass" id="name">
                    </p>
              
                
                
            </div>

            <div class="inputItem">
                <p>Date of birth
                    <input type="date" required="required" name="signupbirthday" class="inputclass" id="ditelindja">
                </p>
                
            </div>

            <div class="inputItem">   
                <p>Gender <br> <br>
                    <span class="spantxt">We use your gender to help personalize our content recommendations and ads for you.</span></p>
                <p class="gjiniap">Male<input type="radio" id="gjiniaM" name="gender" value="Male" required="required">
                Female<input type="radio" id="gjiniaF" name="gender" value="Female" required="required"></p>
                
                
            </div>
            
            <div class="inputItem">
                <p>Terms & Conditions
                <p><input type="checkbox" class="inputclass" id="terms" required="required"><span class="spantxt">Share my registration data with Spotify's content providers for marketing purposes. <br>
                    <br>
                By clicking on sign-up, you agree to Spotify's Terms and Conditions of Use.</span>
                </p>
                
            </div>

            <div>
                <input type="submit" value="Sign Up" id="signupid" name="signupbutton" class="inputclasssignup">
            </div>
        </form>
        
    </div>
<!--/main-->

    <footer>
        <p>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
       </footer>

       <script src="scriptsignup.js"></script>

       <?php include_once 'RegisterController.php';?>
</body>
</html>
