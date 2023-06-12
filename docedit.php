<?php
include 'connect.php';
$doc_app=$_GET['doceditid'];
$sql="select * from `docdetails` where doc_app=$doc_app";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$doc_name=$row['doc_name'];
$vis_center=$row['vis_center'];
$vis_date=$row['vis_date'];
$vis_time=$row['vis_time'];
$vac_avail=$row['vac_avail'];

if(isset($_POST['submit'])){
  $doc_name=$_POST['doc_name'];
  $vis_center=$_POST['vis_center'];
  $vis_date=$_POST['vis_date'];
$vis_time=$_POST['vis_time'];
$vac_avail=$_POST['vac_avail'];


  $sql="update `docdetails` set doc_app=$doc_app,doc_name='$doc_name',
  vis_center='$vis_center',vis_date='$vis_date',vis_time='$vis_time',vac_avail='$vac_avail'
  where doc_app=$doc_app";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Updated successfully";
    header('location:docappointmentDisplay.php');
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
            <h2>Doctors Details</h2>
            <form method="post">
                <label for="doc_name">Doctor name:</label>
                <input type="text" id="doc_name" autocomplete="off" value="<?=$row['doc_name']?>" placeholder="Doctor Name" name="doc_name"><br><br>
                <label for="vis_center">Visiting Center:</label>
                <input type="text" id="vis_center" autocomplete="off" value="<?=$row['vis_center']?>" placeholder="Enter your center" name="vis_center"><br><br>
                <label for="date">Visiting date:</label>
                <input type="date" id="vis_date" name="vis_date"><br><br>
                <label for="time">Choose the visiting time:</label>
                <input type="time" id="vis_time" name="vis_time"
                   min="09:00" max="18:00" required><br><br>
                <label for="vac_type">Dosage of the Vaccine:</label>
                <select id="vac_avail" name="vac_avail">
                    <option>Choose</option>
                    <option value="Available">Available</option>
                    <option value="Unavailable">Unavailable</option>
                </select><br><br>
                <button class="r_btn" type="reset"  style="background-color: rgb(243, 9, 9); width: 100%; color: #fff; border: none; padding: 15px 10px; border-radius: 5px; font-size: 15px; cursor: pointer; transition: background-color 0.3s ease-in-out;" onmouseover="this.style.backgroundColor='#8b0000';" onmouseout="this.style.backgroundColor='rgb(250, 9, 9)';" class="r_btn">Reset</button>

                <button name = "submit" type="submit">Submit</button>
                <button id="onclick" onclick="toTop()">Back To Top</button>
                
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Online Vaccination Portal</p>
    </footer>
    
</body>
</html>