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
    <form action="login-form-action.php" method="post">
        <div>
            <input type="text" id="username" name="username" placeholder="Enter username here...">
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="Enter password here...">
        </div>
        <button type="submit" name="login-form" value="Log In">
            Log In
        </button>
    </form>
</html>