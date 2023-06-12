<?php
include 'connect.php';
$app_num1=$_GET['vaceditid'];
$sql="select * from `vactype` where app_num1=$app_num1";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name_vac=$row['name_vac'];
$type_vac=$row['type_vac'];
$dos_vac=$row['dos_vac'];
$name_comp=$row['name_comp'];

if(isset($_POST['submit'])){
  $name_vac=$_POST['name_vac'];
  $type_vac=$_POST['type_vac'];
  $dos_vac=$_POST['dos_vac'];
  $name_comp=$_POST['name_comp'];

  $sql="update `vactype` set name_vac='$name_vac',
  type_vac='$type_vac',dos_vac='$dos_vac',name_comp='$name_comp'
  where app_num1=$app_num1";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Updated successfully";
    header('location:vacappointmentDisplay.php');
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
            <h2>Check the vaccination type</h2>
            <form method="post">
            <select id="vaccine-type" name="name_vac">
                    <option>Choose vaccine</option>
                    <option value="pfizer"<?php
          if($row["name_vac"]=='pfizer'){
            echo "selected";
          }
          ?>>Pfizer-BioNTech</option>
                    <option value="moderna"<?php
          if($row["name_vac"]=='moderna'){
            echo "selected";
          }
          ?>>Moderna</option>
                    <option value="j&j"<?php
          if($row["name_vac"]=='j&j'){
            echo "selected";
          }
          ?>>Johnson & Johnson</option>
                </select><br><br>

                <select id="choose-vaccine-type" name="type_vac">
                    <option>Choose vaccine type</option>
                    <option value="covid vaccine"<?php
          if($row["type_vac"]=='covid vaccine'){
            echo "selected";
          }
          ?>>Covid vaccine</option>
                    <option value="viral vector vaccine"<?php
          if($row["type_vac"]=='viral vector vaccine'){
            echo "selected";
          }
          ?>>Viral vector vaccine</option>
                    <option value="Live attenuated vaccine"<?php
          if($row["type_vac"]=='Live attenuated vaccine'){
            echo "selected";
          }
          ?>>Live attenuated vaccine</option>
                    <option value="RNA vaccine"<?php
          if($row["type_vac"]=='RNA vaccine'){
            echo "selected";
          }
          ?>>RNA vaccine</option>
                </select><br><br>

                <select id="dosage-of-vaccine" name="dos_vac">
                    <option>Choose vaccine dosage</option>
                    <option value="10 mcg"<?php
          if($row["dos_vac"]=='10 mcg'){
            echo "selected";
          }
          ?>>10 mcg</option>
                    <option value="20 mcg"<?php
          if($row["dos_vac"]=='20 mcg'){
            echo "selected";
          }
          ?>>20 mcg</option>
                    <option value="30 mcg"<?php
          if($row["dos_vac"]=='30 mcg'){
            echo "selected";
          }
          ?>>30 mcg</option>
                    <option value="40 mcg"<?php
          if($row["dos_vac"]=='40 mcg'){
            echo "selected";
          }
          ?>>40 mcg</option>
                    <option value="50 mcg"
                    <?php
          if($row["dos_vac"]=='50 mcg'){
            echo "selected";
          }
          ?>>50 mcg</option>
                </select><br><br>


                <label for="name_comp"></label>
                <input type="text" id="name_comp" autocomplete="off" value="<?=$row['name_comp']?>" placeholder="Name of the company" name="name_comp"><br><br>
                <!-- <label for="nic">NIC:</label>
                <input type="text" id="NIC" autocomplete="off" placeholder="Enter your NIC" name="nic"><br><br>
                <label for="vaccine-type">Choose your vaccine:</label>
                <label for="date">Choose your appointment date:</label>
                <input type="date" id="date" name="app_date"><br><br> -->
                <button class="r_btn" type="reset"  style="background-color: rgb(243, 9, 9); width: 100%; color: #fff; border: none; padding: 15px 10px; border-radius: 5px; font-size: 15px; cursor: pointer; transition: background-color 0.3s ease-in-out;" onmouseover="this.style.backgroundColor='#8b0000';" onmouseout="this.style.backgroundColor='rgb(250, 9, 9)';" class="r_btn">Reset</button>

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