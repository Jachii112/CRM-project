<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom_css/website.css') }}">
    <script src="backend/assets/js/jscode/popups-service.js" defer></script>
</head>

<body>
    <!--Main Container For Nav and Menubar-->
    <div class="container">

        <!--Menu Bar-->
        <div class="menu-bar">
            <img class="logo" src="{{ asset('backend/assets/website_assets/image/logoawes.png') }}" alt="AWES" />
            <div class="awes">AWES</div>
        </div>

        <!--Nav Bar-->
        <nav class="navbar">
            <ul class="navbar-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about.us') }}">About Us</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
            </ul>
        </nav>
    </div>

    <!--Service Parent-Container-->
    <div class="services-parent-container">

        <!--Service- Upper Container-->
        <div class="service-upper-container">
            <h2>What We Offer</h2>
            <p>We offer cooling, ventilation, and maintenance services for both residential and commercial properties,
                including upgrades, repairs, replacements, and installations
                No matter what your repair need, you can count on our team for accurate and efficient service.</p>
        </div>
        <!--Service Middle Container-->
        <div class="service-mid-container">

            <!--Service-Ventilation-Container-->
            <div class="ventilation-container">
                <img src="{{ asset('backend/assets/website_assets/image/image-removebg.png') }}" alt="ventilation">
                <h3>Ventilation</h3>
                <p> Leveraging innovative technology and engineering expertise, we design, install, and maintain
                    advanced ventilation systems that ensure a continuous supply of fresh, purified air.</p>
                <button class="readmore"
                    onclick="window.location.href='http://127.0.0.1:3000/website_capstonee/website%20capstonee/service-vent.html'">READ
                    MORE</button>
            </div>

            <!--Service-Installation-Container-->
            <div class="installation-container">
                <img src="{{ asset('backend/assets/website_assets/image/image-removebg-preview_7.png') }}"
                    alt="ventilation">
                <h3>Installation</h3>
                <p>For repair, maintenance, and installation of air conditioners, call our certified technicians. We
                    will keep your unit in peak condition and your home comfortable.
                </p>
                <button class="readmore">READ MORE</button>
            </div>

            <!--Service-Repair-Container-->
            <div class="repair-container">
                <img src="{{ asset('backend/assets/website_assets/image/image-removebg-preview_8.png') }}"
                    alt="ventilation">
                <h3>Maintenance and Repair</h3>
                <p>Our eco-friendly solutions not only enhance air quality but also reduce energy consumption, leading
                    to lowered utility bills and a reduced carbon footprint.</p>
                <button class="readmore" a href="#">READ MORE</a></button>

            </div>
        </div>

        <!--Service Lower-Middle Container -->
        <div class="service-lowermid-container">
            <div class="lowermid-container">
                <h2>Book Us Now</h2>
                <button type="button" id="clkhere">Click Here to Book</button>
            </div>
        </div>



        <!--Service Lower-Container-->
        <div class="service-lower-container">
            <div class="lower-container">
                <img src="{{ asset('backend/assets/website_assets/image/logoo.png') }}" alt="awes-logo">
                <div class="lower-text">
                    <h2>Some of our repair service include:</h2>
                    <p>Once we've diagnosed the problem, we'll provide you with honest, upfront pricing in writing
                        before we begin any work. We charge based on the job itself, not by the hour, meaning the price
                        you are quoted is the price you pay.
                        We even back each job with
                        our 100% satisfaction guarantee!
                    </p>

                </div>
            </div>
        </div>

        <!--POPCONTAINER-->
        <div class="popup" tabindex="0">
            <div class="popup-content">
                <img src="{{ asset('backend/assets/website_assets/image/cancel_FILL0_wght400_GRAD0_opsz24.png') }}"
                    alt="Close" class="close" id="service-closeButton">
                <h1>Book Your Service Appointment</h1>
                <p>Fill out this form, and we'll reach out right away!</p>
                <input type="text" name="name" placeholder="Enter Name*">
                <input type="tel" name="phone" placeholder="Enter Phone No*">
                <input type="email" name="email" placeholder="Enter Email*">

                <label for="service" class="service-selection">Select Service</label>
                <select id="service" name="service">
                    <option value="ventilation">--Select Service--</option>
                    <option value="ventilation">Ventilation</option>
                    <option value="installation">Installation</option>
                    <option value="maintenance">Maintenance/Repair</option>
                </select>
                <textarea id="comment" name="comment" rows="9" cols="50" placeholder="How can we help you?"></textarea>

                <div class="btn-submit">
                    <button id ="bbtnsubmit" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Container-->
    <div class="footer-container">
        <div class="footer-text">
            <div class="container-contacts">
                <h2>Contact Us</h2>
                <p>awes.manila@gmail.com</p>
                <p>(02) 8441-6947</p>
                <p>09602142640</p>
            </div>

            <div class="container-links">
                <h2>Quick Links</h2>
                <a href="#">Home</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">Services</a>
                <a href="#">Gallery</a>
            </div>
            <div class="container-otherlinks">
                <h2>Other Links</h2>
                <a href="#">Our Story</a>
                <a href="#"> News & Articles</a>
                <a href="#">Schedule an Appointment</a>
            </div>

            <div class="container-address">
                <h2>Address</h2>
                <h3>AWES ENGINEERING</h3>
                <p>
                    3/F DJET Bldg, Imelda Ave. Karangalan Village, Manggahnan, Pasig
                    City,
                </p>
            </div>
        </div>
    </div>
</body>

</html>
