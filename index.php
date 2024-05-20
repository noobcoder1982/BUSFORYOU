<?php include_once ("connect.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <style>
        /* Project.css */
* {
  padding: 0px;
  margin: 0px;
  box-sizing: border-box;
  
}

body {
  font-family: 'Poppins', sans-serif;
  background-color: #F5EFE6;
}

h1,
h2 {
  font-family: sans-serif;
  font-weight: 400;
}

.logo{
  display: flex;
  justify-items: top;
  align-items: center;
  height:100px;
  width: 100px;
  padding-bottom: 20px;
}

a {
  text-decoration: none;
}
a:hover{
  color:#0bcb4f;
}
li {
  list-style: none;
}

.flex {
  display: flex;
}

.flex-space {
  display: flex;
  justify-content: space-between;
}

button {
  border: none;
  background: none;
  border-radius: 100px;
  outline: none;
  transition: 0.5s;
  cursor: pointer;
}


.primary-btn {
  padding: 15px 40px;
  background: #739072;
  font-weight: bold;
  color: white;
  border-radius: 100px;
}

.secondary-btn {
  padding: 15px 40px;
  background: none;
  border: 2px solid white;
  font-weight: bold;
  color: white;
  border-radius: 100px;
}


.container {
  max-width: 85%;
  margin: auto;
}

/*header styles*/
header {
  height: 10vh;
  line-height: 10vh;
  padding: 0 20px;
}

header img {
  margin: 20px 0;
}

header ul {
  display: inline-block;
}

header ul li {
  display: inline-block;
  text-transform: uppercase;
}

header ul li a {
  color: rgb(42, 40, 40);
  margin: 0 10px;
  transition: 0.5s;
}

header ul li a:hover {
  font-weight: 600px;
}

header i {
  margin: 0 20px;
}

header button {
  padding: 13px 40px;
}

header .navlinks span {
  display: none;
}

@media only screen and (max-width: 768px) {
  header ul {
    position: absolute;
    top: 100px;
    left: 0;
    width: 100%;
    height: 100vh;
    background: #009f7f;
    overflow: hidden;
    transition: max-height 0.5s;
    text-align: center;
    z-index: 9;
  }

  header ul li {
    display: block;

  }

  header ul li a {
    color: white;
  }

  header i {
    color: white;
  }

  header .navlinks span {
    color: black;
    display: block;
    cursor: pointer;
    line-height: 10vh;
    font-size: 25px;
  }

}

/*home*/
.home {
  height: 100vh;
  color: #fff;
}

.home img {
  width: 100%;
  height: 100vh;
}

.home .text {
  position: absolute;
  top: 35%;
  left: 5%;
}

.home .text h1 {
  font-size: 80px;
  font-family: serif;
  font-weight: 400;

}

.home p {
  margin: 20px 0;

}

.home button {
  margin-right: 20px;
}

.owl-nav .owl-prev,
.owl-nav .owl-next {
  position: absolute;
  top: 40%;
  height: 50px;
  width: 50px;
  background: rgba(0, 0, 0, 0.5) !important;
  color: #fff;
  border-radius: 100px;
}

.owl-nav .owl-prev {
  left: 0;
}

.owl-nav .owl-next {
  right: 0;
}

/*Book*/
/* Form container */
/* Responsive form styles */
form {
  max-width: 100%; /* Adjust width as needed */
  width: 90%; /* Set width to 90% of the container */
  margin: 0 auto; /* Center the form */
  padding: 20px;
  background-color: #F6F5F2;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  box-sizing: border-box; /* Include padding and border in the width */
}

/* Heading styles */
h1 {
  font-size: 2.25rem; /* Equivalent to 36px */
  text-align: center;
  margin-bottom: 1rem; /* Use margin instead of padding */
  font-weight: 400; /* Use font-weight 400 for normal weight */
}

h2 {
  font-size: 1.125rem; /* Equivalent to 18px */
  margin-top: 10px;
}

/* Select input styles */
select,
input[type="date"],
input[type="submit"] {
  width: 100%; /* Set width to 100% */
  padding: 0.625rem; /* Equivalent to 10px */
  margin: 0.3125rem 0; /* Equivalent to 5px */
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

/* Button styles */
input[type="submit"] {
  background-color: #4F6F52;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease;
  width: 100%; /* Set width to 100% */
  padding: 0.625rem; /* Equivalent to 10px */
  border: none; /* Remove border for a cleaner look */
}

/* Button hover effect */
input[type="submit"]:hover {
  background-color: #183D3D;
}

/*About*/
.container-flex {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

.heading {
  margin-bottom: 20px;
}

.heading h1 {
  font-size: 30px;
  line-height: 100px;
  margin-top: 90px; /* Adjusted margin */
  margin-left: 20px; /* Adjusted margin */
  font-weight: 500;
  color: #000000c0;
}

.heading h2 {
  font-size: 3rem;
  font-family: serif;
  font-weight: 400;
  margin-bottom: 1rem;
}

p {
  font-size: 1.6rem;
  line-height: 1.6;
}

button {
  padding: 1rem 2rem;
  font-size: 1.4rem;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

/*just hover*/
.primary-btn:hover {
  background-color: #183D3D;
}

.secondary-btn:hover {
  background-color: gray;
}

.image {
  flex: 1;
  padding: 20px;
}

.image img {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
}

.left,
.right {
  width: 50%;
  padding: 30px;
}

.top {
  margin-top: 80px;
}

.mtop {
  margin-top: 40px;
}

/* Heading Styles */
.heading h1 {
  font-size: 100px;
  font-weight: 500;
  opacity: 0.1;
  font-family: 'Playfair Display', serif;
  position: absolute;
  top: -30px;
  z-index: -12;
}

.heading h2 {
  margin: 0;
  font-size: 78px;
  font-family: Neue Montreal;
  font-weight: 400;
}

/* About Section Styles */
.about {
  display: flex; /* Make the container flex */
  align-items: center; /* Vertically center content */
  padding: 5% 0;
border: 1px solid black top;
}

.about .left {
  flex: 1; /* Take up remaining space */
  margin-top: 30px;
  padding-right: 30px; /* Add padding to create space between text and image */
}

.about p {
  font-size: 18px;
  line-height: 1.6;
  color: #120e0e;
  font-family: 'Roboto', sans-serif;
  
}

.about button {
  margin-top: 20px; /* Adjusted margin */
  padding: 15px 30px;
  background-color: #61c107;
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  border: none;
  border-radius: 25px; /* Rounded edges */
  cursor: pointer;
  transition: background-color 0.3s ease;
  font-family: 'Montserrat', sans-serif; /* Change font */

}

.about button:hover {
  background-color: #4d8222cc;
}






/*Makemytrip finder css*/


.footer {
  background-color: #282834; /* Changed background color */
  color: #fff;
  padding: 2% 2%;
  text-align: left;

  position: relative; /* Changed position to fixed */
  bottom: 0;
  width: 100%;
  z-index: 100; /* Added z-index */
}

.footer p {
  margin: 10px 0;
  font-size: 13px; /* Combined font-size with previous declaration */
}

.footer a {
  color: #fff;
  text-decoration: none;
}

.footer a:hover {
  text-decoration: underline;
}

.footer .mem {
  font-weight: bold; /* Changed font-weight to bold */
  font-size: 16px;
}

    </style>
    <title>Bus4U</title>
    <!--Google Fonts and Icons-->
    <link
        href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
        rel="stylesheet" />
    <!--  Latest compiled and minified CSS -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- google font => poppins-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <link rel="icon" type="x-icon" href="css/icons8-bus-16.png">
    <!-- favicon -->

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- box-icons script -->

    <script src="https://kit.fontawesome.com/3b85e9f5e6.js" crossorigin="anonymous"></script>
    <!-- font awesome icons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  Google fonts for the website -->

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <div class="content flex-space">
            <!-- NAVBAR -->
            <div class="logo">
                <img src="bus-ticket-logo(rb).png" alt="Logobus" width="80%" height="90%" />
                <!-- logobus.png is the file name try it -->
            </div>
            <div class="navlinks">
                <ul id="menulist">
                    <li><a href="index.php">Home</a></li>

                    <li><a href="#about">About Us</a></li>

                    <li><a href="register.php">Signup</a></li>

                    <li><a href="login.php">Login</a></li>

                    <li><a href="#book" class="primary-btn">BOOK NOW</a></li>
                </ul>
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- RESPONSIVE NAVBAR JS -->
    <!-- needs correction -->
    <script>
        var menulist = document.getElementById('menulist');
        menulist.style.maxHeight = "0px";

        function menutoggle() {
            if (menulist.style.maxHeight === "0px") {
                menulist.style.maxHeight = "100vh";
            } else {
                menulist.style.maxHeight = "0px";
            }
        }

        // Add event listener to toggle menu when clicking the bars icon
        document.querySelector('.fa-bars').addEventListener('click', function () {
            menutoggle();
        });
    </script>
    <!-- OWL CAROUSEL ELEMENTS -->
    <section class="home">
        <div class="content">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="banner-1.jpg" alt="Banner Image" height="750px" />
                    <div class="text">
                        <h1>Explore New Destinations</h1>
                        <p>Discover exciting adventures and scenic routes with our wide range of bus travel options.</p>
                        <div class="flex">

                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="banner-2.jpg" alt="Banner Image" height="750px" />
                    <div class="text">
                        <h1>Comfortable and Convenient Journeys</h1>
                        <p>Experience hassle-free travel with our comfortable buses and convenient booking process.</p>
                        <div class="flex">

                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="banner-3.jpg" alt="Banner Image" height="750px" />
                    <div class="text">
                        <h1>Connect with Loved Ones</h1>
                        <p>Reunite with family and friends or embark on a group adventure with our reliable bus
                            services.</p>
                        <div class="flex">

                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="banner-4.jpg" alt="Banner Image" height="750px" />
                    <div class="text">
                        <h1>Safe and Secure Travel</h1>
                        <p>Your safety is our priority. Travel with peace of mind knowing that we prioritize your
                            well-being.</p>
                        <div class="flex">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- OWL CAROUSEL SCRIPT -->
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            navText: [
                "<i class='bx bxs-left-arrow'></i>",
                "<i class='bx bxs-right-arrow'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    </script>
    <!-- DATE BOOKING -->
    <section class="book" id="book">
        <div class="container-flex-space">
            <div class="card">
                <div class="text">
                    <h1>Find <span>Seats</span></h1> <!-- Move the span outside of the h1 tag -->
                </div>
                <div class="form">
                    <?php
                    if (isset($_POST['start'])) {
                        $from = @$_POST['from'];
                        $to = @$_POST['to'];
                        $date = @$_POST['date'];
                        $sql = "INSERT INTO `booking`(`id`, `userID`, `from_location`, `to_location`, `date`) VALUES (null,'1','$from','$to','$date')";
                        $query = mysqli_query($conn, $sql);
                        $queryID = mysqli_insert_id($conn);
                        echo "<meta http-equiv=\"refresh\" content=\"0; url=CheckAvailability.php?id=$queryID\">";
                        exit();
                    }
                    ?>
                    <form action="index.php" method="POST">
                        <h2>From</h2>
                        <select name="from">
                            <?php
                            $sql = "SELECT * FROM `locations`";
                            $query = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($query)) {
                                $id = $row['id'];
                                $location = $row['location'];
                                echo "<option value='$location'>$location</option>";
                            }
                            ?>
                        </select>
                        <br />
                        <h2>To</h2>
                        <select name="to">
                            <?php
                            $sql = "SELECT * FROM `locations`";
                            $query = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($query)) {
                                $id = $row['id'];
                                $location = $row['location'];
                                echo "<option value='$location'>$location</option>";
                            }
                            ?>
                        </select>
                        <br />
                        <h2>Date</h2>
                        <input type="date" name="date">
                        <input type="submit" name="start" value="Book Now!">
                    </form>
                </div>
            </div>
        </div>


    </section>
    <!-- ABOUT SECTION -->
    <section class="about" id="about">
        <div class="container-flex">
            <div class="content">
                <div class="heading">
                    <h2>Busforyou</h2>
                </div>
                <p>
                    Welcome to busforyou!!
                    We're your premier destination for hassle-free bus ticket booking.
                    With an extensive network of operators and destinations,
                    our intuitive platform, secure transactions, and 24/7 customer support
                    guarantee a seamless journey every step of the way.
                    Experience exclusive deals, instant confirmation, and flexible booking options.
                    Whether you're commuting or embarking on an adventure,
                    travel effortlessly with BUS4YOU.

                </p>
                <button class="primary-btn">ABOUT US</button>
            </div>
            <div class="image">
                <img class="aboutimg" src="banner-2.jpg" alt="bus-image">
            </div>
        </div>
    </section>
    
    <section class="footer">
        <div class="footer">
            <p>&copy; 2024 6th Semester Project. All rights reserved.</p>
            <p class="mem">Members</p>
            <p>Akash: info@example.com</p>
            <p>Abhijeet: info@example.com</p>
            <p>Sourabh: info@example.com</p>
            <p>Annapurna: info@example.com</p>
        </div>
    </section>
</body>

</html>

<!-- 
    NOTE: 
    The development of this website is still ongoing. 
    Please pardon any incomplete features or errors encountered during this phase. 
    Thank you for your understanding. 
-->