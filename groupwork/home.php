<?php

include 'connect.php'; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO issues (username,email,password) VALUES ('$username','$email','$password')";
   
  
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    

    header("Location:common_issues.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="home.css"> <!-- Updated CSS file for gaming style -->

    <title>Gamer's Issues and Resolutions</title>
</head>
<body>

<div class="banner">
    <div class="navbar">
        <img src="images.jpg" class="logo">
        <ul>
            <li><a href="thelastofus.php">Home</a></li>
            <li><a href="signup.php">SignUp</a></li>
        </ul>
    </div>
    <div class="content">
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo "WELCOME TO YOUR PROFILE, your email is " . $_SESSION['username'] . "";
        } else {
            echo "Welcome Guest";
        }
        ?>
        <hr>
        <h1>Gamer's Issues and Resolutions</h1>
        <p>Encountering problems while playing your favorite console game? Share the issue and find possible solutions below:</p>
        <form action="process_issue.php" method="POST"> <!-- Update the form action and method accordingly -->
            <label for="game">Game Name:</label>
            <input type="text" id="game" name="game" placeholder="Enter the name of the game...">
            <br>
            <label for="issue">Describe the Issue:</label>
            <textarea id="issue" name="issue" rows="4" cols="50"></textarea>
            <br>
           <a href="common_issues.php"> <input type="submit" value="Submit"></a>
        </form>

        <hr>

        <h2>Common Gaming Issues and Resolutions:</h2>
        <ul>
            <li>
                <strong>Game Freezing or Crashing:</strong>
                <ul>
                    <li>Ensure your console's firmware is up to date.</li>
                    <li>Check for game updates and install them.</li>
                    <li>Clean the game disc and ensure it's not scratched.</li>
                    <li>Clear cache and temporary files from the console.</li>
                </ul>
            </li>
            <li>
                <strong>Game Lag or Slow Performance:</strong>
                <ul>
                    <li>Check your internet connection for stability.</li>
                    <li>Close any background applications that may be consuming resources.</li>
                    <li>Lower the game's graphics settings if applicable.</li>
                    <li>Consider upgrading to a faster storage drive for the console.</li>
                </ul>
            </li>
            <li>
                <strong>Game Audio or Visual Glitches:</strong>
                <ul>
                    <li>Check for game updates and console firmware updates.</li>
                    <li>Verify your console's HDMI or AV cables are securely connected.</li>
                    <li>Try adjusting audio and video settings on the console.</li>
                    <li>If using a disc, clean it and ensure it's not damaged.</li>
                </ul>
            </li>
            <!-- Add more common gaming issues and resolutions as needed -->
        </ul>
    </div>
</div>

</body>
</html>
