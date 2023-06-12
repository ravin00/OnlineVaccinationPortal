<!DOCTYPE html>
<html>
<head>
    <title>Online Vaccination Portal</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <style>
        /* Animation styles */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Apply animation to the hero section */
        #hero-section {
            animation: fadeIn 1s ease-in-out;
        }
    </style>
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
                <a href="foreign.php">Foreigner Appointment</a>
                <a href="vacappointment.php">All vaccination details</a>
                <a href="docdetails.php">Doctor availabilities</a>
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
        <section id="hero-section">
      
            <section id="about-section">
                <h2>About Us</h2>
                <p>We are a team of healthcare professionals dedicated to providing easy access to the COVID-19 vaccines.</p>
                <img src="/img/photo-1612277795421-9bc7706a4a34.avif" alt="Team photo">
            </section>


    </main>
    <footer>
        <p>&copy; 2023 Online Vaccination Portal</p>
    </footer>
</body>
</html>