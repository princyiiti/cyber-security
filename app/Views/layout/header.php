<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Security and Cyber Law</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
         /* Navbar Styling */
         .navbar-custom {
            background-color: #003366; /* Deep blue for contrast */
            color: white;
            padding: 15px 20px;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: white;
            font-weight: bold;
            margin-right: 15px;
        }
        .navbar-custom .nav-link:hover {
            color: #00bcd4;
        }

        /* Header Section */
        .header-section {
            background-color: #007bffc9;
            color: white;
            text-align: center;
            padding: 40px 0;
            position: relative;
        }
        .header-section h1 {
            font-size: 36px;
            font-weight: bold;
        }
        .header-section img {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            height: 80px;
        }
        .header-section .left-logo {
            left: 20px;
            filter: drop-shadow(0 0 5px white); /* White shadow for better contrast */
        }
        .header-section .right-logo {
            right: 20px;
            filter: drop-shadow(0 0 5px white); /* White shadow for better contrast */
        }

        /* About Section */
        .about-section {
            background-color: #f8f9fa;
            padding: 40px;
            text-align: center;
        }
        .about-section h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        /* Footer Section */
        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 30px 0;
        }
        .footer .footer-heading {
            font-size: 18px;
            margin-bottom: 15px;
        }
        .footer a {
            color: #ffffffb3;
            text-decoration: none;
        }
        .footer a:hover {
            color: white;
        }
    </style>
</head>
<body>
    <!-- Top Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">Cyber Security & Law</a>
            <div class="ml-auto">
                <span class="mr-3">+953 012 3654 896</span>
                <span>support@iiti.ac.in</span>
            </div>
        </div>
    </nav> -->

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">Cyber Security & Law</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <div class="header-section">
        <img src="public/left-logo.png" alt="Left IIT Logo" class="left-logo">
        <h1>Cyber Security and Cyber Law</h1>
        <img src="public/right-logo.png" alt="Right IIT Logo" class="right-logo">
    </div>