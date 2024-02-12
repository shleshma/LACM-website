<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata for character set and viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title of the page -->
    <title>Contact Page</title>

    <!-- Link to external stylesheets -->
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100">
</head>
<body>
    <!-- Header section -->
    <header class="header">
        <div class="top">
            <!-- Logo with a link to the home page -->
            <a href="home.html">
                <img class="logo" src="image1.png" alt="Logo">
            </a>
            
            <!-- Navigation bar -->
            <nav class="navbar">
                <a href="home.html">Home</a>
                <a href="about.html">About Us</a>
                <a href="programs.html">Programs</a>
                <a href="contact.php">Contact Us</a>
            </nav>
        </div>
    </header>

    <!-- Contact section with contact information, form, and social media links -->
    <div class="contact-section">
        <!-- Contact information -->
        <div class="contact-info">
            <h2>Contact Information</h2>
            <!-- Phone information -->
            <div class="info-item">
                <div class="ellipse-container">
                    <img src="phone.png" alt="Phone Icon" class="icon">
                </div>
                5912723, 9851365447
            </div>
            <!-- Email information -->
            <div class="info-item">
                <div class="ellipse-container">
                    <img src="mail.png" alt="Email Icon" class="icon">
                </div>
                info@lacm.edu.np
            </div>
            <!-- Location information -->
            <div class="info-item">
                <div class="ellipse-container">
                    <img src="map.png" alt="Location Icon" class="icon">
                </div>
                Hattiban, Lalitpur, P.O.Box 8322, Kathmandu, Nepal
            </div>
        </div>

        <!-- Contact form -->
        <div class="contact-container">
            <form class="contact-form" action="http://localhost/WebTech%20Project/connect.php" method="post">
                <!-- Form heading -->
                <h2>Send us a message</h2>
                <!-- Name input field -->
                <p>Your Name</p>
                <input type="text" placeholder="Your Name" name="name" required>
                <!-- Email input field -->
                <p>Email</p>
                <input type="text" placeholder="Email" name="email" required>
                <!-- Message textarea -->
                <p>Your Message</p>
                <textarea placeholder="Type your message here..." name="message" required></textarea>
                <!-- Form action buttons -->
                <div class="buttons">
                   <button type="reset" name="reset" value="Reset">Reset
                    <button type="submit" name="submit" value="Submit">Submit
                </div>
            </div>
            </form>
        </div>

        <!-- Social media links -->
        <div class="connect">
            <p>Connect with us at:</p>
            <!-- Instagram link -->
            <a href="https://www.instagram.com/lacmstudentcouncil/">
                <img src="instagram.png" alt="Instagram Icon" width="25" height="25">
            </a>
            <!-- Facebook link -->
            <a href="https://www.facebook.com/LACMKU/">
                <img src="facebook.png" alt="Facebook Icon" width="25" height="25">
            </a>
            <!-- LinkedIn link -->
            <a href="https://www.linkedin.com/company/little-angels%E2%80%99-college-of-management">
                <img src="linkedin.png" alt="LinkedIn Icon" width="70" height="20">
            </a>
        </div>
    </div>

     <!-- Copyright footer -->
    <footer class="copyright">© Copyright Little Angels’ College of Management.
    </footer>
</body>
</html>
