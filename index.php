<?php session_start(); 
include "get_events.php";
include "review.php";
include "speakers.php";
include 'tickets.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Leadership Event HTML5 Bootstrap v5 Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="css/templatemo-leadership-event.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="index.html" class="navbar-brand mx-auto mx-lg-0">
                <i class="bi-bullseye brand-logo"></i>
                <span class="brand-text">Leadership <br> Event</span>
            </a>

            <a class="nav-link custom-btn btn d-lg-none" href="#">Buy Tickets</a>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Speakers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Overview</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">Pricing</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_6">Venue</a>
                    </li>
                    <?php if (!isset($_SESSION["ID"])) : ?>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_7">Sign In</a>
                        </li>
                    <?php endif; ?>


                    <?php if (isset($_SESSION["ID"])) : ?>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php    if ($_SESSION["speaker"]==0) : ?>
                                <a class="dropdown-item" href="my_events.php">My Events</a>
                            <?php endif; ?>
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </li>

            </div>

        <?php endif; ?>
        </li>
        </ul>
        <div>

        </div>
    </nav>

    <main>

        <section class="hero" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 m-auto">
                        <div class="hero-text">

                            <h1 class="text-white mb-4"><u class="text-info">Leadership</u> Conference 2022</h1>

                            <div class="d-flex justify-content-center align-items-center">
                                <span class="date-text">July 12 to 18, 2022</span>

                                <span class="location-text">Times Square, NY</span>
                            </div>

                            <a href="#section_2" class="custom-link bi-arrow-down arrow-icon"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="videos/pexels-pavel-danilyuk-8716790.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>


        <section class="highlight">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="highlight-thumb">
                            <img src="images/highlight/alexandre-pellaes-6vAjp0pscX0-unsplash.jpg" class="highlight-image img-fluid" alt="">

                            <div class="highlight-info">
                                <h3 class="highlight-title">2019 Highlights</h3>

                                <a href="https://www.youtube.com/templatemo" class="bi-youtube highlight-icon"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="highlight-thumb">
                            <img src="images/highlight/miguel-henriques--8atMWER8bI-unsplash.jpg" class="highlight-image img-fluid" alt="">

                            <div class="highlight-info">
                                <h3 class="highlight-title">2020 Highlights</h3>

                                <a href="https://www.youtube.com/templatemo" class="bi-youtube highlight-icon"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="highlight-thumb">
                            <img src="images/highlight/jakob-dalbjorn-cuKJre3nyYc-unsplash.jpg" class="highlight-image img-fluid" alt="">

                            <div class="highlight-info">
                                <h3 class="highlight-title">2021 Highlights</h3>

                                <a href="https://www.youtube.com/templatemo" class="bi-youtube highlight-icon"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <h2 class="mb-4">Our <u class="text-info">Story </u></h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <h3 class="mb-3">The importance of Leadership Conference in 2022</h3>

                        <p>Leadership Event is one-page Bootstrap v5.1.3 CSS layout for your website. Thank you for choosing TemplateMo website where you can instantly download free CSS templates at no cost.</p>

                        <a class="custom-btn custom-border-btn btn custom-link mt-3 me-3" href="#section_3">Meet Speakers</a>

                        <a class="custom-btn btn custom-link mt-3" href="#section_4">Check out Schedule</a>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</h4>

                        <div class="avatar-group border-top py-5 mt-5">
                            <img src="images/avatar/natalie.jpg" class="img-fluid avatar-image" alt="">

                            <img src="images/avatar/logan.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                            <img src="images/avatar/thomas.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                            <img src="images/avatar/isabella.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                            <p class="d-inline">120+ People are attending with us</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="speakers section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 d-flex flex-column justify-content-center align-items-center">
                            <div class="speakers-text-info">
                                <h2 class="mb-4">Our <u class="text-info">Speakers</u></h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="speakers-thumb">

                            <?php  $speaker = $speakers[0];

                                echo '<img src="images/avatar/' . $speaker->speaker_image . '" class="img-fluid speakers-image" alt="">';
                                echo '<small class="speakers-featured-text">Featured</small>';

                                echo '<div class="speakers-info">';

                                echo '<h5 class="speakers-title mb-0">' . $speaker->speaker_name . '</h5>';

                                echo '<p class="speakers-text mb-0">' . $speaker->speaker_position . '</p>';

                                echo '<ul class="social-icon">';
                                echo '  <li><a href="#" class="social-icon-link bi-facebook"></a></li>';
                                echo '  <li><a href="#" class="social-icon-link bi-instagram"></a></li>';
                                echo '  <li><a href="#" class="social-icon-link bi-google"></a></li>';
                                echo '</ul>';
                            ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12">
                            <div class="row">


                            <?php  for ($i = 1; $i < count($speakers); $i++) {
                                   $speaker = $speakers[$i];

                            echo '<div class="col-lg-3 col-md-6 col-12">';
                            echo '    <div class="speakers-thumb speakers-thumb-small">';
                            echo '        <img src="images/avatar/' . $speaker->speaker_image . '" class="img-fluid speakers-image" alt="">';
                            echo '        <div class="speakers-info">';
                            echo '            <h5 class="speakers-title mb-0">' . $speaker->speaker_name . '</h5>';
                            echo '            <p class="speakers-text mb-0">' . $speaker->speaker_position . '</p>';
                            echo '            <ul class="social-icon">';
                            echo '                <li><a href="#" class="social-icon-link bi-facebook"></a></li>';
                            echo '                <li><a href="#" class="social-icon-link bi-instagram"></a></li>';
                            echo '            </ul>';
                            echo '        </div>';
                            echo '    </div>';
                            echo '</div>';

                            }

                            ?>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        <section class="schedule section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h2 class="mb-5 text-center">Your <u class="text-info">Reviews</u>

                            <?php if (isset($_SESSION["ID"]) && $_SESSION["speaker"]==0) : ?>
                                <a href="#" data-toggle="modal" data-target=".bd-example1-modal-lg" style="float:right">+</a>
                            <?php endif; ?>

                        </h2>

                        <?php
                        $firstIteration = true;

                        echo '        <nav>';
                        echo '           <div class="nav nav-tabs align-items-baseline" id="nav-tab" role="tablist">';

                        foreach ($events_for_reviews as $event) {
                            $class = $firstIteration ? ' active' : '';
                            echo '                   <button class="nav-link' . $class . '" id="nav-Day' . $event->ID . '-tab" data-bs-toggle="tab" data-bs-target="#nav-Day' . $event->ID . '" type="button" role="tab" aria-controls="nav-Day' . $event->ID . '" aria-selected="true">';
                            echo '                        <h3>';
                            echo '                            <span>' . $event->title . '</span>';
                            echo '                            <small>' . $event->date . '</small>';
                            echo '                        </h3>';
                            echo '                    </button>';
                            $firstIteration = false;
                        }

                        echo '               </div>';
                        echo '            </nav>';




                        echo '            <div class="tab-content mt-5" id="nav-tabContent">';
                
                        $firstIteration2 = true;
                        foreach ($events1 as $event) {
                            $class = $firstIteration2 ? ' active' : '';
                            echo '                <div class="tab-pane fade show' . $class . '" id="nav-Day' . $event->event_id . '" role="tabpanel" aria-labelledby="nav-Day' . $event->event_id . '-tab">';
                            foreach ($event->reviews as $review) {
                                if ($review->review_id != '0') {
                                    echo '                     <div class="row border-bottom pb-5 mb-5">';

                                    echo '                         <div class="col-lg-8 col-12 mt-3 mt-lg-0">';

                                    echo '                             <p>' . $review->review_text . '</p>';

                                    echo '                             <div class="d-flex align-items-center mt-4">';
                                    echo '                                 <div class="avatar-group d-flex">';
                                    echo '                                     <img src="images/avatar/' . $review->img . '" class="img-fluid avatar-image" alt="">';

                                    echo '                                     <div class="ms-3"> ' . $review->user_fn . ' ' . $review->user_ln . ' <p class="speakers-text mb-0">User</p>';
                                    echo '                                     </div>';
                                    echo '                                 </div>';

                                    echo '                                 <span class="mx-3 mx-lg-5">';
                                    echo '                                     <i class="bi-clock me-2"></i>' . $review->date_time . '</span>';
                                    if (isset($_SESSION["ID"]) && $_SESSION["ID"] == $review->user_id) {

                                        echo       '<a href="#" data-toggle="modal" onclick="openModal(' . $review->review_id . ')" style="float:right"> <i class="bi bi-pencil-square" style="float:right"></i> </a>';
                                        echo       '<form method="post" action="delete_review.php">';
                                        echo       '<input type="hidden" name="review_id" value="' . $review->review_id . '>"';
                                        echo       '   <a href="#" type="submit">';
                                        echo '<button type="submit" name="delete_review" class="btn btn-link" style="color: #6D6D6D; outline: none;" onmouseover="this.style.color=\'red\'" onmouseout="this.style.color=\'#6D6D6D\'"> <i class="bi bi-trash"></i> </button>';
                                        echo       '</form>';
                                    }
                                    echo '                         </div>';
                                    echo '                         </div>';
                                    echo '                         </div>';
                                }
                            }

                            echo '                         </div>';
                            $firstIteration2 = false;
                        }
                        ?>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="call-to-action section-padding">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-7 col-12">
                        <h2 class="text-white mb-4">Become an <u class="text-info">event speaker?</u></h2>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</p>
                    </div>

                    <div class="col-lg-3 col-12 ms-lg-auto mt-4 mt-lg-0">
                        <a href="#section_5" class="custom-btn btn">Register Today</a>
                    </div>

                </div>
            </div>
        </section>

        <section class="pricing section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                        <h2>Get Your <u class="text-info">Tickets</u></h2>
                    </div>


                    <?php

                    foreach ($tickets as $ticket) {

                        echo '    <div class="col-lg-4 col-md-6 col-12 mb-5 mb-lg-0">';
                        echo '        <div class="pricing-thumb bg-white shadow-lg" id="pricing' . $ticket->event_id . '">';
                        echo '            <div class="pricing-title-wrap d-flex align-items-center">';

                        echo '              <form>';
                        echo '               <input type="hidden" name="hiddenEventID" value="' . $ticket->event_id . '">';
                        echo '                <h4 class="pricing-title text-white mb-0">' . $ticket->title . '</h4>';
                        echo '                <h6 class="pricing-small-title text-white mb-0 ms-auto">' . $ticket->price . ' €</h6>';
                        echo '           </div>';

                        echo '       <div class="pricing-body">';
                        echo '           <p> <i class="bi-cup me-2"></i> All-Day Coffee + Snacks </p>';
                        echo '           <p> <i class="bi-boombox me-2"></i> Group meetings </p>';
                        echo '           <p>  <i class="bi-chat-square me-2"></i> 24/7 Support </p>';
                        echo '           <div class="border-bottom pb-3 mb-4"></div>';

                        echo '                <p>' . $ticket->description . '</p>';
                        if (isset($_SESSION['ID'])) {
                            echo       '<a class="custom-btn btn mt-3" onclick="ajax_for_shopping_cart(' . $ticket->event_id . ')" > Buy Tickets </a>';
                        } else {
                            echo '   <a class="custom-btn btn mt-3" href="#section_7">Add to Cart</a>';
                        }
                        echo '            </div>';
                        echo '          </form>';
                        echo '        </div>';
                        echo '    </div>';
                    }
                    ?>


                </div>
            </div>
        </section>

        <section class="venue section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h2 class="mb-5">Here you go <u class="text-info">Venue</u></h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1511.091461689997!2d-73.9866630916883!3d40.758001294831736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855a96da09d%3A0x860bf5a5e1a00a68!2sTimes%20Square%2C%20New%20York%2C%20NY%2010036%2C%20USA!5e0!3m2!1sen!2ssg!4v1643035529098!5m2!1sen!2ssg" width="100%" height="371.59" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="venue-thumb bg-white shadow-lg">

                            <div class="venue-info-title">
                                <h2 class="text-white mb-0">Times Square</h2>
                            </div>

                            <div class="venue-info-body">
                                <h4 class="d-flex">
                                    <i class="bi-geo-alt me-2"></i>
                                    <span>102 South. 7th Street, New York, NY 10036, USA</span>
                                </h4>

                                <h5 class="mt-4 mb-3">
                                    <a href="mailto:hello@yourgmail.com">
                                        <i class="bi-envelope me-2"></i>
                                        hi@company.com
                                    </a>
                                </h5>

                                <h5 class="mb-0">
                                    <a href="tel: 305-240-9671">
                                        <i class="bi-telephone me-2"></i>
                                        010-020-0340
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact section-padding" id="section_7">
            <div class="container">
                <div class="row">

                    <?php if (!isset($_SESSION["ID"])) : ?>

                        <div class="col-lg-8 col-12 mx-auto">
                            <form class="custom-form contact-form bg-white shadow-lg" action="login.php" method="post" role="form">
                                <h2>Login with us</h2>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="email" name="mail" id="mail" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="password" name="pswd" id="pswd" class="form-control" placeholder="Password" required="">
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <button type="submit" class="form-control">Submit</button>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12" style="display: flex; align-items:center">
                                        <a href="#" data-toggle="modal" data-target="#modalSignUp">Sign Up</a>
                                    </div>

                                </div>
                            </form>
                        </div>

                    <?php endif; ?>

                </div>
            </div>
        </section>

        <div class="modal" id="" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #273053">
                        <h3 class="modal-title" style="color: white;">Adjust Review</h3>
                        <div class="close" data-dismiss="modal" aria-label="Close">
                            <i class="bi bi-x-circle" aria-hidden="true" style="color: white;font-size: 1.5rem; cursor: pointer"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">


                            <div class="col-12">
                                <form class="custom-form contact-form bg-white shadow-lg" action="sign_up_done.php" method="post" role="form">

                                    <div class="row">
                                        <div class="col-12">
                                            <input type="first_name" name="first_name" id="first_name" class="form-control" placeholder="First name" required="">
                                        </div>

                                        <div class="col-12">
                                            <input type="last_name" name="last_name" id="last_name" class="form-control" placeholder="Last name" required="">
                                        </div>

                                        <div class="col-12">
                                            <input type="email" name="mail" id="mail" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required="">
                                        </div>

                                        <div class="col-12">
                                            <input type="password" name="pswd" id="pswd" class="form-control" placeholder="Password" required="">
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="form-control">Submit</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>

    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12 col-12 border-bottom pb-5 mb-5">
                    <div class="d-flex">
                        <a href="index.html" class="navbar-brand">
                            <i class="bi-bullseye brand-logo"></i>
                            <span class="brand-text">Leadership <br> Event</span>
                        </a>

                        <ul class="social-icon ms-auto">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7 col-12">
                    <ul class="footer-menu d-flex flex-wrap">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Code of Conduct</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy and Terms</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                    </ul>
                </div>


                <div class="col-lg-5 col-12 ms-lg-auto">
                    <div class="copyright-text-wrap d-flex align-items-center">
                        <p class="copyright-text ms-lg-auto me-4 mb-0">
                            Copyright © 2022 Leadership Event Co., Ltd.
                            <br>All Rights Reserved.
                            <br><br>Design: <a title="CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>

                        <a href="#section_1" class="bi-arrow-up arrow-icon custom-link"></a>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>


    <!--začína modal-->
    <div class="modal fade bd-example1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header" style="background-color: #273053">
                    <h3 class="modal-title" style="color: white;">Add Review</h3>
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-circle" aria-hidden="true" style="color: white;font-size: 1.5rem; cursor: pointer"></i>
                    </div>
                </div>

                <div class="container">

                    <form action="add_review.php" method="post" role="form">
                        <div class="mt-3 mb-3 ms-4 me-4">
                            <label for="exampleFormControlTextarea1" class="form-label">Event</label>
                            <select class="form-select" aria-label="Default select example" name="event_id">
                                <?php
                                foreach ($events_for_reviews as $event) {
                                    echo '    <option value="' . $event->ID . '">' . $event->title . '</option>';
                                }
                                ?>
                             </select>
                        </div>

                        <div class="mt-3 mb-3 ms-4 me-4">
                            <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="6"></textarea>
                        </div>

                        <div class="mt-4 mb-4 ms-4 me-4">
                            <button type="submit" class="form-control mt-3 mb-3" style="background-color:#0dcaf0; color:white">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div> 
    <!--končí modal-->

    <script>
        function openModal(review_id) {
            $.ajax({
                url: 'adjust.php', 
                method: 'POST',
                data: {
                    review_id: review_id
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    var reviewData = JSON.parse(response);
                    $('#myModal').find('input[name="hidden_id"]').val(reviewData[0].ID);
                    $('#myModal').find('textarea[name="text"]').val(reviewData[0].text);
                    $('#myModal').modal('show');

                    $('#myModal .close').on('click', function() {
                    $('#myModal').modal('hide');
            });
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }

        function ajax_for_shopping_cart(event_id) {
            $.ajax({
                url: 'add_to_shopping_cart.php', 
                method: 'POST',
                data: {
                    event_id: event_id
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    var alert = JSON.parse(response);
                    if (alert[0].info == 'true') {
                        var alertElement = $('<div class="alert alert-success" role="alert">You´ve already chosen this one</div>');

                        $('#pricing' + event_id).append(alertElement);
                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>

    <!-- začína modal -->

    <div class="modal fade bd-example2-modal-lg" id="modalSignUp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header" style="background-color: #273053">
                    <h3 class="modal-title" style="color: white;">Sign Up</h3>
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-circle" aria-hidden="true" style="color: white;font-size: 1.5rem; cursor: pointer"></i>
                    </div>
                </div>

                <div class="container">

                    <form action="sign_up.php" method="post" role="form">


                        <div class="mt-2 mb-4 ms-4 me-4">
                            <label class="col-form-label">First Name</label>
                            <input type="text" class="form-control" name="first_name">
                        </div>

                        <div class="mt-4 mb-4 ms-4 me-4">
                            <label class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name">
                        </div>


                        <div class="mt-4 mb-4 ms-4 me-4">
                            <label class="col-form-label">Email</label>
                            <input type="mail" class="form-control" name="mail">
                        </div>

                        <div class="mt-4 mb-4 ms-4 me-4">
                            <label class="col-form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="mt-2 mb-4 ms-4 me-4">
                            <label for="formFile" class="form-label">File</label>
                            <input class="form-control" type="file" id="formFile" name="file">
                        </div>


                        <div class="mt-4 mb-4 ms-4 me-4">
                            <button type="submit" class="form-control mt-3 mb-3" style="background-color:#0dcaf0; color:white">Submit</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Končí modal -->



    <!-- Začína modal -->

    <div class="modal fade bd-example2-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <div class="modal-header" style="background-color: #273053">
    <h3 class="modal-title" style="color: white;">Adjust Review</h3>
    <div class="close" data-dismiss="modal" aria-label="Close" style="cursor: pointer;">
        <i class="bi bi-x-circle" aria-hidden="true" style="color: white; font-size: 1.5rem;"></i>
    </div>
</div>

                <div class="container">

                    <form action="adjust_done.php" method="post" role="form">
                        <div class="mt-3 mb-3">
                            <input type="hidden" class="form-control" name="hidden_id" placeholder="Title">
                        </div>


                        <div class="mt-3 mb-3 ms-4 me-4">
                            <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="3"></textarea>
                        </div>

                        <div class="mt-4 mb-4 ms-4 me-4">
                            <button type="submit" class="form-control mt-3 mb-3" style="background-color:#0dcaf0; color:white">Submit</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Končí modal -->



</body>

</html>