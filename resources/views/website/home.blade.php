<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AWES Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom_css/website.css') }}">
    <script src="backend/assets/js/jscode/popups-home.js" defer></script>
    <script src="backend/assets/js/jscode/slider.js" defer></script>
</head>

<body>

    <!--MAIN CONTAINER-->
    <div class="container">
        <!--MENU BAR CONTAINER-->
        <div class="menu-bar">
            <img class="logo" src="{{ asset('backend/assets/website_assets/image/logoawes.png') }}" alt="AWES" />
            <div class="awes">AWES</div>

        </div>

        <!--NAV BAR CONTAINER-->
        <nav class="navbar">
            <ul class="navbar-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about.us') }}">About Us</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
            </ul>
        </nav>

        <!--SLIDER CONTAINER-->
        <div id="slider">
            <input type="radio" name="slider1" id="slide1" checked>
            <input type="radio" name="slider2" id="slide2">
            <input type="radio" name="slider3" id="slide3">
            <input type="radio" name="slider4" id="slide4">
            <div id="slides">
                <div id="overflow">
                    <div class="inner">
                        <div class="slide slide_1">
                            <div class="slide-content">
                                <img class="ser-img" alt="service-intro"
                                    src="{{ asset('backend/assets/website_assets/image/slider1.jpg') }}">
                            </div>
                        </div>
                        <div class="slide slide_2">
                            <div class="slide-content">
                                <img class="ser-img" alt="service-intro"
                                    src="{{ asset('backend/assets/website_assets/ImagesAssets/2.jpg') }}">
                            </div>
                        </div>
                        <div class="slide slide_3">
                            <div class="slide-content">
                                <img class="ser-img" alt="service-intro"
                                    src="{{ asset('backend/assets/website_assets/ImagesAssets/3.png') }}">
                            </div>
                        </div>
                        <div class="slide slide_4">
                            <div class="slide-content">
                                <img class="ser-img" alt="service-intro"
                                    src="{{ asset('backend/assets/website_assets/ImagesAssets/13.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="controls">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
            </div>
            <div id="bullets">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
            </div>
        </div>

        <!--OUR SERVICE CONTAINER-->
        <div class="services">
            <h1 id="ourServices">
                Our Services
            </h1>
        </div>

        <!--Card-Container-->
        <div class="service-mid-container">

            <!--Service-Ventilation-Container-->
            <div class="ventilation-container">
                <img src="{{ asset('backend/assets/website_assets/image/image-removebg.png') }}" alt="ventilation">
                <h3>Ventilation</h3>
                <p> Leveraging innovative technology and engineering expertise, we design, install, and maintain
                    advanced ventilation systems that ensure a continuous supply of fresh, purified air.</p>
                <button type="button" id="btn-request-a" class="readmore">Book Now!</button>
            </div>

            <!--Service-Installation-Container-->
            <div class="installation-container">
                <img src="{{ asset('backend/assets/website_assets/image/image-removebg-preview_7.png') }}"
                    alt="ventilation">
                <h3>Installation</h3>
                <p>For repair, maintenance, and installation of air conditioners, call our certified technicians. We
                    will keep your unit in peak condition and your home comfortable.
                </p>
                <button type="button" id="btn-request-b" class="readmore">Book Now!</button>
            </div>

            <!--Service-Repair-Container-->
            <div class="repair-container">
                <img src="{{ asset('backend/assets/website_assets/image/image-removebg-preview_8.png') }}"
                    alt="ventilation">
                <h3>Maintenance and Repair</h3>
                <p>Our eco-friendly solutions not only enhance air quality but also reduce energy consumption, leading
                    to lowered utility bills and a reduced carbon footprint.</p>
                <button type="button" id="btn-request-c" class="readmore">Book Now!</button>
            </div>
        </div>


        <!--Container-Request-->
        <div class="container-request">
            <h1>
                Need air conditioning installment? <i>Reach us now!</i>
            </h1>

            <a href="#" class="button" id="btn-request">REQUEST SERVICE</a>

        </div>

        <!--Container-Description Appointment-->
        <div class="container-appointment">
            <div class="logo">
                <img src="{{ asset('backend/assets/website_assets/image/logoo.png') }}" alt="awes-logo">
            </div>
            <div class="appointment-text">
                <h2>
                    Your place comfort experts
                </h2>
                <h1>
                    Quality Cooling installment Services
                </h1>
                <br>
                <p>
                    We ensure service quality and maintenance that can give customer the satisfaction and make sure that
                    all the installed unit are working properly because here in AWES. We service Manila and surrounding
                    cities by providing excellent technical service and customer
                    satisfaction at each job we arrive at. Educating the customer is key in our business so that you the
                    homeowner
                    knows what is going on with your home and have the best options for you moving forward.
                </p>
            </div>
        </div>

        <!--Choose-Container-Description-->
        <div class="container-choose">
            <div class="choose-text">
                <h1>Why Choose AWES Manila</h1>
                <br>
                <p>From air conditioning repairs to complete system replacements, AWES is your neighborhood's trusted
                    AWES company. With 18 years of combined experience,
                    we've proudly served families across the Metro Manila area. You're guaranteed our best service
                    because we hold our team to higher standards, including
                    industry-leading warranties and ongoing training for every one of our technicians.
                </p>
            </div>
            <div class="choose-picture">
                <img src="{{ asset('backend/assets/website_assets/image/choose.jpg') }}" alt="">
            </div>
        </div>
        <br>

        <!--POPCONTAINER-->
        <div class="popup" tabindex="0">
            <div class="popup-content">
                <img src="{{ asset('backend/assets/website_assets/image/cancel_FILL0_wght400_GRAD0_opsz24.png') }}"
                    alt="Close" class="close" id="closeButton">
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
                    <button id ="abtnsubmit" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>


    <!--FOOTER CONTAINER-->
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
                <a href="./home.html">Home</a>
                <a href="./about-us.html">About Us</a>
                <a href="./contact-us.html">Contact Us</a>
                <a href="./services.html">Services</a>
                <a href="#">Gallery</a>

            </div>

            <div class="container-address">
                <h2>Address</h2>
                <h3>AWES ENGINEERING</h3>
                <p>3/F DJET Bldg, Imelda Ave.
                    Karangalan Village, Manggahnan,
                    Pasig City,
                </p>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
