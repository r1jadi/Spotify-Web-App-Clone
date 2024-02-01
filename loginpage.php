<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $selectedRole = $_POST['role'];

    header("Location: homepage.php?role=" . $selectedRole);
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Spotify</title>
    <link rel="stylesheet" href="loginstyle.css">

</head>

<body>



    <header>
        <div class="headerlogin">
            <a href="homepage.php"><img class="hlogin" src="Images/headerlogo.png" alt="Header Logo" ></a>
        </div>
    </header> 
    



</div>

    <main>

    <div class="box">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="return validateLogIn()">

        <h1>Log in to Spotify</h1>
        
        <div>
            <hr>
            <p>Email address</p>
            <input class="inputclasses" type="email" name="usremail" required="required" placeholder="email address" id="usremail">   
        </div>

        <div>
            <p>Password</p>
            <input class="inputclasses" type="password" name="psw" required="required" placeholder="password" id="psw">   
        </div>

        <div class="checkclass">
            <p>
            <input type="checkbox" /*id="rememberMeCheckbox"onchange="handleCheckboxChange()"*/ >Remember me</p>
        </div>
        
        <div>
            <input type="submit" value="Log In" id="loginid" name="submitlogin">
        </div>

        <br>

        <div class="linqet">
            <a href="#" id="forgotpsw" class="apswsignup">Forgot your password?</a>
            <hr id="hr2">
            <p id="psignup">Don't have an account? <a href="signuppage.php" class="apswsignup">Sign up for Spotify</a></p>
        </div>

        <div class="rolidiv">
             <p style="font-family: sans-serif; font-weight: bolder;">Role</p>
                <select name="role" required="required">
                <option value="user" name="user">User</option>
                <option value="admin" name="admin">Admin</option>
            </select>
       
        </form>
    </div>
    <?php include_once 'LoginController.php';?>
</main>



<footer>
    <p>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
   </footer>


   <script src="loginscript.js"></script>

   
</body>
</html>