
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tracking Package ::: <?php echo $tracking_id; ?> </title>
        <link href="//fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
        <!-- //google-fonts -->
        <!-- Template CSS Style link -->
        <link rel="stylesheet" href="assets/css/style-starter.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    </head>
<body>
    
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

    <div class="container track-page">
        <div class="row">
            <div class="col-md-4" style="text-align: justify; margin-top: 10px; ">
                <h6 style="color: black; font-weight: bold;;">SCHEDULED DELIVERY DATE</h6>
                <P><b><?php echo mydate($row['delivery_date']); ?></b></P>
            </div>
            <div class="col-md-4" style="text-align: justify; margin-top: 10px; ">
                <h6 style="color: black; font-weight: bold;;">DELIVERY STATUS</h6>
                <p><?php echo package_status($shipment_token); ?></p>
            </div>
            <div class="col-md-4" style="text-align: justify; margin-top: 10px; ">
                <h6 style="color: black; font-weight: bold;;">TRACKING ID</h6>
                <p>123456789012</p>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-md-2">
                    <button class="track-page-btn"><b>ON TIME</b></button>
                </div>
            </div>
            <div style="margin-top: 30px;">
                <span style="margin: 0px;"><b>Submit your email to get more updates on the shipment</b></span>
                <br>
                <br>
                <div class="row update-mail">
                    <div class="col-md-8" style="margin-top: 0px;">
                        <input type="email" name="" id="" placeholder="Enter your email">
                        <a href=""><button class="btn-track">Submit</button></a>
                        <br>
                        <br>
                        <!-- <a href="" ><h5>MORE OPTIONS</h5></a> -->
                        <br>
                        <br>
                        <div class="custom-dropdown">
                            <button class="dropdown-button"><b>Alerts(1)</b></button>
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-option">No scheduled delivery date available at this time.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="roadmap">
                            <div class="roadmap-item">
                                <h3>FROM</h3>
                                <p><?php echo $row['s_name']; ?>, <?php echo $row['s_address']; ?>
                                </p>
                                <div class="dot"></div>
                            </div>
                            <div class="roadmap-item">
                                <h3>WE HAVE YOUR PACKAGE</h3>
                                <p><?php echo $row['origin']; ?>
                                </p>
                           
                                <div class="dot"></div>
                            </div>
                            <div class="roadmap-item">
                                <h3>IN TRANSIT</h3>
                                <p><?php echo package_status($shipment_token, 'In Transit'); ?>
                                </p>
                                <div class="dot"></div>
                            </div>
                            <div class="roadmap-item">
                                <h3>PARCEL DELIVERED</h3>
                                <p><?php echo package_status($shipment_token, 'Parcel Delivered'); ?>
                                </p>
                                <div class="dot"></div>
                            </div>
                            <div class="roadmap-item">
                                <h3>TO</h3>
                                <p><?php echo $row['r_name']; ?>, <?php echo $row['r_address']; ?>
                                </p>
                                <div class="dot"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <hr style="background-color: #ff4c4c; border: 1px solid #ff4c4c;">
    </div>
        <div class="container shipment" >
            <h3><b>Shipment Overview</b></h3>
            <br><br>
            <h5 style="margin-bottom: 7px;">Shipment Overview</h5>
            <div class="container">
                <div class="row shipment-txt" style="background-color: #ff4c4c;  width: 100%; padding: 6px;">
                    <div class="col-md-4">
                        <p style="color: #fff;"><b>TRACKING NUMBER</b></p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <p style="color: #fff;">123456789012</p>
                    </div>
                </div>
                <div class="row shipment-txt" style=" width: 100%; padding: 6px;">
                    <div class="col-md-4">
                        <p><b>SHIP DATE</b></p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <p>8/1/22</p>
                    </div>
                </div>
                <div class="row shipment-txt" style="background-color: #ff4c4c;  width: 100%; padding: 6px;">
                    <div class="col-md-4">
                        <p style="color: #fff;"><b>SCHEDULED DELIVERY</b></p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <p style="color: #fff;">Pending</p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <h5 style="margin-bottom: 7px;">Services</h5>
         
            <div class="container">
                <div class="row shipment-txt" style="background-color: #ff4c4c;  width: 100%; padding: 6px;">
                    <div class="col-md-4">
                        <p style="color: #fff;"><b>SERVICE</b></p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <p style="color: #fff;">FedEx SmartPost</p>
                    </div>
                </div>
                <div class="row shipment-txt" style=" width: 100%; padding: 6px;">
                    <div class="col-md-4">
                        <p><b>TERMS</b></p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <p>Shipper</p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <h5 style="margin-bottom: 7px;">Package details</h5>
          
            <div class="container">
                <div class="row shipment-txt" style="background-color: #ff4c4c;  width: 100%; padding: 6px;">
                    <div class="col-md-4">
                        <p style="color: #fff;"><b>TOTAL PIECES</b></p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <p style="color: #fff;">1</p>
                    </div>
                </div>
                <div class="row shipment-txt" style=" width: 100%; padding: 6px;">
                    <div class="col-md-4">
                        <p><b>PACKAGING</b></p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <p>Package</p>
                    </div>
                </div>
                <br>
                
            </div>
            <hr style="background-color: #ff4c4c; border: 1px solid #ff4c4c; width: 100%;">
            <div class="container travel-hist">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Travel History</h3>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4 ">
                        <select name="date/time" id="date/time"> 
                            <option value="title"><b>SORT BY DATE/TIME</b></option>
                            <option value="ascend">Ascending</option> 
                            <option value="descend">Descending</option> 
                        </select>         
                    </div>
                    <div class="col-md-4 ">
                        <select name="date/time" id="date/time"> 
                            <option value="title"><b>TIME ZONE</b></option>
                            <option value="local-scan">Local Scan Time</option> 
                            <option value="origin">Origin</option> 
                            <option value="others">Others</option>
                        </select>         
                    </div>
                </div>
            </div>
            <br>
            <hr style="border: 1px solid black;">
            <div class="row shipment-txt" style=" width: 100%; padding: 6px;">
                <div class="col-md-4" style="text-align: left;">
                    <p>Tuesday, 4/12/22</p>
                    
                </div>
                <div class="col-md-4 roadmap-item">
                    <p ><b>5:40am</b></p>
                    <p>At local FedEx facility</p>
                                    
                    <div class="dot"></div>
                </div>
                <div class="col-md-4">
                    <p>BRIDGEPORT, WV</p>
                </div>
            </div>
            <hr style="border: 1px solid black;">

            <div class="row shipment-txt" style=" width: 100%; padding: 6px;">
                <div class="col-md-4" style="text-align: left;">
                    <p>Tuesday, 4/12/22</p>
                    
                </div>
                <div class="col-md-4 roadmap-item">
                    <p ><b>5:54 AM</b></p>
                    <p>At local FedEx facility</p>
                                    
                    <div class="dot"></div>
                </div>
                <div class="col-md-4">
                    <p>BRIDGEPORT, WV</p>
                </div>
            </div>
            <hr style="border: 1px solid black;">

            <div class="row shipment-txt" style=" width: 100%; padding: 6px;">
                <div class="col-md-4" style="text-align: left;">
                    <p>Tuesday, 5/31/22</p>
                    
                </div>
                <div class="col-md-4 roadmap-item">
                    <p ><b>7:52 AM</b></p>
                    <p>Arrived at FedEx location</p>
                                    
                    <div class="dot"></div>
                </div>
                <div class="col-md-4">
                    <p>INDEPENDENCE, KY</p>
                </div>
            </div>
            <hr style="border: 1px solid black;">
            <br><br>

            <h2 style="font-weight: 200;">Watch List</h2><br>
            <p style="text-align: center;">You do not currently have any Watch list shipments.</p>
        </div>
        

        <!-- footer -->
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
        <!-- //footer -->
        
    

    <script>
        // JavaScript to toggle the dropdown content
        const button = document.querySelector(".dropdown-button");
        const dropdown = document.querySelector(".dropdown-content");

        button.addEventListener("click", function() {
            dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
        });

        // Close the dropdown if the user clicks outside of it
        window.addEventListener("click", function(event) {
            if (!event.target.matches(".dropdown-button")) {
                dropdown.style.display = "none";
            }
        });
    </script>
</body>
</html>