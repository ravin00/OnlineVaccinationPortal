<?php
session_start();
include 'connect.php';

if (isset($_POST['submit'])) {
    $FIRST_NAME = $_POST['FIRST_NAME'];
    $LAST_NAME = $_POST['LAST_NAME'];
    $EMAIL = $_POST['EMAIL'];
    $PASSWORD = $_POST['PASSWORD'];

    $sql = "INSERT INTO `register`(`FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PASSWORD`)
            VALUES ('$FIRST_NAME', '$LAST_NAME', '$EMAIL', '$PASSWORD')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('Location: login.php');
        exit();
    } else {
        die(mysqli_error($con));
    }
}

session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="stylesheet" href="loggin.css">
    <style>
    input[type="text"],
    input[type="password"] {
      background-color: white;
      color: black;
    }

    .container {
      max-width: 400px; /* Adjust the maximum width as desired */
      margin: 0 auto;
    }
  </style>
</head>
<body>
    <div class="theTitle">
        <h1>
            Online Vaccination Portal
        </h1>
    </div>
    <div class="container shadow-4">
        <form onsubmit="return validate()" id="signUp" name="signUp" method="POST">
            <h2> Sign Up</h2>
            <label for="name">
                First Name: <br>
                <input type="text" name="FIRST_NAME" id="name" placeholder="Your name">
            </label> <br>
            <label for="name">
                Last Name: <br>
                <input type="text" name="LAST_NAME" id="name" placeholder="Your name">
            </label> <br>
            <label for="email">
                Email: <br>
                <input type="text" id="email" name="EMAIL" placeholder="Your email">
            </label> <br>
            <label for="password">
                Password: <br>
                <input type="password" id="password" name="PASSWORD" placeholder="Enter a password">
            </label> <br>
            <p id="error"></p>
            <label for="confirmPassword">
                Confirm Password: <br>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password">
            </label>
            <p id="passwordConfirm"></p>
            <br><br>
            <button type="submit" name="submit"> Create account </button> <br> <br>
            <button onclick="goback()">Go Back </button>
            <br><br>
            <p id="login">
                Already have an account? <a href="login.php"> log in instead </a>
                <p id="ifForiegn">
                    If you are a foreign person, Please click <a href="foreign.php"> here </a> to register
                </p>
            </p>
        </form>
    </div>
    <footer style="background-color: #f8f3f3; padding: 5px; text-align: center; position: fixed; bottom: 0; left: 0; width: 100%; padding-top: 0px; font-size: 12px;">
        <p>&copy; 2023 Online Vaccination Portal</p>
    </footer>
    <script src="validate.js"></script>
    <script>
        function goback(){
            history.back();
        }
    </script>
</body>
</html>
