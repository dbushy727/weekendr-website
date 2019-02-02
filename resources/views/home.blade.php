<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel='shortcut icon' type='image/x-icon' href='images/logo.png' />
        <title>Weekendr</title>
        <!-- Custom Icons -->
        <link rel="stylesheet" href="/css/fontawesome-free/css/all.min.css">
        <link href="/css/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <div id="app">

            <!-- Header -->
            <div class="main-logo">
                <a href="/">
                    <img class="logo" src="/images/new-logo-big.png">
                </a>
                <span class="pull-right">Weekendr</span>
            </div>

            <menu-component></menu-component>

            <masthead-component></masthead-component>

            <how-it-works-component></how-it-works-component>

            <why-choose-component></why-choose-component>

            <sign-up-component></sign-up-component>

            <travel-tips-component></travel-tips-component>

            <past-deals-component></past-deals-component>

            <map-component></map-component>
            <!-- Footer -->
            <footer class="footer text-center">
                <div class="container">
                    <ul class="list-inline mb-5">
                        <li class="list-inline-item">
                            <a class="social-link bg-warning rounded-circle text-dark mr-3" href="https://www.facebook.com/Weekendrio-2408962005842154/">
                                <i class="icon-social-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-link bg-warning rounded-circle text-dark mr-3" href="https://www.instagram.com/weekendr.io/">
                                <i class="icon-social-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-link bg-warning rounded-circle text-dark" href="mailto:danny@weekendr.io">
                                <i class="icon-envelope"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-0">Copyright &copy; Weekendr.io {{ Carbon\Carbon::now()->format('Y')}}</p>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
        </div>
        <!-- Bootstrap core JavaScript -->
        <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
        <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
        <!-- Plugin JavaScript -->
        <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
        <!-- Custom scripts for this template -->
        <script src="/js/app.js"></script>
    </body>
</html>