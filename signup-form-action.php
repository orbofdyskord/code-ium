<?php 
    //By team code-ium, for High Tech Hacks Hackathon 2.0
    include "taskbar.php";
    include "session.php";
    include "auth.php";

    $username = $_POST["username"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql1 = "
        SELECT * FROM users
        WHERE username = '$username';
    ";
    $rs1 = mysqli_query($dbc, $sql1);
    $row1 = mysqli_fetch_array($rs1);
    if(defined($rs1)) {
        header("Location: signup-form.php?userError=true");
    }

    $sql2 = "
        SELECT * FROM users
        WHERE email = '$email';
    ";
    $rs2 = mysqli_query($dbc, $sql1);
    $row2 = mysqli_fetch_array($rs1);
    if(defined($rs2)) {
        header("Location: signup-form.php?emailError=true");
    }

    $_SESSION["firstName"] = $firstName;
    $_SESSION["lastName"] = $lastName;
    $_SESSION["email"] = $email;
    $_SESSION["userID"] = $userID;
    header("Location: connection.php")
?>