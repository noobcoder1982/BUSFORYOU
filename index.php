<?php include_once ("connect.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Bus4U</title>
    <link rel="stylesheet" href="Project.css">
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
                <img src="bus-ticket-logo.png" alt="Logobus" width="80%" height="90%"/>
                <!-- logobus.png is the file name try it -->
            </div>
            <div class="navlinks">
                <ul id="menulist">
                    <li><a href="Project.html">Home</a></li>

                    <li><a href="Project.html">About Us</a></li>

                    <li><a href="signup.html">Signup</a></li>

                    <li><a href="login.html">Login</a></li>

                    <li><i class="fa fa-search"></i></li>
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
    if(isset($_POST['start'])) {
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
        From <select name="from">
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
        To <select name="to">
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
        Date
        <input type="date" name="date">
        <input type="submit" name="start" value="Book Now!">
    </form>
                </div>
            </div>
        </div>


    </section>
    <!-- ABOUT SECTION -->
    <section class="about">
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