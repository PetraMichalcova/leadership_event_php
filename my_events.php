<?php session_start(); 
include 'personal.php';
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

    <link href="css/templatemo-leadership-event.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php#section_3">Speakers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php#section_4">Overview</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php#section_5">Pricing</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php#section_6">Venue</a>
                    </li>


                    <?php if (isset($_SESSION["ID"])) : ?>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="my_events.php">My Events</a>
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


    <?php


    echo '     <div class="container mt-5 mb-5">';

    echo '          <h3>Shopping <u class="text-info">Cart</u></h3>';
    echo '              <table class="table mb-0">';
    echo '              <thead style="background-color:#273053; color:white">';
    echo '                  <tr>';
    echo '                      <th scope="col"></th>';
    echo '                      <th scope="col">Event</th>';
    echo '                      <th scope="col">Date</th>';
    echo '                      <th scope="col">Price</th>';
    echo '                      <th scope="col">Speaker</th>';
    echo '                      <th scope="col"></th>';
    echo '                  </tr>';
    echo '              </thead>';
    echo '       <tbody>';


    echo (sizeof($shopping_cart) == 0) ? '<tr><th scope="row" class="table-primary" style="vertical-align: middle;"></th><td class="table-primary w-25" style="vertical-align: middle;"> Nothing to show </td><td class="table-primary w-25" style="vertical-align: middle;"> </td><td class="table-primary w-25" style="vertical-align: middle;"> </td><td class="table-primary w-25" style="vertical-align: middle;"> </td><td class="table-primary" style="vertical-align: middle;"> </td></tr>' : '';
    $i = 0;
    foreach ($shopping_cart as $item) {
        $i++;
        echo '      <tr>';
        echo '          <th scope="row" style="vertical-align: middle;">' . $i  . '</th>';
        echo '          <td class="w-25" style="vertical-align: middle;">' . $item->title . '</td>';
        echo '          <td class="w-25" style="vertical-align: middle;">' . $item->date . '</td>';
        echo '          <td class="w-25" style="vertical-align: middle;">' . $item->price . ' €</td>';
        echo '          <td class="w-25" style="vertical-align: middle;"> <img src="images/avatar/' . $item->img . '" class="img-fluid avatar-image" alt=""></td>';
        echo '          <td class="w-25" style="vertical-align: middle;"><a href="remove.php?' . http_build_query(['shopping_cart_item_id' => $item->shopping_cart_id]) . '"><i class="bi bi-x-circle"></i></a></td>';
        echo '      </tr>';
    }
    $i = 0;

    echo '      </tbody>';
    echo '  </table>';
    if (sizeof($shopping_cart) > 0) {
        echo ' <a class="custom-btn custom-border-btn btn custom-link mt-3 me-3" href="buy.php" style="float:right">Buy</a></td>';
    }
    echo ' </div>';

    ?>

    <div class="container mt-5">

        <h3>Yet <u class="text-info">Bought</u></h3>
        <table class="table">
            <thead style="background-color:#273053; color:white">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Event</th>
                    <th scope="col">Price</th>
                    <th scope="col">Speaker</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                $i = 0;
                echo '       <tr>';
                echo (sizeof($events_past) == 0) ? '<th scope="row" class="table-primary" style="vertical-align: middle;"></th><td class="table-primary w-25" style="vertical-align: middle;"> Nothing to show </td><td class="table-primary w-25" style="vertical-align: middle;"> </td><td class="table-primary w-25" style="vertical-align: middle;"> </td><td class="table-primary w-25" style="vertical-align: middle;"> </td>' : '';

                foreach ($events_past as $event) {
                    $i++;

                    echo '       <th scope="row" style="vertical-align: middle;">' . $i  . '</th>';
                    echo '          <td  class="w-25" style="vertical-align: middle;">' . $event->title . '</td>';
                    echo '       <td  class="w-25" style="vertical-align: middle;">' . $event->price . ' €</td>';
                    echo '       <td class="w-25" style="vertical-align: middle;"> <img src="images/avatar/' . $event->img . '" class="img-fluid avatar-image" alt=""></td>';

                    if ($event->happened == '0') {
                        echo '   <td class="w-50" style="vertical-align: middle;">' . $event->date . '</td>';
                    } else {
                        echo '   <td class="w-25" style="vertical-align: middle;"><i class="bi bi-check-circle"></i></td>';
                    }


                    echo '  </tr>';
                }
                $i = 0;
                ?>

            </tbody>
        </table>
    </div>