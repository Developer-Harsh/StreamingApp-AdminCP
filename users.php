<?php 
require_once('./config/AppDetails.php');
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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <h4 class="card-title">Users</h4>
                        </div>
                        <div class="card-body" style="overflow: scroll;">
                            <div id="dtBasicExample_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length bs-select" id="dtBasicExample_length"><label>Show <select name="dtBasicExample_length" aria-controls="dtBasicExample" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="dtBasicExample_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="dtBasicExample"></label></div><table id="dtBasicExample" class="table table-striped table-bordered table-sm dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="dtBasicExample_info" style="width: 100%;">
                                <thead>
                                    <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 146.733px;">Name</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Phone Number: activate to sort column ascending" style="width: 111.733px;">Phone Number</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 47.7333px;">Gender</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 25.7333px;">Age</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Point: activate to sort column ascending" style="width: 36.7333px;">Point</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Followers: activate to sort column ascending" style="width: 71.7333px;">Followers</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Following: activate to sort column ascending" style="width: 69.7333px;">Following</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" style="width: 78.7333px;">Country</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="City: activate to sort column ascending" style="width: 27.7333px;">City</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Created At: activate to sort column ascending" style="width: 57.7333px;">Created At</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Invited By: activate to sort column ascending" style="width: 47.7333px;">Invited By</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Show History: activate to sort column ascending" style="width: 89.7333px;">Show History</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Notification: activate to sort column ascending" style="width: 117.733px;">Notification</th><th class="sorting" tabindex="0" aria-controls="dtBasicExample" rowspan="1" colspan="1" aria-label="Is Block: activate to sort column ascending" style="width: 85.7333px;">Is Block</th></tr>
                                </thead>
                                <tbody>
                                            <tr class="odd">
                                                <td class="sorting_1">elina</td>
                                                <td>0333026498</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>china</td>
                                                <td></td>
                                                <td>15-01-2022</td>
                                                <td></td>
                                                <td>
                                                    <button type="button" name="show_history" id="show_history" class="btn btn-sm btn-success">Show History</button>
                                                </td>

                                                <td>
                                                    <a href="./api/push-notification.php"><button type="button" name="push_notification" id="push_notification" class="btn btn-sm btn-primary">Push Notification</button></a>
                                                </td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="checkbox" name="isBlock" id="isBlock" value="13" checked="">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                            </tr>

                                            <tr class="even">
                                                <td class="sorting_1">elina</td>
                                                <td>0333026498</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>china</td>
                                                <td></td>
                                                <td>15-01-2022</td>
                                                <td></td>
                                                <td>
                                                    <button type="button" name="show_history" id="show_history" class="btn btn-sm btn-success">Show History</button>
                                                </td>

                                                <td>
                                                    <a href="./api/push-notification.php"><button type="button" name="push_notification" id="push_notification" class="btn btn-sm btn-primary">Push Notification</button></a>
                                                </td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="checkbox" name="isBlock" id="isBlock" value="13" checked="">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                            </tr>

                                            <tr class="odd">
                                                <td class="sorting_1">elina</td>
                                                <td>0333026498</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>china</td>
                                                <td></td>
                                                <td>15-01-2022</td>
                                                <td></td>
                                                <td>
                                                    <button type="button" name="show_history" id="show_history" class="btn btn-sm btn-success">Show History</button>
                                                </td>

                                                <td>
                                                    <a href="./api/push-notification.php"><button type="button" name="push_notification" id="push_notification" class="btn btn-sm btn-primary">Push Notification</button></a>
                                                </td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="checkbox" name="isBlock" id="isBlock" value="13" checked="">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                        
                                        </tbody>

                            </table><div class="dataTables_info" id="dtBasicExample_info" role="status" aria-live="polite">Showing 1 to 9 of 9 entries</div><div class="dataTables_paginate paging_simple_numbers" id="dtBasicExample_paginate"><a class="paginate_button previous disabled" aria-controls="dtBasicExample" data-dt-idx="0" tabindex="-1" id="dtBasicExample_previous">Previous</a><span><a class="paginate_button current" aria-controls="dtBasicExample" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="dtBasicExample" data-dt-idx="2" tabindex="-1" id="dtBasicExample_next">Next</a></div></div>

                            
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

</body>

</html>