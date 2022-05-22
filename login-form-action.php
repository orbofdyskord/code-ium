<?php 
    //By team code-ium, for High Tech Hacks Hackathon 2.0
    include "taskbar.php";
    include "session.php";
    include "auth.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql1 = "
        SELECT * FROM users
        WHERE username = '$username' AND password = '$password';
    ";
    $rs1 = mysqli_query($dbc, $sql1);
    $row1 = mysqli_fetch_array($rs1);
    if(!defined($rs1)) {
        header("Location: login-form.php?error=true");
    }

    $_SESSION["firstName"] = $row1["firstName"];
    $_SESSION["lastName"] = $row1["lastName"];
    $_SESSION["email"] = $row1["email"];
    $_SESSION["userID"] = $row1["userID"];
    header("Location: connection.php")
?>