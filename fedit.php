<?php
include 'connect.php';
$pre_app_num=$_GET['feditid'];
$sql="select * from `foreignregi` where pre_app_num=$pre_app_num";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$email=$row['email'];
$phone_num=$row['phone_num'];
$country=$row['country'];
$pre_vac_typ=$row['pre_vac_typ'];

if(isset($_POST['submit'])){
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
$phone_num=$_POST['phone_num'];
$country=$_POST['country'];
$pre_vac_typ=$_POST['pre_vac_typ'];

  $sql="update `foreignregi` set pre_app_num=$pre_app_num,first_name='$first_name',
  last_name='$last_name',email='$email',phone_num='$phone_num',country='$country',pre_vac_typ = '$pre_vac_typ'
  where pre_app_num=$pre_app_num";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Updated successfully";
    header('location:fappointmentDisplay.php');
  }
  else{
    die(mysqli_error($con));
  }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Vaccination Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Online Vaccination Portal</h1>
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
        session_start();
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
            <h2>Foreign person Appointment</h2>
            <form method="post">
               
            <label for="first_name">First name:</label>
                <input type="text" id="first_name" autocomplete="off" value="<?=$row['first_name']?>" placeholder="Enter your first name" name="first_name"><br><br>
                <label for="last_name">Last name:</label>
                <input type="text" id="last_name" autocomplete="off" value="<?=$row['last_name']?>" placeholder="Enter your last name" name="last_name"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" autocomplete="off" value="<?=$row['email']?>" placeholder="Enter your email" name="email"><br><br>
                <label for="phone_num">Phone number:</label>
                <input type="text" id="phone_num" autocomplete="off" value="<?=$row['phone_num']?>" placeholder="Enter your phone number" name="phone_num"><br><br>
                <label for="country">Choose your Country:</label>
                <select id="country" name="country">
                    <option>Choose</option>
                    <option value="USA" <?php
          if($row["country"]=='USA'){
            echo "selected";
          }
          ?>>USA</option>
                    <option value="UK"<?php
          if($row["country"]=='UK'){
            echo "selected";
          }
          ?>>UK</option>
                    <option value="Austraila" <?php
          if($row["country"]=='AUstraila'){
            echo "selected";
          }
          ?> >Austraila</option>
                </select><br><br>
                <label for="pre_vac_typ">Prefer vaccine type:</label>
                <select id="pre_vac_typ" name="pre_vac_typ">
                    <option>Choose</option>
                    <option value="pfizer" <?php
          if($row["pre_vac_typ"]=='pfizer'){
            echo "selected";
          }
          ?> >Pfizer-BioNTech</option>
                    <option value="moderna" <?php
          if($row["pre_vac_typ"]=='moderna'){
            echo "selected";
          }
          ?> >Moderna</option>
                    <option value="j&j" <?php
          if($row["pre_vac_typ"]=='j&j'){
            echo "selected";
          }
          ?> >Johnson & Johnson</option>
                </select><br><br>

                <button name = "submit" type="submit">Update</button>
                <button id="onclick" onclick="toTop()">Back To Top</button>
                
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Online Vaccination Portal</p>
    </footer>
    <!-- <script src="appointment.js"></script> -->
</body>
</html>