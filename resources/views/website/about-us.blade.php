<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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

    <!--About Us Parent-Container-->
    <div class="aboutus-container">

        <!--About Us Container-->
        <div class="aboutus-aboutawes">
            <h2>About AWES Manila</h2>
            <p>
                AWES Manila is a well-established air conditioning company with a
                remarkable track record of 19 years in the industry. With nearly two
                decades of experience, AWES Manila has built a strong reputation for
                excellence in providing air conditioning solutions and services.
            </p>
            <br>
            <p>
                The company is dedicated to enhncing the comfort and quality of
                indoor environments through the design, installation, maintenance, and
                repair of air conditioning systems. AWES Manila takes pride in its
                commitment to delivering top-notch HVAC (Heating, Ventilation, and Air
                Conditioning) solutions that cater to both residential and commercial
                clients.
            </p>
        </div>

        <!--Choose Us Container-->
        <div class="aboutus-chooseus">
            <h2>Why Choose Us</h2>
            <p>
                Our journey began nearly two decades ago, and since then, we have
                grown into a trusted leader in air conditioning solutions. With each
                passing year, our experience has deepened, our knowledge has expanded,
                and our commitment to excellence has only strengthened. AWES Manila's
                19-year legacy is a testament to our enduring passion for providing
                superior air conditioning services.
            </p>
            <br>
            <p>
                Quality is the cornerstone of everything we do. Our commitment to
                providing top-grade equipment and materials ensures that your air
                conditioning systems not only operate efficiently but also stand the
                test of time. When you choose AWES Manila, you choose quality that
                endures, offering you peace of mind and long-term savings.
            </p>
            <br>
            <p>
                Reliability is the cornerstone of our service. Count on AWES Manila
                for prompt and reliable service, whether it's an urgent repair or
                routine maintenance. We provide transparent pricing and quotations,
                ensuring that you know exactly what to expect, with no hidden costs or
                surprises.
            </p>
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
