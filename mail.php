<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$mailheader = "From:" .$nfame."<".$lname.">\r\n";

$recipient = "jep.padua@gmail.com";
mail($recipient, $fname, $lname, $mailheader)
or die("Error!");

echo"<html>
<head>
    <title>J & M - RSVP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="J&M.png" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

    <!-- Page Wrapper -->
        <div id="page-wrapper">
            
            <!-- Wrapper -->
                <div id="wrapper">
                    
                    <!-- Panel (Banner) -->
                        <section class="panel banner right">
                            <div class="content color0 span-3-75">
                                <h1 class="major">JEFFERSON & MICHAELA</h1>
                                <p>We are getting <strong><italic>MARRIED</italic></strong> on May 09, 2024, 1:00 PM at St. Benedict Parish Silang Cavite
                                Reception follows at 5:00 PM at <strong>CANA at Silang</strong>, Silang, Cavite</p>
                                <ul class="actions">
                                    <li><a href="#first" class="button primary color1 circle icon solid fa-angle-right">Next</a></li>
                                </ul>
                            </div>
                            <div class="image filtered span-1-75" data-position="25% 25%">
                                <img src="images/pic01.jpg" alt="" />
                            </div>
                        </section>
                            
                    <!-- RSVP -->					
                        <section class="panel color4-alt" id="first">								
                            <video autoplay loop muted controls width="100%" src="Jefferson and Michaela STD.mp4" type="video/mp4"></video>	
                            <div class="intro color4">									
                                <h2 class="major">RSVP</h2>
                                <p>Please enter your Last Name</p><br>
                                <form action="mail.php" method="POST">
                                    <div class="fields">
                                            <label for="fname">First Name</label>
                                            <input type="text" required placeholder="Last Name" name="Last Name" id="fname"/>
                                            <label for="lname">Last Name</label>
                                            <input type="text" required placeholder="Last Name" name="Last Name" id="lname"/>																										
                                    </div>
                                    <ul class="actions">
                                        <li><input type="submit" value="Search Me" class="button primary" /></li>
                                        <li><input type="reset" value="Reset" /></li>
                                    </ul>
                                </form>
                            </div>															
                        </section>		

                    <!-- Dress Code -->
                    <section class="panel">
                        <div class="intro color2">
                            <h2 class="major">Dress Code</h2>
                            <h3>Principal Sponsors</h3>
                            <p><strong>Female Sponsors:</strong><br>
                            Please wear Champagne Gold Long Gown<br>
                            <strong>Male Sponsors:</strong><br>
                            Please wear Black Suit, Gold Neck Tie<br><br>
                            <strong>Guests:</strong><br>
                            Please wear Black Suit, Gold Neck Tie
                            </p>
                        </div>
                        <div class="gallery">
                        <a href="images/gallery/fulls/04.jpg" class="image filtered span-2-5" data-position="top"><img src="images/gallery/thumbs/04.jpg" alt="" /></a>
                            <div class="group span-3">
                                
                                <a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/02.jpg" alt="" /></a>
                                <a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/03.jpg" alt="" /></a>
                                <a href="images/gallery/fulls/01.jpg" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/01.jpg" alt="" /></a>
                            </div>
                        <a href="images/gallery/fulls/09.jpg" class="image filtered span-2-5" data-position="right"><img src="images/gallery/thumbs/09.jpg" alt="" /></a>
                            
                            
                        </div>
                    </section>		

                    <!-- Location -->
                    <section class="panel color1">
                        <div class="intro joined">
                            <h2 class="major">LOCATION</h2>
                            <p><h3>CEREMONY: </h3>
                            <strong>St. Benedict Parish Silang Cavite</strong>
                            Ayala Westgrove Heights, South Blvd, Silang, 4118 Cavite<br><br>
                            <h3>RECEPTION: </h3>
                            <strong>CANA at Silang</strong>
                            Silang, Cavite
                            </p>
                        </div>
                        <div class="inner">
                            <h4>Ceremony:</h4>
                                    <ul class="actions">
                                        <li><a target="_blank" href="https://www.waze.com/live-map/directions/ph/calabarzon/silang/st.-benedict-parish?navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location&to=place.ChIJC153kgV9vTMRPrEMccUl_ss" class="button primary color2">Waze</a></li>
                                        <li><a target="_blank" href="https://www.google.com/maps/dir//62QR%2BR8Q+St.+Benedict+Parish,+South+Blvd,+Silang,+4118+Cavite/@14.2396094,121.038326,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x33bd7d0592775e0b:0xcbfe25c5710cb13e!2m2!1d121.0409009!2d14.2396042?entry=ttu" class="button">Google Maps</a></li>
                                    </ul>
                                <br><br>
                                <h4>Reception:</h4>
                                <ul class="actions">
                                        <li><a target="_blank" href="https://www.waze.com/live-map/directions/ph/calabarzon/silang/cana-at-silang?to=place.ChIJF1jpG7h7vTMRHVLtVBSc6x0" class="button primary color2">Waze</a></li>
                                        <li><a target="_blank" href="https://www.google.com/maps/dir//Cana+at+Silang,+Silang,+Cavite/@14.18472,120.9917971,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x33bd7bb81be95817:0x1deb9c1454ed521d!2m2!1d120.994372!2d14.1847148?entry=ttu" class="button">Google Maps</a></li>
                                </ul>
                        </div>
                    </section>
                    <!-- Gcash -->					
                    <section class="panel color3-alt">	
                        <div class="intro color3">									
                            <h2 class="major">Gifts</h2>
                                <p>Gcash eme eme eme
                                <br><h3>Gcash:</h3>
                                Jefferson M. Padua<br>
                                0917-870-3002
                                </p>
                        </div>															
                    </section>		
                    
                    <!-- Copyright -->
                        <div class="copyright">&copy; For any inquiries, please contact <b>Jefferson Padua</b> at 0917-870-3002.</div>

                </div>

        </div>

    <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/main.js"></script>			
</body>
</html>";

?>