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
    <div>The best way to connect with somebody new across the world.</div>
    <a href="login-form.php">Log In</a>
    <a href="signup-form.php">Sign Up</a>
    <a href="team-info.php"><u>Who are we?</u></a>
</html>