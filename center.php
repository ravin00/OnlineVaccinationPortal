<!DOCTYPE html>
<html>
<head>
    <title>Online Vaccination Portal</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
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
        </main>

        <section id="vac-center">
            <h2>Our vaccination centers</h2>
        </section>

        <section id="vac-para">
            <p>Our Vaccinations Clinic is on par with the procedures of the National Vaccination Programme. Our visitors can be assured of their safety and the safety of their children through immunisation against life-threatening diseases. We have a dedicated team of expert pediatricians and superior vaccine storage facilities that enable us to ensure that your vaccinations are safe and effective.</p>
        </section>

        <style>
            table, th, td {
               border:1px solid rgb(10, 10, 10); 
              /* color: rgb(246, 241, 241); */
            }
            </style>

            <style>
                footer {
            background-color: #fff8f8;
            
            padding: 5px;
             text-align: center;
           } 
            </style>
            <body>
            
            <br><br><h2><style>h2{color: rgb(250, 244, 244)};</style>Main Vacciation Centers</h2>
            
            <table id="normaltable" style="width:100%;">
              <tr>
                <th>Center</th>
                <th>Address</th>
              </tr>
              <tr>
                <td>Lady Ridgeway Hospital </td>
                <td>Dr Danister De Silva Mawatha, Colombo 08</td>
              </tr>
              <tr>
                <td>Colombo National Hospital</td>
                <td>Kynsey Rd, Colombo 10</td>
              </tr>
              <tr>
                <td>Castle Street Hospital</td>
                <td>Castle St, Colombo 08</td>
              </tr>
            </table>
            
            <p><style>p{color: rgb(255, 251, 251)};</style>These vaccination centers are 24/7 open for patients.</p>
            <div style="display: flex; justify-content: center;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.772621922372!2d79.8709575785647!3d6.917765000641779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2599fb6a41705%3A0xfdc0774e4aa93ed4!2sLady%20Ridgeway%20Hospital%20for%20Children%20(LRH)!5e0!3m2!1sen!2slk!4v1686248679184!5m2!1sen!2slk"
  width="400" height="300" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

            </body>

        <section id="table-vac">
            <table>

            </table>
        </section>

        <section id="vac-pic-section">
            <img src="/Pics/Covid-19-map-v2.png">
        </section>
        <footer>
            <p style="color:black;">&copy;2023 Online Vaccination Portal</p>
        </footer> 
        </body>
        </html>
    