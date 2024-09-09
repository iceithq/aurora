<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Aurora
    </title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <style>
        html {
            /* font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"; */
            font-size: 0.8rem;
        }

        table {
            font-size: 1rem;
        }

        body {
            font-family: "Inter", sans-serif !important;
            font-optical-sizing: auto;
            /* font-weight: <weight>; */
            font-style: normal;
            font-variation-settings:
                "slnt" 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif;
            font-optical-sizing: auto;
            font-weight: bolder;
            font-style: normal;
        }

        #content {
            margin-bottom: 300px;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="{{ asset('images/logo.png') }}" height="32" class="navbar-brand">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        🏠 Home <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> ℹ️ About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">🛠️ Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">📞 Contact</a>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        🔐 Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                        <!--              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Logout</a>-->
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <!-- Company Information -->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Qlinix</h5>
                    <p>
                        Qlinix is a comprehensive clinic management system designed to streamline your operations and
                        enhance patient care.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Quick Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#!">Home</a></li>
                        <li><a href="#!">About</a></li>
                        <li><a href="#!">Services</a></li>
                        <li><a href="#!">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li>📧 sales@iceithq.com</li>
                        <li>☎️ +639567719415</li>
                        <li>📌 IT Park, Cebu City 6000 PH</li>
                    </ul>
                </div>

                <!-- Social Media Links -->
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Follow Us</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://fb.com/iceithq" target="_blank">
                                <i class="fab fa-facebook"></i> Facebook
                            </a>
                        </li>
                        <li><a href="#!"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#!"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center p-3">
            © 2024
            Aurora
            by ICE IT Solutions. All Rights Reserved.
        </div>
    </footer>

</body>

</html>
