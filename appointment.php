<?php

include 'connect.php';

session_start();

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $nic=$_POST['nic'];
  $vac_type=$_POST['vac_type'];
  $app_date=$_POST['app_date'];

  $sql="insert into `appdetails`(`name`,`email`,`phone`,`nic`,`vac_type`,`app_date`)
  values('$name','$email','$phone','$nic','$vac_type','$app_date')";
  $result=mysqli_query($con,$sql);
  if($result){
    //  echo "Data inserted successfully";
     header('location:appointmentDisplay.php');
  }
  else{
    die(mysqli_error($con));
  }
}

session_destroy();

?>



<!DOCTYPE html>
<html>
<head>
    <title>Online Vaccination Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <header>
    <div>
        <h2 style="margin: 0;
    font-size: 32px;">Online Vaccination Portal</h2>
        <div class="user-welcome">
        <a href="appointment.php" style="color: black;">
        <?php
        // session_start();
      
    // session_start();
    if (isset($_SESSION['FIRST_NAME'])) {
        echo '<div style="text-align: center; font-size:20px;"><i class="fas fa-user"></i> Hello, ' . $_SESSION['FIRST_NAME'] . '</div>';
    } 
?>



        </a>
    </div>



        </div>


        <div class="navbar">
            <a href="home.php">Home</a>
            <a href="news.php">News</a>
            <div class="dropdown">
                <button class="dropbtn">Information
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="about.php">About</a>
                    <a href="vaccination.php">Vaccination Information</a>
                    <a href="appointment.php">Appointment</a>
                    <a href = "foreign.php">Foreigner Appointment</a>
                    <a href = "vacappointment.php">All vaccination details</a>
                    <a href = "docdetails.php"> Doctor availabilities</a>
                    <a href = "order.php">Order your vaccine</a>
                    <a href="center.php">Vaccination Centers</a>
                    <a href="contact.php">Contact Us</a>
                </div>
            </div> 
            <?php
        
          if (isset($_SESSION['FIRST_NAME'])) {
              echo '<a href="home.php" class="navbar-btn" onclick="return confirmLogout();">Sign Out</a>';
  
              echo '<script>
                  function confirmLogout() {
                      var result = confirm("Are you sure you want to sign out?");
                      if (result) {
                          return true; // Proceed with the sign out process
                      } else {
                          return false; // Cancel the sign out process
                      }
                  }
              </script>';
              
          } else {
              echo '<a href="login.php" class="navbar-btn">Login</a>';
          }
          ?>
        </div>

    </header>
    <main>


        <section id="section" class="section">
            <h2>Schedule Your Appointment</h2>


                        


    <div class="navbar">
        <!-- Navbar content -->
    </div>
            <form method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" autocomplete="off" placeholder="Enter your name" name="name" <br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" autocomplete="off" placeholder="Enter your email" name="email" ><br><br>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" autocomplete="off" placeholder="Enter your phone number" name="phone" ><br><br>
                <label for="nic">NIC:</label>
                <input type="text" id="NIC" autocomplete="off" placeholder="Enter your NIC" name="nic" <br><br>
                <label for="vaccine-type">Choose your vaccine:</label>
                <select id="vaccine-type" name="vac_type">
                    <option>Choose</option>
                    <option value="pfizer">Pfizer-BioNTech</option>
                    <option value="moderna">Moderna</option>
                    <option value="j&j">Johnson & Johnson</option>
                </select><br><br>
                <label for="date">Choose your appointment date:</label>
                <input type="date" id="date" name="app_date"><br><br>
                <button class="r_btn" type="reset"  style="background-color: rgb(243, 9, 9); width: 100%; color: #fff; border: none; padding: 15px 10px; border-radius: 5px; font-size: 15px; cursor: pointer; transition: background-color 0.3s ease-in-out;" onmouseover="this.style.backgroundColor='#8b0000';" onmouseout="this.style.backgroundColor='rgb(250, 9, 9)';" class="r_btn">Reset</button>

                <button name = "submit" type="submit">Submit</button>
                <button id="onclick" onclick="toTop()">Back To Top</button>
                
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Online Vaccination Portal</p>
    </footer>


<script>
function toTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; 
}
</script>

    
</body>
</html>