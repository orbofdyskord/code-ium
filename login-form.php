<?php 
    //By team code-ium, for High Tech Hacks Hackathon 2.0
    include "taskbar.php";
    include "session.php";
    include "auth.php";
?>
<html>
    <form action="login-form-action.php" method="post">
        <div>
            <textarea rows="2" cols="60" name="username" placeholder="Enter username here..."></textarea>
        </div>
        <div>
            <textarea rows="2" cols="60" name="password" placeholder="Enter password here..."></textarea>
        </div>
    </form>
</html>