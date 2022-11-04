<?php
session_start();
$user_id = $_SESSION['id'];
$status = $_SESSION['status'];
$uname = $_SESSION['name'];
$connect=$db =mysqli_connect('localhost','root','','ccms1')
or die("connection Failed");
  $query="select * from user";
  $result=mysqli_query($connect,$query);
  $count=mysqli_fetch_assoc($result);
  $toal_users = mysqli_num_rows($result);


    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['change']))
    {
        func();
    }
    function func()
    {
             
    }


//   $query="select * from cases";
//   $result1=mysqli_query($connect,$query);
//   $count1=mysqli_fetch_assoc($result1);
//   $toal_cases = mysqli_num_rows($result1);

//   $query="select * from client";
//   $result2=mysqli_query($connect,$query);
//   $count2=mysqli_fetch_assoc($result2);
//   $toal_clients = mysqli_num_rows($result2);

//   $query="select * from case_registration";
//   $result3=mysqli_query($connect,$query);
//   $count3=mysqli_fetch_assoc($result3);
//   $toal_cases_registered = mysqli_num_rows($result3);

//   $query="select * from user";
//   $result4=mysqli_query($connect,$query);
 ?>
<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CCMS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
       <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../admin.php">CCMS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $uname;?> </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="../../../logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="../admin.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <!-- <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="admin.php">E Commerce Dashboard</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product.html">Product List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-finance.html">Finance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-sales.html">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div> -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Case Management</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="civil_registry.php">Civil Registry<span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="pages/general.html">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/carousel.html">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/listgroup.html">List Group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/typography.html">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/accordions.html">Accordions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/tabs.html">Tabs</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-c3.html">C3 Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-chartist.html">Chartist Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-charts.html">Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-morris.html">Morris</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-sparkline.html">Sparkline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-gauge.html">Guage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item "> -->
                                <a class="nav-link" href="#"><i class="fab fa-fw fa-wpforms"></i>Manage User</a>
                                <!-- <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/form-elements.html">Form Elements</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/form-validation.html">Parsely Validations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/multiselect.html">Multiselect</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/datepicker.html">Date Picker</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/bootstrap-select.html">Bootstrap Select</a>
                                        </li>
                                    </ul>
                                </div> -->
                            <!-- </li> -->
                            <!-- <li class="nav-item"> -->
                                <!-- <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Report</a> -->
                                <!-- <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/general-table.html">General Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                        </li>
                                    </ul>
                                </div> -->
                            <!-- </li> -->
                            <!-- <li class="nav-divider">
                                Features
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/blank-page.html">Blank Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/blank-page-header.html">Blank Page Header</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/login.html">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/404-page.html">404 page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/sign-up.html">Sign up Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/forgot-password.html">Forgot Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/pricing.html">Pricing Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/timeline.html">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/calendar.html">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/civil_registry.php">Sortable/Nestable List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/widgets.html">Widgets</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/media-object.html">Media Objects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/cropper-image.html">Cropper</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/color-picker.html">Color Picker</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/inbox.html">Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/email-details.html">Email Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/message-chat.html">Message Chat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-fontawesome.html">FontAwesome Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-material.html">Material Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-simple-lineicon.html">Simpleline Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-themify.html">Themify Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-flag.html">Flag Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-weather.html">Weather Icon</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/map-google.html">Google Maps</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/map-vector.html">Vector Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                            <div id="submenu-11" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Users</h2>
                            <a class="nav-link" href="user_registration.php" style="float: right;"><button class="btn btn-space btn-primary">+ Add User</button></a>
                                                    <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Manage User</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">users</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="dashboard-short-list">
                    <div class="row">
                        <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 co-12"> -->
                            <!-- <section class="card card-fluid"> -->
                                <!-- <h5 class="card-header drag-handle"> Shortable List </h5> -->
                                <!-- <ul class="sortable-lists list-group list-group-flush list-group-bordered" id="items">
                                    <li class="list-group-item align-items-center drag-handle">
                                        <span class="drag-indicator"></span>
                                        <div> Item one </div>
                                        <div class="btn-group ml-auto">
                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                            <button class="btn btn-sm btn-outline-light">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </li>
                                </ul> -->
                            <!-- </section> -->
                        <!-- </div> -->
                        <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">First Name</th>
                                                        <th class="border-0">Middle Name</th>
                                                        <th class="border-0">Sur Name</th>
                                                        <th class="border-0">Email</th>
                                                        <th class="border-0">Phone Number</th>
                                                        <th class="border-0">Roles</th>
                                                        <th class="border-0">Username</th>
                                                        <th class="border-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php   // LOOP TILL END OF DATA
                                                    while($rows=$result->fetch_assoc())
                                                         {
                                                       ?>
                                                           <tr>
                                                        <!--FETCHING DATA FROM EACH
                                                         ROW OF EVERY COLUMN-->
                                                        <td><?php echo $rows['id'];?></td>
                                                        <td><?php echo $rows['first_name'];?></td>
                                                       <td><?php echo $rows['middle_name'];?></td>
                                                       <td><?php echo $rows['sur_name'];?></td>
                                                      <td><?php echo $rows['email'];?></td>
                                                     <td><?php echo $rows['phonenumber'];?></td>
                                                     <td><?php echo $rows['status'];?></td>
                                                    <td><?php echo $rows['username'];?></td>
                                                    <td>
                                                    <a href="register.php? id=<?php echo $rows['id'] ?>,<?php echo $rows['activation'] ?>">
                                                    <input type="submit" name="change" value="<?php 
                                                    if ($rows['activation'] == 1) {
                                                        echo 'Deactivte';
                                                    } else if ($rows['activation'] == 2){
                                                        echo 'Activate';
                                                    }
                                                    
                                                    ?>" />
                                                    </td>
                                                    </tr>
        
                                                     <?php
                                                     }
                                                     ?>
                                                    
                                                </tbody>
                                            </table>
                        <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 co-12">
                            <section class="card card-fluid">
                                <h5 class="card-header drag-handle">Shortable List </h5>
                                <ul class="sortable-lists list-group list-group-flush list-group-bordered" id="item-2">
                                    <li class="list-group-item align-items-center drag-handle">
                                        <span class="drag-indicator"></span>
                                        <div> Item one </div>
                                        <div class="btn-group ml-auto">
                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                            <button class="btn btn-sm btn-outline-light">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center drag-handle">
                                        <span class="drag-indicator"></span>
                                        <div> Item two </div>
                                        <div class="btn-group ml-auto">
                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                            <button class="btn btn-sm btn-outline-light">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center drag-handle">
                                        <span class="drag-indicator"></span>
                                        <div> Item three </div>
                                        <div class="btn-group ml-auto">
                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                            <button class="btn btn-sm btn-outline-light">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center drag-handle">
                                        <span class="drag-indicator"></span>
                                        <div>Item four </div>
                                        <div class="btn-group ml-auto">
                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                            <button class="btn btn-sm btn-outline-light">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center drag-handle">
                                        <span class="drag-indicator"></span>
                                        <div> Item five </div>
                                        <div class="btn-group ml-auto">
                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                            <button class="btn btn-sm btn-outline-light">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </section>
                        </div> -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- end shortable list  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- nestable list  -->
                    <!-- ============================================================== -->
                    <!-- <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 co-12">
                            <section class="card card-fluid">
                                <h5 class="card-header drag-handle"> Nestable List </h5>
                                <div class="dd" id="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="13">
                                            <div class="dd-handle"> <span class="drag-indicator"></span>
                                                <div> Item one</div>
                                                <div class="dd-nodrag btn-group ml-auto">
                                                    <button class="btn btn-sm btn-outline-light">Edit</button>
                                                    <button class="btn btn-sm btn-outline-light">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle"> <span class="drag-indicator"></span>
                                                <div> Item two</div>
                                                <div class="dd-nodrag btn-group ml-auto">
                                                    <button class="btn btn-sm btn-outline-light">Edit</button>
                                                    <button class="btn btn-sm btn-outline-light">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="3">
                                                    <div class="dd-handle"> <span class="drag-indicator"></span>
                                                        <div> Item three</div>
                                                        <div class="dd-nodrag btn-group ml-auto">
                                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                                            <button class="btn btn-sm btn-outline-light">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="4">
                                                    <div class="dd-handle"> <span class="drag-indicator"></span>
                                                        <div> Item four </div>
                                                        <div class="dd-nodrag btn-group ml-auto">
                                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                                            <button class="btn btn-sm btn-outline-light">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="5">
                                                    <div class="dd-handle"> <span class="drag-indicator"></span>
                                                        <div> Item five </div>
                                                        <div class="dd-nodrag btn-group ml-auto">
                                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                                            <button class="btn btn-sm btn-outline-light">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="6">
                                                            <div class="dd-handle"> <span class="drag-indicator"></span>
                                                                <div> Item six </div>
                                                                <div class="dd-nodrag btn-group ml-auto">
                                                                    <button class="btn btn-sm btn-outline-light">Edit</button>
                                                                    <button class="btn btn-sm btn-outline-light">
                                                                        <i class="far fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle"> <span class="drag-indicator"></span>
                                                                <div> Item seven </div>
                                                                <div class="dd-nodrag btn-group ml-auto">
                                                                    <button class="btn btn-sm btn-outline-light">Edit</button>
                                                                    <button class="btn btn-sm btn-outline-light">
                                                                        <i class="far fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="dd-item" data-id="8">
                                                            <div class="dd-handle"> <span class="drag-indicator"></span>
                                                                <div> Item eight </div>
                                                                <div class="dd-nodrag btn-group ml-auto">
                                                                    <button class="btn btn-sm btn-outline-light">Edit</button>
                                                                    <button class="btn btn-sm btn-outline-light">
                                                                        <i class="far fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li class="dd-item" data-id="9">
                                                    <div class="dd-handle"> <span class="drag-indicator"></span>
                                                        <div> Item nine</div>
                                                        <div class="dd-nodrag btn-group ml-auto">
                                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                                            <button class="btn btn-sm btn-outline-light">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="10">
                                                    <div class="dd-handle"> <span class="drag-indicator"></span>
                                                        <div> Item ten </div>
                                                        <div class="dd-nodrag btn-group ml-auto">
                                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                                            <button class="btn btn-sm btn-outline-light">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="dd-item" data-id="11">
                                            <div class="dd-handle"> <span class="drag-indicator"></span>
                                                <div> Item eleven </div>
                                                <div class="dd-nodrag btn-group ml-auto">
                                                    <button class="btn btn-sm btn-outline-light">Edit</button>
                                                    <button class="btn btn-sm btn-outline-light">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="12">
                                            <div class="dd-handle"> <span class="drag-indicator"></span>
                                                <div> Item twelve </div>
                                                <div class="dd-nodrag btn-group ml-auto">
                                                    <button class="btn btn-sm btn-outline-light">Edit</button>
                                                    <button class="btn btn-sm btn-outline-light">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </section>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 co-12">
                            <section class="card card-fluid">
                                <h5 class="card-header drag-handle">Nestable List </h5>
                                <div class="dd" id="nestable2">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="13">
                                            <div class="dd-handle"> <span class="drag-indicator"></span>
                                                <div> Item one </div>
                                                <div class="dd-nodrag btn-group ml-auto">
                                                    <button class="btn btn-sm btn-outline-light">Edit</button>
                                                    <button class="btn btn-sm btn-outline-light">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="14">
                                            <div class="dd-handle"> <span class="drag-indicator"></span>
                                                <div> Item two </div>
                                                <div class="dd-nodrag btn-group ml-auto">
                                                    <button class="btn btn-sm btn-outline-light">Edit</button>
                                                    <button class="btn btn-sm btn-outline-light">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="15">
                                            <div class="dd-handle"> <span class="drag-indicator"></span>
                                                <div> Item three </div>
                                                <div class="dd-nodrag btn-group ml-auto">
                                                    <button class="btn btn-sm btn-outline-light">Edit</button>
                                                    <button class="btn btn-sm btn-outline-light">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="16">
                                                    <div class="dd-handle"> <span class="drag-indicator"></span>
                                                        <div> Item four </div>
                                                        <div class="dd-nodrag btn-group ml-auto">
                                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                                            <button class="btn btn-sm btn-outline-light">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="17">
                                                    <div class="dd-handle"> <span class="drag-indicator"></span>
                                                        <div> Item five </div>
                                                        <div class="dd-nodrag btn-group ml-auto">
                                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                                            <button class="btn btn-sm btn-outline-light">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="18">
                                                    <div class="dd-handle"> <span class="drag-indicator"></span>
                                                        <div> Item six </div>
                                                        <div class="dd-nodrag btn-group ml-auto">
                                                            <button class="btn btn-sm btn-outline-light">Edit</button>
                                                            <button class="btn btn-sm btn-outline-light">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                            </section>
                        </div>
                    </div> -->
                    <!-- ============================================================== -->
                    <!-- end nestable list  -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2022 CCMS. All rights reserved. Dashboard by <a href="">KALASA</a>.
                        </div>
                        <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/shortable-nestable/Sortable.min.js"></script>
    <script src="../assets/vendor/shortable-nestable/sort-nest.js"></script>
    <script src="../assets/vendor/shortable-nestable/jquery.nestable.js"></script>
   
</body>
 
</html>