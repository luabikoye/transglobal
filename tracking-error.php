
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tracking_id; ?> - Not found</title>
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
</head>
<body style="overflow-x: hidden;">

    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand" href="index.html">
                       <img src="assets/images/Trans-Global.png" alt="" style="width: 100px; height: 60px;">
                    </a>
                </h1>
                <!-- if logo is image enable this   
                <a class="navbar-brand" href="#index.html">
                    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li >
                            <a class="nav-link" href="index.html">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <!-- <a class="btn btn-style  " href="">
                            Tracking</a> -->
                        <li class="nav-item active"> <span class="sr-only">(current)</span>
                            <input type="text" class="search-input" id="searchInput" placeholder="Enter tracking ID">
                            <button class="search-icon" id="searchButton">Search</button>
                        </li>
                    </ul>
                </div>
                <style>
                    .search-input {
                        padding: 5px;
                        border-left: none;
                        border-top: none;
                        border-right: none;
                        border-bottom: 1px solid black;
                        border-bottom-left-radius: 5px;
                        margin-left: auto;
                    }

                    /* Style for the search icon */
                    .search-icon {
                        background-color: #ff4c4c;
                        color: #fff;
                        border: none;
                        border-radius: 3px;
                        border-bottom-left-radius: 0px;
                        padding: 5px 10px;
                        cursor: pointer;
                    }
                    .search-input::placeholder{
                        color: #ff4c4c;
                        font-size: smaller;
                    }
                </style>
                <!-- toggle switch for light and dark theme -->
                <!-- <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div> -->
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <div class="track-banner" style="margin-top: 100px;">
        <div class="row">
         <div class="col-md-4"></div>
         <div class="col-md-4" style="text-align: center;">
            <p><img src="assets/images/caution-icon.png" alt="" class="img-fluid" style='left: 50%;'></p>
         </div>
         <div class="col-md-4"></div>
        </div>
        <h2>The Tracking ID <?php echo $tracking_id; ?> is not valid. <br><br><br><a href="javascript:history.back();">Click here.</a> please check again</h2> <br><br> <br><br> <br><br>
    </div>


    <footer class="w3l-footer-22 py-5">
        <div class="container py-md-5 py-4">
            <div class="row sub-columns pt-lg-2">
                <div class="col-lg-4 col-sm-6 sub-one-left">
                    <h6>About </h6>
                    <p>We connect continents and delivering dreams across. Our goal is to unite the world through seamless logistics solutions</p>
                    <div class="columns-2">
                        <ul class="social">
                            <li><a href="#facebook" title="facebook"><span class="fab fa-facebook-f"
                                        aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#linkedin" title="linkedin"><span class="fab fa-linkedin-in"
                                        aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#twitter" title="twitter"><span class="fab fa-twitter"
                                        aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#google" title="google"><span class="fab fa-google-plus-g"
                                        aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#instagram" title="instagram"><span class="fab fa-instagram"
                                        aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-sm-0 mt-5">
                    <h6>Our Services</h6>
                    <ul>
                        <li><a href="#"><span class="fas fa-angle-right mr-2"></span>Residential Moves</a>
                        </li>
                        <li><a href="#"><span class="fas fa-angle-right mr-2"></span>Corporate
                                Relocation</a>
                        </li>
                        <li><a href="#"><span class="fas fa-angle-right mr-2"></span>Household Moving</a>
                        </li>
                        <li><a href="#"><span class="fas fa-angle-right mr-2"></span>Commercial Movers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 sub-two-right mt-lg-0 mt-sm-5 mt-4">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href="index.html"><span class="fas fa-angle-right mr-2"></span>Home</a></li>
                        <li><a href="about.html"><span class="fas fa-angle-right mr-2"></span>About Us</a>
                        </li>
                        <li><a href="services.html"><span class="fas fa-angle-right mr-2"></span>Our Services</a>
                        </li>
                        <li><a href="contact.html"><span class="fas fa-angle-right mr-2"></span>Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-lg-0 mt-sm-5 mt-4">
                    <h6>Help & Support</h6>
                    <ul>
                        <li><a href="#live"><span class="fas fa-angle-right mr-2"></span>Live
                                Chart</a></li>
                        <li><a href="#faq"><span class="fas fa-angle-right mr-2"></span>Faq</a>
                        </li>
                        <li><a href="#support"><span class="fas fa-angle-right mr-2"></span>Support</a>
                        </li>
                        <li><a href="#terms"><span class="fas fa-angle-right mr-2"></span>Terms
                                of Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright-footer text-center mt-4">
            <div class="container">
                <div class="columns">
                    <p>&copy; 2023 Courier | All rights reserved.
                    </p>
                </div>
            </div>
        </div>
        <!-- //copyright -->
    </footer>

</body>
</html>

</body>
</html>