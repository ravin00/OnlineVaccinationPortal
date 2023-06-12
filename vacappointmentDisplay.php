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
    <h2>All vaccination details</h2>
<div class="tbl">
<table class="tbl2">
  <tr>
    <th>Appointment number</th>
    <th>Name of vaccination</th>
    <th>Type of the vaccination</th>
    <th>Dosage of vaccination</th>
    <th>Name of the company</th>
    <th>Operation</th>
  </tr>

  <?php
   
   $sql="Select * from `vactype`";
$result=mysqli_query($con,$sql);
if($result){   
    while($row=mysqli_fetch_assoc($result)){
        $app_num1=$row['app_num1'];
        // $app_num=$row['app_num'];
        $name_vac=$row['name_vac'];
        $type_vac=$row['type_vac'];
        $dos_vac=$row['dos_vac'];
        $name_comp=$row['name_comp'];
        ?>
    <tr>
    <td> <?php echo $row['app_num1']; ?> </td>
        <td> <?php echo $row['name_vac']; ?> </td>
        <td> <?php echo $row['type_vac']; ?> </td>
        <td> <?php echo $row['dos_vac']; ?> </td>
        <td> <?php echo $row['name_comp']; ?> </td>
        <td> <?php
         
         
          echo '<a href="vacedit.php?
         vaceditid='.$app_num1.'"><button  style="color:white; background-color:green; width:90px; height:50px; border-radius:8px; cursor: pointer;border: none;font-size: 100%; margin-left:10px;  ">Edit</button></a>';
         echo '<a href="vacremove.php?
         vacremoveid='.$app_num1.'"><button  style="color:white; background-color:red; width:90px; height:50px; border-radius:8px; cursor: pointer;border: none;font-size: 100%; margin-left:10px;  ">Remove</button></a>';
          

                 
          
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