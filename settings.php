<?php 
require_once('./config/AppDetails.php');
require_once('./api/connection.php');

$sql = "SELECT * FROM coins_purchase WHERE id = 0"; // Assuming you want to retrieve data for ID 0
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); // Fetch the data
    // Assign the fetched data to variables
    $firstPC = $row['firstPC'];
    $firstPCAmount = $row['firstPCAmount'];
    $secondPC = $row['secondPC'];
    $secondPCAmount = $row['secondPCAmount'];
    $thirdPC = $row['thirdPC'];
    $thirdPCAmount = $row['thirdPCAmount'];
    $fourPC = $row['fourPC'];
    $fourPCAmount = $row['fourPCAmount'];
    $fifthPC = $row['fifthPC'];
    $fifthPCAmount = $row['fifthPCAmount'];
    $sixthPC = $row['sixthPC'];
    $sixthPCAmount = $row['sixthPCAmount'];
    $seventhPC = $row['seventhPC'];
    $seventhPCAmount = $row['seventhPCAmount'];
} else {
    // Handle the case where data with ID 0 does not exist
}

if (isset($_POST['savePC'])) {
    // Retrieve form data
    $firstPC = $_POST['firstPC'];
    $firstPCAmount = $_POST['firstPCAmount'];
    $secondPC = $_POST['secondPC'];
    $secondPCAmount = $_POST['secondPCAmount'];
    $thirdPC = $_POST['thirdPC'];
    $thirdPCAmount = $_POST['thirdPCAmount'];
    $fourPC = $_POST['fourPC'];
    $fourPCAmount = $_POST['fourPCAmount'];
    $fifthPC = $_POST['fifthPC'];
    $fifthPCAmount = $_POST['fifthPCAmount'];
    $sixthPC = $_POST['sixthPC'];
    $sixthPCAmount = $_POST['sixthPCAmount'];
    $seventhPC = $_POST['seventhPC'];
    $seventhPCAmount = $_POST['seventhPCAmount'];

    // SQL insert statement
    if ($result->num_rows > 0) {
        // Data with ID 0 already exists, perform an update
        $sqlUpdate = "UPDATE coins_purchase SET
            firstPC = '$firstPC',
            firstPCAmount = '$firstPCAmount',
            secondPC = '$secondPC',
            secondPCAmount = '$secondPCAmount',
            thirdPC = '$thirdPC',
            thirdPCAmount = '$thirdPCAmount',
            fourPC = '$fourPC',
            fourPCAmount = '$fourPCAmount',
            fifthPC = '$fifthPC',
            fifthPCAmount = '$fifthPCAmount',
            sixthPC = '$sixthPC',
            sixthPCAmount = '$sixthPCAmount',
            seventhPC = '$seventhPC',
            seventhPCAmount = '$seventhPCAmount'
            WHERE id = 0";

        if ($conn->query($sqlUpdate) === TRUE) {
            echo "Data updated successfully!";
        } else {
            echo "Error updating data: " . $conn->error;
        }
    } else {
        // Data with ID 0 does not exist, perform an insert
        $sqlInsert = "INSERT INTO coins_purchase (id, firstPC, firstPCAmount, secondPC, secondPCAmount, thirdPC, thirdPCAmount, fourPC, fourPCAmount, fifthPC, fifthPCAmount, sixthPC, sixthPCAmount, seventhPC, seventhPCAmount)
            VALUES (0, '$firstPC', '$firstPCAmount', '$secondPC', '$secondPCAmount', '$thirdPC', '$thirdPCAmount', '$fourPC', '$fourPCAmount', '$fifthPC', '$fifthPCAmount', '$sixthPC', '$sixthPCAmount', '$seventhPC', '$seventhPCAmount')";

        if ($conn->query($sqlInsert) === TRUE) {
            echo "Data inserted successfully!";
        } else {
            echo "Error inserting data: " . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $WEB_TITLE ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<style>
     .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
</style>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li><a class="#" href="./dashboard.php" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        
                    </li>

                    <li><a class="#" href="./live-users.php" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Live Users</span></a>
                        
                    </li>

                    <li><a class="#" href="./users.php" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Users</span></a>
                        
                    </li>

                    <li><a class="#" href="./country.php" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Country</span></a>
                        
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Gifts</span></a>

                        <ul aria-expanded="false">
                        <li><a href="./category.php">Category</a></li>
                            </li>
                            <li><a href="./gift.php">Gift</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Effects</span></a>
                                <ul aria-expanded="false">
                            <li><a href="./emoji.php">Emoji</a></li>
                            </li>
                            <li><a href="./sticker.php">Stickers</a></li>
                        </ul>
                    </li>

                    <li><a class="#" href="./point-management.php" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Point Management</span></a>
                        
                    </li>

                    <li><a class="#" href="./point-info.php" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Point Information</span></a>
                    
                    </li>

                    <li><a class="#" href="./payment-request.php" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Payment Request</span></a>
                        
                    </li>

                    <li><a class="#" href="./advertisement.php" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Advertisement</span></a>
                        
                    </li>

                    <li><a class="#" href="./settings.php" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Settings</span></a>
                        
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Profile</span></a>
                                <ul aria-expanded="false">
                            <li><a href="./all-user.php">All Users</a></li>
                            </li>
                            <li><a href="./add-user.php">Add User</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hey, welcome back!</h4>
                            <p class="mb-0">To Your Starline App Management Software</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">App Settings</a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                Settings
                            </div>
                            <div class="card-body">
                                <div class="basic-elements">
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="YAuQ6qz0oj9esjoXN2VXRiEF8NXuPM6OYBQvpwLA">                                        <input type="hidden" name="device" value="web">
                                        <input type="hidden" name="set_id" value="1">

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Signup Bonus</label>
                                                    <input type="text" name="signup_coins" class="form-control" placeholder="Coins">
                                                    <label>Referral Bonus</label>
                                                    <input type="text" name="refer_percent" class="form-control" placeholder="Percentage> Ex. 10">
                                                    <label>Duration</label>
                                                    <input type="text" name="refer_time" class="form-control" placeholder="Time Duration">
                                                </div>
                                                <div class="form-group">
                                            <button type="submit" name="saveBonus" class="btn btn-success">Submit</button>
                                        </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Purchase Coins >< </label>
                                                    <label>Data 1</label>
                                                    <input type="text" name="firstPC" id="firstPC" class="form-control custom-margin-top" value="<?php echo $firstPC; ?>" placeholder="Coins">
                                                    <input type="text" name="firstPCAmount" id="firstPCAmount" class="form-control custom-margin-top"value="<?php echo $firstPCAmount; ?>"  placeholder="Amount">

                                                    <label>Data 2</label>
                                                    <input type="text" name="secondPC" id="secondPC" class="form-control custom-margin-top" value="<?php echo $secondPC; ?>" placeholder="Coins">
                                                    <input type="text" name="secondPCAmount" id="secondPCAmount" class="form-control custom-margin-top" value="<?php echo $secondPCAmount; ?>" placeholder="Amount">

                                                    <label>Data 3</label>
                                                    <input type="text" name="thirdPC" id="thirdPC" class="form-control custom-margin-top" value="<?php echo $thirdPC; ?>" value="<?php echo $firstPC; ?>" placeholder="Coins">
                                                    <input type="text" name="thirdPCAmount" id="thirdPCAmount" class="form-control custom-margin-top" value="<?php echo $thirdPCAmount; ?>" value="<?php echo $firstPC; ?>" placeholder="Amount">

                                                    <label>Data 4</label>
                                                    <input type="text" name="fourPC" id="fourPC" class="form-control custom-margin-top" value="<?php echo $fourPC; ?>" value="<?php echo $firstPC; ?>" placeholder="Coins">
                                                    <input type="text" name="fourPCAmount" id="fourPCAmount" class="form-control custom-margin-top" value="<?php echo $fourPCAmount; ?>" value="<?php echo $firstPC; ?>" placeholder="Amount">

                                                    <label>Data 5</label>
                                                    <input type="text" name="fifthPC" id="fifthPC" class="form-control custom-margin-top" value="<?php echo $fifthPC; ?>" placeholder="Coins">
                                                    <input type="text" name="fifthPCAmount" id="fifthPCAmount" class="form-control custom-margin-top" value="<?php echo $fifthPCAmount; ?>" placeholder="Amount">

                                                    <label>Data 6</label>
                                                    <input type="text" name="sixthPC" id="sixthPC" class="form-control custom-margin-top" value="<?php echo $sixthPC; ?>" placeholder="Coins">
                                                    <input type="text" name="sixthPCAmount" id="sixthPCAmount" class="form-control custom-margin-top" value="<?php echo $sixthPCAmount; ?>" placeholder="Amount">

                                                    <label>Data 7</label>
                                                    <input type="text" name="seventhPC" id="seventhPC" class="form-control custom-margin-top" value="<?php echo $seventhPC; ?>" placeholder="Coins">
                                                    <input type="text" name="seventhPCAmount" id="seventhPCAmount" class="form-control custom-margin-top" value="<?php echo $seventhPCAmount; ?>" placeholder="Amount">
                                                </div>
                                                <div class="form-group">
                                            <button type="submit" name="savePC" class="btn btn-success">Submit</button>
                                        </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Big Event Image</label>
                                                    <input type="file" name="big_event_image" class="form-control">
                                                                                                            <img src="http://127.0.0.1:8000/big_events/20220117173311.png" style="width: 127px;
                                                                                                                                                                        object-fit: cover;  height: 127px; margin-top: 15px;">
                                                                                                    </div>
                                                <br>
                                                <div class="form-group">
                                                    <label>Big Event</label>
                                                    <select name="big_event" class="form-control">
                                                        <option value="">Select Event Image</option>
                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Vip Subscription Plan</label>
                                                    <input type="text" name="vsp[]" class="form-control custom-margin-top" value="">
                                                    <input type="text" name="vsp[]" class="form-control custom-margin-top" value="">
                                                    <input type="text" name="vsp[]" class="form-control custom-margin-top" value="">
                                                    <input type="text" name="vsp[]" class="form-control custom-margin-top" value="">
                                                    <input type="text" name="vsp[]" class="form-control custom-margin-top" value="">
                                                    <input type="text" name="vsp[]" class="form-control custom-margin-top" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Point Recharge</label>
                                                    <input type="text" name="point_recharge[]" class="form-control custom-margin-top" value="">

                                                    <input type="text" name="point_recharge[]" class="form-control custom-margin-top" value="">

                                                    <input type="text" name="point_recharge[]" class="form-control custom-margin-top" value="">

                                                    <input type="text" name="point_recharge[]" class="form-control custom-margin-top" value="">

                                                    <input type="text" name="point_recharge[]" class="form-control custom-margin-top" value="">

                                                    <input type="text" name="point_recharge[]" class="form-control custom-margin-top" value="">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Big Event Point</label>
                                                    <input type="text" name="big_event_point[]" class="form-control custom-margin-top" value="">

                                                    <input type="text" name="big_event_point[]" class="form-control custom-margin-top" value="">

                                                    <input type="text" name="big_event_point[]" class="form-control custom-margin-top" value="">

                                                    <input type="text" name="big_event_point[]" class="form-control custom-margin-top" value="">

                                                    <input type="text" name="big_event_point[]" class="form-control custom-margin-top" value="">

                                                    <input type="text" name="big_event_point[]" class="form-control custom-margin-top" value="">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Redeem Point Notice</label>
                                                    <input type="text" name="redeem_point_notice" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Msg &amp; video call point</label>
                                                    <input type="text" name="mvcp[]" class="form-control custom-margin-top" value="">
                                                    <input type="text" name="mvcp[]" class="form-control custom-margin-top" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Invitee Point Rate</label>
                                                    <input type="text" name="invitee_point_rate" class="form-control" value="10">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label> Korea Won and Dollar Exchange Rate</label>
                                                    <input type="text" name="kwder" class="form-control" value="">
                                                </div>
                                            </div>

                                            <<!--
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Admob</label>
                                                    <select name="admob" class="form-control">
                                                        <option value="">Select Admob</option>
                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label> Advertisement Image</label>
                                                    <input type="file" name="advertisment_image" class="form-control">
                                                                                                            <img src="http://127.0.0.1:8000/ad_images/20220117173311.PNG" style="width: 127px;
                                                                                                                                                                        object-fit: cover;  height: 127px; margin-top: 15px;">
                                                    
                                                </div>
                                            </div>
                                            -->
                                        </div>

                                        <!--

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Advertisement link Address</label>
                                                    <input type="text" name="ald" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label> In-stream ad</label>
                                                    <select name="in_stream_add" class="form-control">
                                                        <option value="">Select In-stream ad</option>
                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Video</label>
                                                    <input type="text" name="video" class="form-control" value="">
                                                </div>

                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label> Video link Address</label>
                                                    <input type="text" name="vld" class="form-control" value="">

                                                </div>
                                            </div>
                                        </div>

                                        -->

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Terms of use</label>
                                                    <input type="text" name="term_of_use" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Location Based Service Terms</label>
                                                    <input type="text" name="lbst" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Personal Information Handling Method</label>
                                                    <input type="text" name="pihd" class="form-control" value="">
                                                </div>

                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>live stream API</label>
                                                    <select name="lsaw" class="form-control">
                                                        <option value="">WebRTC</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!--

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Google Play's billing system Android</label>
                                                    <select name="gpbs_android" class="form-control">
                                                        <option value="">Select Google Play's billing</option>
                                                        <option value="no" selected="">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Paypal payment gateway Android</label>
                                                    <select name="ppg_android" class="form-control">
                                                        <option value="">Select Paypal payment gateway</option>
                                                        <option value="no">No</option>
                                                        <option value="yes" selected="">Yes</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Payoneer payment gateway Android</label>
                                                    <select name="payonner_pg_android" class="form-control">
                                                        <option value="">Select Payoneer payment gateway</option>
                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>iOS billing system </label>
                                                    <select name="ios_bs" class="form-control">
                                                        <option value="">Select iOS billing system</option>
                                                        <option value="no">No</option>
                                                        <option value="yes" selected="">Yes</option>

                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Paypal Payment Gateway IOS </label>
                                                    <select name="ppg_ios" class="form-control">
                                                        <option value="">Paypal Payment Gateway IOS</option>
                                                        <option value="no">No</option>
                                                        <option value="yes" selected="">Yes</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <div class="form-group">
                                                    <label>Payoneer payment gateway IOS</label>
                                                    <select name="payoneer_pg_ios" class="form-control">
                                                        <option value="">Payoneer payment gateway IOS</option>
                                                        <option value="no">No</option>
                                                        <option value="yes" selected="">Yes</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        -->

                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                        </div>
                                </form></div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Starline © All Rights Reserved 2023 &amp; Developer <a href="https://fiverr.com/developerharsh_" target="_blank">Developer Harsh</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

    <script src="./vendor/chartist/js/chartist.min.js"></script>

    <script src="./vendor/moment/moment.min.js"></script>
    <script src="./vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="./js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->
    <script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("savePC").addEventListener("click", function () {
        // Collect data from your input fields
        var firstPC = document.getElementById("firstPC").value;
        var firstPCAmount = document.getElementById("firstPCAmount").value;

        var secondPC = document.getElementById("secondPC").value;
        var secondPCAmount = document.getElementById("secondPCAmount").value;
        
        var thirdPC = document.getElementById("thirdPC").value;
        var thirdPCAmount = document.getElementById("thirdPCAmount").value;
        
        var fourPC = document.getElementById("fourPC").value;
        var fourPCAmount = document.getElementById("fourPCAmount").value;
        
        var fifthPC = document.getElementById("fifthPC").value;
        var fifthPCAmount = document.getElementById("fifthPCAmount").value;
        
        var sixthPC = document.getElementById("sixthPC").value;
        var sixthPCAmount = document.getElementById("sixthPCAmount").value;
        
        var seventhPC = document.getElementById("seventhPC").value;
        var seventhPCAmount = document.getElementById("seventhPCAmount").value;
        // Repeat this for all other input fields

        // Create a JSON object to hold the data
        var data = {
            firstPC: firstPC,
            firstPCAmount: firstPCAmount,
            
            secondPC: secondPC,
            secondPCAmount: secondPCAmount,
            
            thirdPC: thirdPC,
            thirdPCAmount: thirdPCAmount,
            
            fourPC: fourPC,
            fourPCAmount: fourPCAmount,
            
            fifthPC: fifthPC,
            fifthPCAmount: fifthPCAmount,
            
            sixthPC: sixthPC,
            sixthPCAmount: sixthPCAmount,
            
            seventhPC: seventhPC,
            seventhPCAmount: seventhPCAmount,
            
            // Add other data fields here
        };

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Configure the AJAX request
        xhr.open("POST", "settings.php", true); // Replace with your PHP script's URL
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

        // Set a callback function to handle the response
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle the response here, e.g., display a success message
                console.log(xhr.responseText); // Log the response to the console
            }
        };

        // Convert the data object to JSON format
        var jsonData = JSON.stringify(data);

        // Send the AJAX request with JSON data
        xhr.send(jsonData);
    });
});
</script>
</body>

</html>