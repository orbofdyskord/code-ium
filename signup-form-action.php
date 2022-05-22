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

    $sql0 = "
        SELECT * FROM topics
    ";
    $rs0 = mysqli_query($dbc, $sql1);

    $topicNames = array();
    $topicIDs = array();

    while($row0 = mysqli_fetch_array($rs0)) {
        $topicID = $row0["topicID"];
        $topicName = $row0["topicName"];       //Maybe unnecessary

        if(defined($_POST["$topicName"])) {
            array_push($topicNames, $topicName);    //Maybe unnecessary
            array_push($topicIDs, $topicID);
        }
    }

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

    $sql3 = "
        INSERT INTO users (username, password, firstName, lastName, email) values (\"$username\", \"$password\", \"$firstName\", \"$lastName\", \"$email\");
    ";
    mysqli_query($dbc, $sql3);
    $sql4 = "
        SELECT * FROM users
        WHERE username = \"$username\" AND password = \"$password\";
    ";
    $rs4 = mysqli_query($dbc, $sql4);
    $row4 = mysqli_fetch_array($rs4);
    $userID = $row4["userID"];

    $_SESSION["firstName"] = $firstName;
    $_SESSION["lastName"] = $lastName;
    $_SESSION["email"] = $email;
    $_SESSION["userID"] = $userID;


    foreach($topicIDs as $ID) {
        $sql5 = "
            INSERT INTO usersToTopics(userID, topicID) values ($userID, $ID);
        ";
    }

    header("Location: connection.php")
?>