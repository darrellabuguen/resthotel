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
    <title>Rest Hotel | Gallery</title>

    <style>
        .grid-item {
            background-color: gainsboro;
            padding: 2px;
            text-align: center;
            width: 100%;
            cursor: pointer;
        }
    </style>
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
                <li class="link"><a href="./verify.php">Verify Booking</a></li>
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
        <section class="gtk-h1">
            <div class="h1-con gtk">
                <p>ROOM HIGHLIGHTS</p>
            </div>
            <div class="h1-con">
                <h1 class="kmabt">
                    Gallery
                </h1>
            </div>
        </section>
        <div class="gap"></div>
        <div class="pop-container">
            <div class="pop-frame">
                <span class="exit-con">&times;</span>
                <div class="pop-con gallery">
                    <svg class="icon left" onclick="lpic()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg>
                    <img class="pop-img" src="" alt="img">
                    <svg class="icon right" onclick="rpic()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="grid-container">
        </div>
        <span class="back-top" onclick="window.scrollTo(0, 0)">
            &uarr;
        </span>
    </main>

    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
    <!-- Footer starts here -->
    <footer>
        <div align="center">
            <h1>BOOK NOW!</h1>
            <p>
                ©2023 REST HOTEL BAGUIO.
                ALL RIGHTS RESERVED.
            </p>
        </div>
    </footer>

    <script src="./src/index.js"></script>
    <script>

        var gstate = 0;
        var pics = [
            "./src/images/rooms/room1/room1-pic.jpg",
            "./src/images/rooms/room1/room1-pic2.jpg",
            "./src/images/rooms/room1/room1-pic3.jpg",
            "./src/images/rooms/room2/room2-pic.jpg",
            "./src/images/rooms/room2/room2-pic2.jpg",
            "./src/images/rooms/room2/room2-pic3.jpg",
            "./src/images/rooms/double-bed/double-bed3.jpg",
            "./src/images/rooms/double-bed/double-bed2.jpg",
            "./src/images/rooms/double-bed/double-bed.jpg",
            "./src/images/rooms/super-king-bed/super-king-bed.jpg",
            "./src/images/rooms/super-king-bed/super-king-bed2.jpg",
            "./src/images/rooms/super-king-bed/super-king-bed3.jpg",
            "./src/images/rooms/deluxe-twin/deluxetwin-3.jpg",
            "./src/images/rooms/deluxe-twin/deluxetwin-1.jpg",
            "./src/images/rooms/deluxe-twin/deluxetwin-2.jpg"
        ];
        var len = pics.length;
        var pop_img = document.querySelector(".pop-img");
        var ext = document.querySelector(".exit-con");
        var icn_left = document.querySelector(".icon.left");
        var icn_right = document.querySelector(".icon.right");
        var con = document.querySelector(".grid-container");

        function loadImg() {
            for (let i = 0; i < len; i++) {
                var src = pics[i];
                var img = document.createElement("img");
                img.src = src;
                img.classList.add("grid-item");
                con.append(img);
            }
            document.querySelectorAll(".grid-item").forEach(pict => {
                pict.onclick = () => {
                    var pop_src = pict.getAttribute("src");
                    gstate = pics.indexOf(pop_src);
                    pop_con.style.display = "flex";
                    pop_img.src = pics[gstate];
                    checkLState();
                    checkRState();
                }
            });
            ext.onclick = () => {
                pop_con.style.display = "none";
            }
        }

        function rpic() {
            gstate++;
            pop_img.src = pics[gstate];
            checkLState();
            checkRState();
        }

        function lpic() {
            gstate--;
            pop_img.src = pics[gstate];
            checkLState();
            checkRState();
        }

        function checkLState() {
            if (gstate == 0) {
                icn_left.style.pointerEvents = 'none';
                icn_left.style.opacity = '30%';
            }
            else {
                icn_left.style.pointerEvents = 'all';
                icn_left.style.opacity = '100%';
            }
        }

        function checkRState() {
            if (gstate == len - 1) {
                icn_right.style.pointerEvents = 'none';
                icn_right.style.opacity = '30%';
            }
            else {
                icn_right.style.pointerEvents = 'all';
                icn_right.style.opacity = '100%';
            }
        }

        setTimeout(loadImg, 500);
    </script>
</body>

</html>