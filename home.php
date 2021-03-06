<?php
    session_start();
    if(!$_SESSION['fullname']){
        header("location:index.php");
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "links/links.php" ?>

    <title>College Election</title>
</head>

<body onload="preloader_fun()">

    <!--========Preloader========-->
    <div id="loading" class="container-fluid">
        <div class="d-flex justify-content-center align-items-center" style="width: inherit; height: inherit;">
            <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!--========Header========-->

    <!--====Mobile Menu====-->
    <div class="container.fluid">
        <div id="tgl-mnu" class="toggle-menu">
            <div class="black">
                <i class="bi bi-x-lg fff"></i>
            </div>
            <div class="d-flex justify-content-center">
                <div class="mobile-menu">
                    <ul class="navbar-nav mx-4 mt-4">
                        <li class="nav-item">
                            <a class="nav-link font-5 text-dark" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-5 text-dark" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-5 text-dark" href="#policies">Policies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-5 text-dark" href="#news">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-5 text-dark" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-5 text-dark" href="logout.php">Logout</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <!--====Navbar====-->
    <nav class="navbar navbar-expand-lg" style="z-index: 90;">
        <div class="container-md">
            <a href="#" class="navbar-brand fs-3 font-6 nav-margin fff">College Election</a>
            <i class="bi bi-list fff fs-4"></i>
            <div class="menu">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link font-5 fff" href="#hero">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link font-5 fff" href="#about">About</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link font-5 fff" href="#policies">Policies</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link font-5 fff" href="#news">News</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link font-5 fff" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item mx-3">
                        <div id="drop-down" class="btn-group">
                            <a class="bi bi-person-circle fs-3 fff nav-link" style="text-decoration: none;" data-bs-toggle="dropdown" aria-expanded="false"></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><button class="dropdown-item" type="button"><?php echo $_SESSION['fullname'] ?></button></li>
                                <li><button class="dropdown-item" type="button">Link</button></li>
                                <li><a href="logout.php" class="dropdown-item" type="button">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!--========Hero Section========-->
    <section>
        <div id="hero" class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-3 text-end" data-aos="fade-left">
                        <h1 class=" fff f-text-family-head">Welcome <?php echo $_SESSION['fullname'] ?></h1>
                        <h2 class="fff">
                            <?php
                                    if($_SESSION['vote_status'] != 0){
                                        echo "YOUR VOTE SUBMITTED";
                                    }else{
                                        echo "SUBMIT YOUR VOTE HERE";
                                    }
                            ?>
                        </h2>
                        <?php
                            if($_SESSION['collegeid'] == "admin"){
                                echo ' <a href="vote_result.php"><button class="f-btn-1">VOTE SUMMERY</button></a> ';
                            }else{
                                echo ' <a href="vote.php"><button class="f-btn-1">VOTE NOW</button></a> ';
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========About Key========-->
    <section>
        <div id="about" class="mt-5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="d-flex flex-column justify-content-center align-items-center p-4">
                            <span class="bi bi-key-fill f-color-2 fs-1 fw-bold my-2"></span>
                            <h5 class="font-6 f-text-sec my-2">Secure Voting</h5>
                            <p class="text-center text-sm-2 my-2">Each student has unique voter ID and unique key and
                                can vote only once.</p>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="d-flex flex-column justify-content-center align-items-center p-4">
                            <span class="bi bi-phone-fill f-color-2 fs-1 fw-bold my-2"></span>
                            <h5 class="font-6 f-text-sec my-2">Mobile Ready</h5>
                            <p class="text-center text-sm-2 my-2">Elections are optimized for Ddesktop and mobile
                                devices. Students can vote from web browser or our iOS and Android app.</p>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="d-flex flex-column justify-content-center align-items-center p-4">
                            <span class="bi bi-lightning-fill f-color-2 fs-1 fw-bold my-2"></span>
                            <h5 class="font-6 f-text-sec my-2">Quick & Easy Setup</h5>
                            <p class="text-center text-sm-2 my-2">Built your election in a manner of minute with our
                                easy to use interface.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--========About Full========-->
    <section>
        <div class="about-us mt-5">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-4 about-left">
                        <div class="about-img">
                            <img src="img/about/principal.jpg" class="img-fluid f-img-fluid" alt="" data-aos="fade-right">
                        </div>
                    </div>

                    <div class="about-right col-lg-8">
                        <div class="f-padding">
                            <div>
                                <div data-aos="fade-up">
                                    <h5 class="fff my-4">ABOUT US</h5>
                                    <h3 class="fff fw-bold my-4">Moveth Great. In. Seed seasons waters from won't moving
                                        forth saw which also Cattle</h3>
                                    <p class="fff my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla
                                        pariatur. Excepteur sint occaecat</p>
                                </div>
                                <div data-aos="fade-up">
                                    <span class="font-size-X f-text-family-head fff my-5">George
                                        Bush</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--========Our Policies========-->
    <section>
        <div id="policies" class="policies mt-5 py-5">
            <div class="container">
                <div>
                    <div data-aos="fade-right">
                        <h1 class="fw-bold">Our Policies</h1>
                    </div>

                    <div class="row">

                        <!--Policies-->
                        <div class="col-lg-8 my-5">

                            <div class="row">
                                <div class="col-lg-6 mb-5" data-aos="fade-up">
                                    <div>
                                        <span class="icon-bank fs-1 icon-color my-3"></span>
                                        <h5 class="fw-bold my-3">Government Policy</h5>
                                        <p class="text-sm-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                                        <a href="#" class="f-color">Learn more</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-5" data-aos="fade-up">
                                    <div>
                                        <span class="icon-legal fs-1 icon-color my-3"></span>
                                        <h5 class="fw-bold my-3">Legal Policy</h5>
                                        <p class="text-sm-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                                        <a href="#" class="f-color">Learn more</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-5" data-aos="fade-up">
                                    <div>
                                        <span class="icon-eye fs-1 icon-color my-3"></span>
                                        <h5 class="fw-bold my-3">Privacy Policy</h5>
                                        <p class="text-sm-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                                        <a href="#" class="f-color">Learn more</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-5" data-aos="fade-up">
                                    <div>
                                        <span class="icon-book fs-1 icon-color my-3"></span>
                                        <h5 class="fw-bold my-3">Tearms & Conditions</h5>
                                        <p class="text-sm-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                                        <a href="#" class="f-color">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Cards-->
                        <div class="col-lg-4">
                            <div class="row">

                                <!--Card 1-->
                                <div class="col-lg-12 mb-3" data-aos="fade-up">
                                    <div id="card1" style="position: relative;">
                                        <div class="front" style="z-index: 88;">
                                            <div style="width: 100%; height: 12rem; position: relative;">
                                                <div class="box">
                                                    <img src="img/policy/card1.webp" class="f-img-fluid" alt="">
                                                </div>
                                                <div class="box-overlay" style="background: #00477ecc;">
                                                    <span style="position:absolute; top: 80%; left: 20%; transform: translate(-20%,-80%); font-weight: 600;">Join
                                                        Our Political Campain</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back" style="position: absolute; width: 100%; top: 0%; z-index: 80;">
                                            <div style="width: 100%; height: 12rem; position: relative;">
                                                <div class="box">
                                                    <img src="img/policy/card1.webp" class="f-img-fluid" alt="">
                                                </div>
                                                <div class="box-overlay" style="background: #00477ecc;">
                                                    <div style="position:absolute; top: 50%; left: 30%; transform: translate(-30%,-50%); font-weight: 600;">
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                        </span>
                                                        <p class="fff my-4"><a>Learn More</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Card 2-->
                                <div class="col-lg-12 mb-3" data-aos="fade-up">
                                    <div id="card2" style="position: relative;">
                                        <div class="front" style="z-index: 88;">
                                            <div style="width: 100%; height: 12rem; position: relative;">
                                                <div class="box">
                                                    <img src="img/policy/card2.webp" class="f-img-fluid" alt="">
                                                </div>
                                                <div class="box-overlay" style="background: #da2439b4;">
                                                    <span style="position:absolute; top: 80%; left: 20%; transform: translate(-20%,-80%); font-weight: 600;">Join
                                                        Our News Letter</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back" style="position: absolute; width: 100%; top: 0%; z-index: 80;">
                                            <div style="width: 100%; height: 12rem; position: relative;">
                                                <div class="box">
                                                    <img src="img/policy/card2.webp" class="f-img-fluid" alt="">
                                                </div>
                                                <div class="box-overlay" style="background: #da2439b4;">
                                                    <div style="position:absolute; top: 50%; left: 30%; transform: translate(-30%,-50%); font-weight: 600;">
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                        </span>
                                                        <p class="fff my-4"><a>Learn More</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Card 3-->
                                <div class="col-lg-12 mb-3" data-aos="fade-up">
                                    <div id="card3" style="position: relative;">
                                        <div class="front" style="z-index: 88;">
                                            <div style="width: 100%; height: 12rem; position: relative;">
                                                <div class="box">
                                                    <img src="img/policy/card3.webp" class="f-img-fluid" alt="">
                                                </div>
                                                <div class="box-overlay" style="background: #00477ecc;">
                                                    <span style="position:absolute; top: 80%; left: 20%; transform: translate(-20%,-80%); font-weight: 600;">Join
                                                        As Volunteer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="back" style="position: absolute; width: 100%; top: 0%; z-index: 80;">
                                            <div style="width: 100%; height: 12rem; position: relative;">
                                                <div class="box">
                                                    <img src="img/policy/card3.webp" class="f-img-fluid" alt="">
                                                </div>
                                                <div class="box-overlay" style="background: #00477ecc;">
                                                    <div style="position:absolute; top: 50%; left: 30%; transform: translate(-30%,-50%); font-weight: 600;">
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                        </span>
                                                        <p class="fff my-4"><a>Learn More</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--========Election Candidates=========-->
    <section>
        <div class="candidates mt-5">
            <div class="container">
                <div class="col-lg-6">
                    <div data-aos="fade-right">
                        <h5 class="fff">MEET CANDIDATES</h5>
                        <h1 class="fw-bold fff my-4">Our Election Candidates</h1>
                        <p class="fff">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 mb-4" data-aos="fade-up">
                        <div>
                            <img src="img/election_candidates/candidate1.jpg" class="f-img-fluid" alt="">
                            <h4 class="fff text-center mt-4">Austin Philip</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4" data-aos="fade-up">
                        <div>
                            <img src="img/election_candidates/candidate2.jpg" class="f-img-fluid" alt="">
                            <h4 class="fff text-center mt-4">Rachel Weiz</h4>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up">
                        <div>
                            <img src="img/election_candidates/candidate3.jpg" class="f-img-fluid img-fluid" alt="">
                            <h4 class="fff text-center mt-4">Robert Patinson</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========News========-->
    <section>
        <div id="news" class="news mt-5 pt-5">
            <div class="container">
                <div>
                    <div data-aos="fade-right">
                        <h1 class="fw-bold mb-4">News & Updates</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip</p>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                            <div class="">
                                <img src="img/news/news1.webp" class="card-img-top f-img-fluid" alt="...">
                                <div class="card-body my-4">
                                    <span class="f-color my-4">March 15,2021</span>
                                    <a href="#">
                                        <h5 class="fw-bold my-4 f-black">Lorem ipsum dolor sit amet ad minim</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                            <div class="">
                                <img src="img/news/news2.webp" class="card-img-top f-img-fluid" alt="...">
                                <div class="card-body my-4">
                                    <span class="f-color my-4">March 15,2021</span>
                                    <a href="#">
                                        <h5 class="fw-bold my-4 f-black">Lorem ipsum dolor sit amet ad minim</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                            <div class="">
                                <img src="img/news/news3.webp" class="card-img-top f-img-fluid" alt="...">
                                <div class="card-body my-4">
                                    <span class="f-color my-4">March 15,2021</span>
                                    <a href="#">
                                        <h5 class="fw-bold my-4 f-black">Lorem ipsum dolor sit amet ad minim</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                            <div class="">
                                <img src="img/news/news4.webp" class="card-img-top f-img-fluid" alt="...">
                                <div class="card-body my-4">
                                    <span class="f-color my-4">March 15,2021</span>
                                    <a href="#">
                                        <h5 class="fw-bold my-4 f-black">Lorem ipsum dolor sit amet ad minim</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========Donate & Volunteer========-->
    <section>
        <div class="donate">
            <div class="container-fluid">
                <div class="row gx-0">

                    <div class="col-lg-6 staff" data-aos="fade">
                        <img src="img/donation/meeting.jpg" class="img-fluid f-img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 donation">
                        <div class="d-txt" data-aos="fade-down">
                            <span class="icon-bank fs-1"></span>
                            <h4 class="my-4 fw-bold">Make Donation for our Campain</h4>
                            <a href="#" class="fff">Learn More</a>
                        </div>

                        <div class="mb-4" data-aos="fade-up">
                            <img src="img/donation/donation.jpg" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 volunteer">
                        <div data-aos="fade-down">
                            <img src="img/donation/volunteer.webp" class="img-fluid" alt="">
                        </div>

                        <div class="d-txt" data-aos="fade-up">
                            <span class="icon-handshake-o fs-1"></span>
                            <h4 class="my-4 fw-bold">Join As Volunteer</h4>
                            <a href="#" class="fff">Learn More</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--========Contact========-->
    <section>
        <div id="contact" class="contact mt-5 pt-5">
            <div class="container">
                <div>
                    <div data-aos="fade-right">
                        <h1 class="fw-bold">Contact</h1>
                    </div>

                    <div class="row mt-5">
                        <div class="col shadow-box p-4 mx-3 mb-4" data-aos="fade-up">
                            <div class="d-flex flex-column align-items-center">
                                <i class="bi bi-geo-alt fs-2"></i>
                                <h4>Our Address</h4>
                                <span class="text-black-50 text-center">A108 Adam Street, New York</span>
                            </div>
                        </div>
                        <div class="col shadow-box p-4 mx-3 mb-4" data-aos="fade-up">
                            <div class="d-flex flex-column align-items-center">
                                <i class="bi bi-envelope fs-2"></i>
                                <h4>Email Us</h4>
                                <span class="text-black-50 text-center">contact@example.com</span>
                            </div>
                        </div>
                        <div class="col shadow-box p-4 mx-3 mb-4" data-aos="fade-up">
                            <div class="d-flex flex-column align-items-center">
                                <i class="bi bi-phone fs-2"></i>
                                <h4>Call Us</h4>
                                <span class="text-black-50 text-center">+1 5589 55488 55</span>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-box p-4" data-aos="fade-up">
                        <div class="row g-4">
                            <div class="col-lg-6 col-sm-12">
                                <input type="text" placeholder="Your Name" class="f-form-control">
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <input type="email" placeholder="Your Email" class="f-form-control">
                            </div>
                            <div class="col-12">
                                <input type="text" placeholder="Subject" class="f-form-control">
                            </div>
                            <div class="col-12">
                                <textarea placeholder="Message" class="f-form-control py-2" style="height: 200px;"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <a href="#"><button class="f-btn-2">Send Message</button></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--========Footer========-->
    <footer class="mt-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="mx-2">
                    <a class="fff" href="#news">News</a>
                </div>
                <div class="mx-2">
                    <a class="fff" href="#">Donate</a>
                </div>
                <div class="mx-2">
                    <a class="fff" href="#">Join</a>
                </div>
                <div class="mx-2">
                    <a class="fff" href="#">Contact</a>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <span class="fff">?? College Election. All right reserver</span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--========AOS========-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            delay: 500,
            once: true
        });
    </script>

    <!--========Preloader========-->
    <script>
        var preloader = document.getElementById('loading');

        function preloader_fun() {
            preloader.style.display = 'none';
        }
    </script>

</body>

</html>