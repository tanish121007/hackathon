<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Explore Indian Culture and Heritage</title>
    <style>
        body {
            background-color: #f4f4f4;
            color: #333;
            font-family: Arial, sans-serif;
        }
        header {
            background: #004d00;
            color: white;
            padding: 1rem 0;
            width: 100%;
            position: relative;
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 1rem;
        }
        .header-container h1 {
            display: flex;
            align-items: center;
            margin: 0;
        }
        .navbar {
            margin: 0;
        }
        .navbar-nav {
            display: flex;
            flex-direction: row;
            list-style: none;
        }
        .navbar-nav .nav-item {
            margin-left: 2rem;
        }
        .navbar-nav .nav-link {
            color: #e9ecef;
            text-decoration: none;
        }
        .navbar-nav .nav-link.active {
            font-weight: bold;
        }
        .navbar-nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .navbar-nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .navbar-nav a.active {
            background-color: #04AA6D;
            color: white;
        }
        .navbar-nav .icon {
            display: none;
        }
        /* Dropdown Styles */
        .dropdown-menu {
            background-color: black;
        }
        .dropdown-menu .dropdown-item {
            color: white;
        }
        .dropdown-menu .dropdown-item:hover {
            background-color: #444;
        }
        @media screen and (max-width: 600px) {
            .navbar-nav a:not(:first-child) {
                display: none;
            }
            .navbar-nav a.icon {
                float: right;
                display: block;
            }
        }
        @media screen and (max-width: 600px) {
            .navbar-nav.responsive {
                position: relative;
            }
            .navbar-nav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .navbar-nav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
        .section {
            padding: 2rem 0;
        }
        .section:nth-of-type(even) {
            background-color: #e9ecef;
        }
        .card-img-top {
            height: 180px;
            object-fit: cover;
        }
        footer {
            background-color: #004d00;
            color: white;
            text-align: center;
            padding: 1rem;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="header-container">
            <h1 class="m-0">
                <img src="https://via.placeholder.com/50" alt="Logo">
                Explore Indian Culture and Heritage
            </h1>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <!-- Add more links as needed -->
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
