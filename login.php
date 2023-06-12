<?php
session_start();
require_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $EMAIL = $_POST['EMAIL'];
    $PASSWORD = $_POST['PASSWORD'];
    // $FIRST_NAME = $_POST['FIRST_NAME'];

    // Retrieve user from the database based on email
    $sql = "SELECT * FROM register WHERE EMAIL = '$EMAIL'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Verify the password
        if ($PASSWORD == $row['PASSWORD']) {
            // Password is correct, set session variables and redirect to userInfo.php
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['EMAIL'] = $row['EMAIL'];
            $_SESSION['FIRST_NAME'] = $row['FIRST_NAME'];   
            // header("Location: appointment.php?id=" .$ID);
            header("Location: appointment.php?id=" . $row['ID']);

            exit;
        } else {
            echo '<script>alert("Invalid password");</script>';
        }
        
    } else {
        echo '<script>alert("Invalid mail");</script>';
        echo '<script>window.location.href = "home.php";</script>';
    }
    
}

// mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loggin.css">
    <style>
        input[type="email"],
        input[type="password"] {
            background-color: #fff;
            color: black;
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
        <form method="post" action=""
        name="login"
        id="login"
       >
            <h2> Login </h2>
            <label for="loginEmail">
                Email: <br>
                <input type="email" id="email" name="EMAIL" placeholder="Enter your email">
            </label> <br>
            <label for="loginPassword">
                Password: <br>
                <input type="password" id="loginPassword" name="PASSWORD" placeholder="Enter your password">
            </label> <br>  
            <p id="loginError">
            <?php
                if (isset($_SESSION['invalidMail']) && $_SESSION['invalidMail']) {
                    echo "Invalid mail";
                    $_SESSION['invalidMail'] = false;
                }
                ?>
            </p>
            <br>
            <input type="submit" value="Login" onclick="showAlert()" />

<script>
  function showAlert() {
    alert("Login successful!");
  }
</script>

            <p> Or <a href="home2.php"> Sign up instead </a> </p>
            <button onclick="goback()"> Go Back </button>
        </form>
    </div>
    <footer style="background-color: #f8f3f3; padding: 5px; text-align: center; position: fixed; bottom: 0; left: 0; width: 100%; padding-top: 0px; font-size: 12px;">
        <p>&copy; 2023 Online Vaccination Portal</p>
    </footer>
    <script>
        function goback(){
            history.back();
        }
    </script>
    <script>
     function goback() {
            alert("You are going back to the home page.");
            history.back();
        }
        </script>
    <script src="login.js"></script>
</body>
</html>