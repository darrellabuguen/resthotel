<?php
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./src/images/hotel-logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./src/style.css">
        <link rel="stylesheet" href="./src/responsive.css">
        <title>Rest Hotel</title>
    </head>

    <body>
        <header>
            <nav>
                <div class="logo-container">
                    <img class="logo" src="./src/images/hotel-logo.png" alt="img" onclick="setHome()">
                    <p onclick="setHome()"><b>REST</b> Hotel</p>
                </div>
                <ul class="link-container">
                    <li class="link"><a href="./index.html">Home</a></li>
                    <li class="link"><a href="./rooms.php">Rooms</a></li>
                    <li class="link"><a href="./about.php">About</a></li>
                    <li class="link"><a href="./gallery.php">Gallery</a></li>
                    <li class="link"><a class="backred" href="./contact.php">Contact Us</a></li>
                </ul>
                <div class="mobile-menu-con">
                    <div class="mobile-menu">
                        <ul class="mobile-links">
                            <li class="link"><a href="./index.html">Home</a></li>
                            <li class="link"><a href="./rooms.php">Rooms</a></li>
                            <li class="link"><a href="./about.php">About</a></li>
                            <li class="link"><a href="./gallery.php">Gallery</a></li>
                            <li class="link"><a href="./verify.php">Verify Booking</a></li>
                            <li class="link"><a href="./contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu-con">
                    <div class="menu-frame">
                        <div class="bar one"></div>
                        <div class="bar two">
                            <div class="bar four"></div>
                        </div>
                        <div class="bar three"></div>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="success-container flex">
                <div class="success-msg">
                    <div align="center">
                        <svg class="success-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                        </svg>
                        <div class="gap"></div>
                        <h1>Success</h1>
                    </div>
                    <div class="gap"></div>
                    <h2 align="center">Your booking has been placed!</h2>
                    <h3 align="center">Your booking number is</h3>
                    <h1 align="center"><span class="booking-number"></span></h1>
                    <div class="gap"></div>
                    <div align="center">
                        <a class="book-btn" href="okay.php" style="width: 150px">OK</a>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <!-- Footer content (e.g., copyright information) goes here -->
        </footer>

        <script src="./src/index.js"></script>
        <?php
        echo ("<script>
document.querySelector('.booking-number').textContent = $id;
</script>");
} else {
    exit();
}
?>
</body>

</html>