<!DOCTYPE html>
<html>
<head>
    <title>Online Vaccination Portal</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Apply animation to the news section */
        #news-section {
            animation: fadeIn 2s; /* Increased duration to 2 seconds */
        }

        /* Apply animation to the vaccine section */
        #vaccine-section {
            animation: fadeIn 2s; /* Increased duration to 2 seconds */
            animation-delay: 0.5s;
        }

        /* Apply animation to the vaccine breakthrough section */
        #vaccine-breakthrough {
            animation: fadeIn 2s; /* Increased duration to 2 seconds */
            animation-delay: 1s;
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
        <section id="news-section">
            <h2>COVID-19 Vaccines</h2>
            <p>Everyone, everywhere, should have access to COVID-19 vaccines.

                WHO is determined to maintain the momentum for increasing access to COVID-19 vaccines and will continue to support countries in accelerating vaccine delivery, to save lives and prevent people from becoming seriously ill.
                
                Countries should continue to work towards vaccinating at least 70% of their populations, prioritizing the vaccination of 100% of health workers and 100% of the most vulnerable groups, including people who are over 60 years of age and those who are immunocompromised or have underlying health conditions. </p><br><br>
        </section>

        <section id="vaccine-section">
               <h2>Vaccine History</h2>
                <p>Vaccines have been found to be the most successful and cost effective public health measures that prevent disease and save lives. This is particularly true among children all over the world. Over the last half of the 20th century, diseases that were once all too common became rare in the developed world, due primarily to widespread immunization. Hundreds of millions of lives have been saved and billions of dollars in public health expenditures have been saved with widespread vaccinations.</p><br><br>
                </section>

                <section id="vaccine-breakthrough">
                    <h2>what is a vaccine breakthrough</h2>
                    <p>o date, the global coronavirus disease 2019 (COVID-19) vaccination campaigns have allowed for more than 3 billion doses of the various approved vaccinations to be administered around the world. This figure equates to 40 doses for every 100 people, thus demonstrating the speed at which vaccines are being administered.

                        Despite these efforts, scientists caution that although vaccinations are essential to combat the current pandemic, they will not provide an instant solution. Some of the challenges that remain include vaccine breakthrough cases that are linked with emerging variants, as well as the limitations associated with the level of immunity provided by current vaccines.</p>
                </section>
        <footer>
            <p>&copy; 2023 Online Vaccination Portal</p>
        </footer> 
        </body>