<?php
include 'connect.php';
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
    <h2>All foreign apointments</h2>
<div class="tbl">
<table class="tbl2">
  <tr>
    <th>Appointment number</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Country</th>
    <th>Prefer vaccination type</th>
    <th>Operation</th>
    
  </tr>

  <?php
   
   $sql="Select * from `foreignregi`";
$result=mysqli_query($con,$sql);
if($result){   
    while($row=mysqli_fetch_assoc($result)){
      $pre_app_num=$row['pre_app_num'];
        // $app_num=$row['app_num'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $email=$row['email'];
        $phone_num=$row['phone_num'];
        $country=$row['country'];
        $pre_vac_typ=$row['pre_vac_typ'];
        ?>
    <tr>
        <td> <?php echo $row['pre_app_num']; ?> </td>
        <td> <?php echo $row['first_name']; ?> </td>
        <td> <?php echo $row['last_name']; ?> </td>
        <td> <?php echo $row['email']; ?> </td>
        <td> <?php echo $row['phone_num']; ?> </td>
        <td> <?php echo $row['country']; ?> </td>
        <td> <?php echo $row['pre_vac_typ']; ?> </td> 
        <td> <?php
         
         
          echo '<a href="fedit.php?
         feditid='.$pre_app_num.'"><button  style="color:white; background-color:green; width:90px; height:50px; border-radius:8px; cursor: pointer;border: none;font-size: 100%; margin-left:10px;  ">Edit</button></a>';
         echo '<a href="fremove.php?
         removeid='.$pre_app_num.'"><button  style="color:white; background-color:red; width:90px; height:50px; border-radius:8px; cursor: pointer;border: none;font-size: 100%; margin-left:10px;  ">Remove</button></a>';
          
          
      ?> </td>
    </tr>
        
      <?php
    }
    
}

   ?>







  <!-- <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Germany</td>
    <td>Germany</td>
    <td>Germany</td>
    <td>Germany</td>
  </tr> -->
  
</table>
</div>


<footer>
        <p>&copy; 2023 Online Vaccination Portal</p>
    </footer>

</body>
</html>
