<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom_css/website.css') }}">
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

    <!--Contact Us Parent-Container-->
    <div class="container-parent-alignment">

        <!--Container for Contact Us-->
        <div class="container-contactsus">

            <!--Left Container Contact Us-->
            <div class="left-container-contactsus">
                <div class="contact-service-text">
                    <div class="contact-about-us">
                        <h4>About Us</h4>
                        <p>If you need assistance with an air conditioning, Ventilation, or maintenance give our company
                            a call or
                            fill out our form to receive service from us.</p>
                    </div>
                    <div class="contact-contacts"></div>
                    <h4>Contact</h4>
                    <p>awes.manila@gmail.com</p>
                    <p> 02-8441-6947</p>
                    <p> 09602142640</p>

                    <div class="contact-address"></div>
                    <h4>Address</h4>
                    <P>3/F DJET Bldg., Imelda
                        Ave. Karangalan Vill.,
                        Manggahan, Pasig City
                    </P>
                </div>
            </div>

            <!--Right Container Contact Us-->
            <div class="right-container-contactsus">
                <div class="form-box">
                    <form method="POST" action="{{ route('store.appointment') }}">
                        @csrf
                        <h2>Book Your Service Appointment</h2>
                        <p>Fill out this quick and we'll reach out right away!</p>

                        <input type="text" name="customerName" id="customerName" placeholder="Enter Name*">
                        <input type="number" name="phoneNumber" id="phoneNumber" placeholder="Enter Phone No.*">
                        <input type="text" name="customerEmail" id="customerEmail" placeholder="Enter Email*">

                        <label for="service" class="service-selection">Select Service</label>
                        <select id="service_type" name="service_type">
                            <option value="" selected>--Select Service--</option>
                            <option value="ventilation">Ventilation</option>
                            <option value="installation">Installation</option>
                            <option value="maintenance/repair">Maintainance/Repair</option>
                            <option value="inquire">Inquire</option>
                        </select>
                        <br><br>
                        <p>Enter your Concerns</p>
                        <textarea id="comment" name="comment" rows="10" cols="40" placeholder="How can we help you?"></textarea>
                        <br>
                        <div class="btn-submit">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
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

</body>

</html>
