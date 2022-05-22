<?php 
    //By team code-ium, for High Tech Hacks Hackathon 2.0
    include "taskbar.php";
    include "session.php";
    include "auth.php";

    if($_GET["error"] == TRUE) {
        echo "Invalid username or password; please try again.";
        echo "<br>";
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <form action="login-form-action.php" method="post">
        <div class="form">
            Username:
            <br>
            <input type="text" id="username" name="username" placeholder="Enter username here...">
            <br>
        </div>
        <div>
            Password:
            <br>
            <input type="password" id="password" name="password" placeholder="Enter password here...">
            <br>
        </div>
        <button type="submit" name="login-form" value="Log In">
            Log In
        </button>
    </form>
</html>