<?php 
    //By team code-ium, for High Tech Hacks Hackathon 2.0
    include "taskbar.php";
    include "session.php";
    include "auth.php";
    
    if(!defined($_SESSION['userID'])) {
        header("Location: index.php");
        exit();
    }
?>