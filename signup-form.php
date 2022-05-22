<?php 
    //By team code-ium, for High Tech Hacks Hackathon 2.0
    include "taskbar.php";
    include "session.php";
    include "auth.php";

    if($_GET["userError"] == true) {
        echo "Username is taken.";
        echo "<br>";
    }
    if($_GET["emailError"] == true) {
        echo "Email is already in use.";
        echo "<br>";
    }
?>
<html>
    <form action="signup-form-action.php" method="post">
        <div>
            <input type="text" id="username" name="username" placeholder="Enter username here...">
        </div>
        <div>
            <input type="text" id="firstName" name="firstName" placeholder="Enter your first name">
        </div>
        <div>
            <input type="text" id="lastName" name="lastName" placeholder="Enter your last name">
        </div>
        <div>
            <input type="text" id="email" name="email" placeholder="Enter your email">
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="Enter password here...">
        </div>
        <div>
            <input type="password" id="second-password" name="second-password" placeholder="Re-enter password here...">
        </div>
        <!-- While loop for all the topics, in a list of checkboxes -->
        <button type="submit" name="signup-form" value="Sign up">
            Sign up
        </button>
    </form>
</html>