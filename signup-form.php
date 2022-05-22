<?php 
    //By team code-ium, for High Tech Hacks Hackathon 2.0
    include "taskbar.php";
    include "session.php";
    include "auth.php";

    if($_GET["userError"]) {
        echo "Username is taken.";
        echo "<br>";
    }
    if($_GET["emailError"]) {
        echo "Email is already in use.";
        echo "<br>";
    }
?>
<html>
    <form action="signup-form-action.php" method="post">
        <div class="form">
            Username: 
            <br>
            <input type="text" id="username" name="username" placeholder="Enter username here...">
            <br>
        </div>
        <div class="form">
            First name:
            <br>
            <input type="text" id="firstName" name="firstName" placeholder="Enter your first name">
            <br>
        </div>
        <div class="form">
            Last name:
            <br>
            <input type="text" id="lastName" name="lastName" placeholder="Enter your last name">
            <br>
        </div>
        <div class="form"><div>
            Email address:
            <br>
            <input type="text" id="email" name="email" placeholder="Enter your email">
            <br>
        </div>
        <div>
            Topics of interest:
            <?php 
                $sql1 = "
                    SELECT * FROM topics
                ";
                $rs1 = mysqli_query($dbc, $sql1);

                while($row1 = mysqli_fetch_array($rs1)) {
                    $topicID = $row1["topicID"];
                    $topicName = $row1["topicName"];

                    echo "<input type=\"checkbox\" name=\"$topicName\" value=\"$topicID\">$topicName";
                    echo "<br>";
                }
            ?>
        </div>
        <div class="form">
            Password:
            <br>
            <input type="password" id="password" name="password" placeholder="Enter password here...">
            <br>
        </div>
        <div class="form">
            Reenter password:
            <br>
            <input type="password" id="second-password" name="second-password" placeholder="Re-enter password here...">
            <br>
        </div>        
        <button type="submit" name="signup-form" value="Sign up">
            Sign up
        </button>
    </form>
</html>