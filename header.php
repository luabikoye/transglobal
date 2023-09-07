 <!--header-->
 <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand" href="index.php">
                       <img src="assets/images/Trans-Global.png" alt="" style="width: 100px; height: 60px;">
                    </a>
                </h1>
                <!-- if logo is image enable this   
                <a class="navbar-brand" href="#index.php">
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
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <!-- <a class="btn btn-style  " href="">
                            Tracking</a> -->
                        <li style="margin-left: 30px;">
                        <form action="tracking-package.php" method="post">
                            <input type="text" class="search-input" id="searchInput" name="tracking_id" placeholder="Enter tracking ID" required>
                            <button class="search-icon" id="searchButton" type="submit">Track Package</button>
                        
                        </form>  
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
    <!--//header-->