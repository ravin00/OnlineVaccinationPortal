<?php
include 'connect.php';
$app_num3=$_GET['ordereditid'];
$sql="select * from `ordervac` where app_num3=$app_num3";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$phone=$row['phone'];
$date=$row['date'];
$vac_type=$row['vac_type'];
$fac_name=$row['fac_name'];
$address=$row['address'];


if(isset($_POST['submit'])){
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $phone=$_POST['phone'];
$date=$_POST['date'];
$vac_type=$_POST['vac_type'];
$fac_name=$_POST['fac_name'];
$address=$_POST['address'];

  $sql="update `ordervac` set app_num3=$app_num3,first_name='$first_name',
  last_name='$last_name',phone='$phone',date='$date',vac_type='$vac_type',fac_name = '$fac_name'
  where app_num3=$app_num3";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Updated successfully";
    header('location:orderDisplay.php');
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
            <h2>Order your vaccine</h2>
            <form method="post">
                <label for="first_name">First name:</label>
                <input type="text" id="first_name" autocomplete="off" value="<?=$row['first_name']?>" placeholder="Enter your first name" name="first_name" ><br><br>
                <label for="last_name">Last name:</label>
                <input type="text" id="last_name" autocomplete="off" value="<?=$row['last_name']?>" placeholder="Enter your last name" name="last_name" ><br><br>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" autocomplete="off" value="<?=$row['phone']?>" placeholder="Enter your phone number" name="phone"<br><br>
                <label for="date">Choose your date:</label>
                <input type="date" id="date" value="<?=$row['date']?>" name="date"><br><br>
                <label for="vaccine-type">Choose your vaccine:</label>
                <select id="vaccine-type" name="vac_type">
                    <option>Choose</option>
                    <option value="pfizer"<?php
          if($row["vac_type"]=='pfizer'){
            echo "selected";
          }
          ?>>Pfizer-BioNTech</option>
                    <option value="moderna"<?php
          if($row["vac_type"]=='moderna'){
            echo "selected";
          }
          ?>>Moderna</option>
                    <option value="j&j"<?php
          if($row["vac_type"]=='j&j'){
            echo "selected";
          }
          ?>>Johnson & Johnson</option>
                </select><br><br>
                <label for="fac_name">Facility name:</label>
                <input type="text" id="fac_name" autocomplete="off" value="<?=$row['fac_name']?>" placeholder="Enter your facility name" name="fac_name" ><br><br>
                <label for="address">Address:</label>
                <input type="text" id="address" autocomplete="off" value="<?=$row['address']?>" placeholder="Enter your address" name="address" ><br><br>
                <button class="r_btn" type="reset"  style="background-color: rgb(243, 9, 9); width: 100%; color: #fff; border: none; padding: 15px 10px; border-radius: 5px; font-size: 15px; cursor: pointer; transition: background-color 0.3s ease-in-out;" onmouseover="this.style.backgroundColor='#8b0000';" onmouseout="this.style.backgroundColor='rgb(250, 9, 9)';" class="r_btn">Reset</button>

                <button name="submit" type="submit">Update</button>
                <button id="onclick" onclick="toTop()">Back To Top</button>
                
            </form>
            </section>
    </main>
    <footer>
        <p>&copy; 2023 Online Vaccination Portal</p>
    </footer>
    
</body>
</html>