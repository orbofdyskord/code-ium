<?php 
    //By team code-ium, for High Tech Hacks Hackathon 2.0
    include "taskbar.php";
    include "session.php";
    include "auth.php";

    if(defined($_SESSION["userID"])) {
        echo "Session has timed out";
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>

    <div class="topnav">
        <a href= "settings.php"><img src="pics/setting-icon.png"></a>
    </div>

    <div class = "hike">
        <img class = "hikeImage" src="pics/takeAHike.jpeg"> 
    </div>

    <div class = "connect">The best way to connect with somebody new across the world.</div>  

    <div class = "login">
        <a href="login-form.php">Log In</a>
    </div>
        
    <div class = "signUp">
        <a href="signup-form.php">Sign Up</a>
    </div>
        
    <div class = "teamInfo">
        <a href="team-info.php"><u>Who are we?</u></a>
    </div>
        
    

    <div class="botnav">
        <img class = "vertical-center copyright" src="pics/copyright.png">
        <img class = "vertical-center logo" src="pics/codeium.png" >
        <a href= "help.php" class = "vertical-center">help?</a>
    </div>
</html>