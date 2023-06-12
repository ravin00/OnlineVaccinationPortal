
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="loggin.css"/>

 
  </head>
  <body>
    <div class="theTitle">
        <h1>
            Online Vaccination Portal
        </h1>
    </div>
    <div class="container shadow-4">
        <?php
        include 'message.php';
        ?>
        <form action="code.php" method="POST" onsubmit="return validate()" id="signUp" name="signUp">
            <h2> Sign Up</h2>
            <label for="name">
                Name: <br>
                <input type="text" name="name" id="name" placeholder="Your name">
            </label> <br>
            <label for="email">
                Email: <br>
                <input type="text" id="email" name="email" placeholder="Your email">
            </label> <br>
            <label for="password">
                Password: <br>
                <input type="password" id="password" name="password" placeholder="Enter a password">
            </label> <br>
            <p id="error"></p>
            <label for="confirmPassword">
                Confirm Password: <br>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password">
            </label>
            <p id="passwordConfirm"></p>
            <br><br>
            <button type="submit" name="createAccount"> Create account </button> <br> <br>
            <button onclick="goback()">Go Back</button>
            <br><br>
            <p id="login">
                Already have an account? <a href="login.php"> log in instead </a>
                <p id="ifForiegn">
                    If you are a foreign person, Please click <a href="foreign.php"> here </a> to register
                </p>
            </p>
        </form>
    </div>
    <footer>
        <p>&copy; 2023 Online Vaccination Portal</p>
    </footer>
    <script src="./validate.js"></script>
    <script>
        function goback(){
            history.back();
        }
    </script>
  </body>
</html>
