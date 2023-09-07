<?php

// session_start ();

// if(!isset($_SESSION['trans_valid_user']))
// {
//     include('index.php');
//     exit;
// }


?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="noindex,nofollow">
    <title>Add Shipment</title>
   
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="images/logo.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="" alt="" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Admin</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <?php include('side-nav.php'); ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
           
                <div class="page-breadcrumb bg-white">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Enter Shipping Info</h4>
                        </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <div class="d-md-flex">
                                <ol class="breadcrumb ms-auto">
                                    <li><a href="#" class="fw-normal"></a></li>
                                </ol>
                                <!-- <a href="proc-add-question.php" target=""
                                    class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Save
                                    </a> -->
                            </div>
                        </div>
                    </div>
                </div>
           
                <!-- /.col-lg-12 -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <!-- <div class="container-fluid">
                <div class="container">
                    <textarea name="message" placeholder="Enter Question">
                </div>
            </div> -->
            <div class="container-fluid">
                <?php if($error) echo '<div class="alert alert-danger">'.$error.'</div>' ;?>
                <?php if($success) echo '<div class="alert alert-success">'.$success.'</div>';?>
               
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row white-box">
                    <div class="col-sm-6">
                            <h4 class="page-title">Sender Details</h4> <br>
                        <div class="">
                            <!-- <h3 class="box-title">Basic Table</h3> -->
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                              <div class="row">

                              <div class="col-md-7">
                              <form action="proc-add-customer.php" method="post"  enctype="multipart/form-data">
                              
                              <div class="img-text">
                              <label>Sender Name</label>
                              <input type="text" placeholder="Sender name" name="firstname" class="form-control"  value="<?php echo $firstname  ;?>" required> <br>
                                </div>

                              <div class="img-text">
                              <label>Address</label>
                              <input type="text" placeholder="Sender address" name="lastname" class="form-control"  value="<?php echo $lastname  ;?>" required>
                              <br>
                                </div>

                              <div class="img-text">
                              <label>Phone</label>
                              <input type="text" placeholder="Sender phone" name="email" class="form-control"  value="<?php echo $email  ;?>" required>
                              <br>
                                </div>

                              <div class="img-text">
                              <label>ID</label>
                              <input type="text" placeholder="Sender ID" name="phone" class="form-control"  value="<?php echo $phone  ;?>" required>
                              <br>
                                </div>


                            <h4 class="page-title">Shipping Information</h4> <br>

                                <div class="img-text">
                                    <label>Payment Mode</label>
                                    <select name="title" class="form-control">
                                        <option value="N/A">Choose one</option>
                                        <option>Paid</option>
                                        <option>To pay</option>
                                        <option>Cash on delivery</option>
                                        <option>Payment incomplete</option>
                                    </select>
                                    <br>
                                </div>

                                
                              <div class="img-text">
                                <label>Product Type</label>
                                <input type="text" placeholder="Product type" name="phone" class="form-control"  value="<?php echo $phone  ;?>" required>
                                <br>
                              </div>

                                <div class="img-text">
                                    <label>Service (Mode)</label>
                                    <select name="title" class="form-control">
                                        <option value="N/A">Choose one</option>
                                        <option>Courier</option>
                                        <option>Express</option>
                                        <option>High Mode</option>
                                        <option>Ship</option>
                                    </select>
                                    <br>
                                </div>


                                
                              <div class="img-text">
                                <label>Insurance of the Shipment</label>
                                <input type="text" placeholder="Shipment insurance" name="phone" class="form-control"  value="<?php echo $phone  ;?>" required>
                                <br>
                              </div>



                              <div class="img-text">
                                    <label>Office of Origin</label>
                                    <select name="title" class="form-control">
                                        <option value="N/A">Trans Global Express Holland</option>
                                  
                                    </select>
                                    <br>
                                </div>
                                
                                <div class="img-text">
                                    <label>Destination Office</label>
                                    <input type="text" placeholder="Destination office" name="phone" class="form-control"  value="<?php echo $phone  ;?>" required>
                                    <br>
                                </div>
                                
                                <div class="img-text">
                                    <label>Quantity</label>
                                    <input type="text" placeholder="Quantity" name="phone" class="form-control"  value="<?php echo $phone  ;?>" required>
                                    <br>
                                </div>
                                
                                <div class="img-text">
                                    <label>Weight (KG)</label>
                                    <input type="text" placeholder="Weight" name="phone" class="form-control"  value="<?php echo $phone  ;?>" required>
                                    <br>
                                </div>
                                
                                <div class="img-text">
                                    <label>$ Variable (KG)</label>
                                    <input type="text" placeholder="Variable" name="phone" class="form-control"  value="<?php echo $phone  ;?>" required>
                                    <br>
                                </div>
                                
                                <div class="img-text">
                                    <label>Freight Price</label>
                                    <input type="text" placeholder="Freight price" name="phone" class="form-control"  value="<?php echo $phone  ;?>" required>
                                    <br>
                                </div>
                                
                                <div class="img-text">
                                    <label>Subtotal Shipping</label>
                                    <input type="text" placeholder="Subtotal shipping" name="phone" class="form-control"  value="<?php echo $phone  ;?>" required>
                                    <br>
                                </div>
                                
                                <div class="img-text">
                                    <label>Shipping Details</label>
                                    <textarea name="" placeholder="Enter shipping details" id="" cols="30" rows="10"></textarea>
                                    <br>
                                </div>
                            
                                <div class="img-text" style="margin-top: 40px;">
                                <input class="btn btn-success" style=" margin-bottom: 10px;"  type="submit" value="Save Tracking"> 
                                </div><br>
                                    
                                </form>

                              </div>

                              </div>
                            </div>
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                            <h4 class="page-title">Recipient Details</h4> <br>
                        <div class="">
                            <!-- <h3 class="box-title">Basic Table</h3> -->
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                              <div class="row">

                              <div class="col-md-7">
                              <form action="proc-add-customer.php" method="post"  enctype="multipart/form-data">
                              
                              <div class="img-text">
                              <label>Recipient Name</label>
                              <input type="text" placeholder="Recipient name" name="firstname" class="form-control"  value="<?php echo $firstname  ;?>" required>
                            <br>
                                </div>

                                <div class="img-text">
                              <label>Address</label>
                              <input type="text" placeholder="Recipient address" name="lastname" class="form-control"  value="<?php echo $lastname  ;?>" required>
                              <br>
                                </div>
                              <div class="img-text">
                              <label>Phone</label>
                              <input type="text" placeholder="Recipient phone" name="email" class="form-control"  value="<?php echo $email  ;?>" required>
                              <br>
                                </div>
                              <div class="img-text">
                              <label>ID</label>
                              <input type="text" placeholder="Recipient ID" name="phone" class="form-control"  value="<?php echo $phone  ;?>" required>
                              <br>
                                </div>

                              <div class="img-text">
                              <label>Email</label>
                              <input type="text" placeholder="Recipient email" name="email" class="form-control"  value="<?php echo $email  ;?>" required>
                              <br>
                                </div>
                              <div class="img-text">
                              <label>Tracking Number</label>
                              <input type="text" placeholder="Tracking number" name="phone" class="form-control"  value="<?php echo $phone  ;?>" required>
                              <br>
                                </div>
                              <div class="img-text">
                              <label>Collection Date </label>
                              <input type="text" onfocus="(this.type='date')" placeholder="Collection date" name="date_birth" class="form-control"  value="<?php echo $date_birth  ;?>">
                              <br>
                                </div>
                              
                                <div class="img-text">
                              <label>Status</label>
                             <select name="title" class="form-control">
                                <option value="N/A">Select Status</option>
                                <option>In Transit</option>
                                <option>Parcel Received</option>
                                <option>Parcel Shipped</option>
                                <option>Pending</option>
                                <option>On Hold</option>
                                <option>Office Verification</option>
                                <option>Awaiting Payment</option>
                                <option>Parcel in Transit to Destination</option>
                             </select>
                            <br>
                                </div>
                              

                                <div class="img-text">
                              <label>Schedule Delivery </label>
                              <input type="text" onfocus="(this.type='date')" placeholder="Delivery date" name="date_birth" class="form-control"  value="<?php echo $date_birth  ;?>">
                              <br>
                                </div>

                            <div class="img-text">
                                <label>Delivery Completion % </label>
                                <input type="text" placeholder="15, 30, 50, 60, 80.... depending" name="date_birth" class="form-control"  value="<?php echo $date_birth  ;?>">
                                <br>
                            </div>
                            
                                <div class="img-text" style="margin-top: 40px;">
                                <input class="btn btn-success" style=" margin-bottom: 10px;"  type="submit" value="Save Recipient Tracking"> 
                                </div><br>
                                    
                                </form>

                              </div>

                              </div>
                         </div>
                                
                                    <!-- <thead>
                                   
                                        <tr>
                                            <td>6</td>
                                            <td>Nigam</td>
                                            <td>Eichmann</td>
                                            <td>@Sonu</td>
                                            <td>supporter</td>
                                            <td>supporter</td>
                                            <td>supporter</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

           

            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Aledoy brought to you by <a
                    href="https://www.aledoy.com/" target="_#">Aledoy.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>