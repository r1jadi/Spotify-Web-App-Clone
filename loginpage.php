<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Spotify</title>
    <link rel="stylesheet" href="loginstyle.css">

</head>

<body>

<?php  
session_start();

if (!isset($_SESSION["role"])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION["role"] !== "admin") {
    echo "You don't have permission to access this page.";
    exit();
}
?>

    <header>
        <div class="headerlogin">
            <a href="homepage.php"><img class="hlogin" src="Images/headerlogo.png" alt="Header Logo" ></a>
        </div>
    </header> 
    



</div>

    <main>

    <div class="box">

        <form action="homepage.php" onsubmit="return validateLogIn()">

        <h1>Log in to Spotify</h1>
        
        <div>
            <hr>
            <p>Email address</p>
            <input class="inputclasses" type="email" name="usr" required="required" placeholder="email address" id="usremail">   
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
            <input type="submit" value="Log In" id="loginid">
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
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
       
        </form>
    </div>

    
</main>



<footer>
    <p>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
   </footer>


   <script src="loginscript.js"></script>

   
</body>
</html>