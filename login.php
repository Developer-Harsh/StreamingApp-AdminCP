<?php
require_once('./config/AppDetails.php');

session_start(); // Start a session

// Database connection configuration
$db_host = 'localhost';
$db_user = 'harsh';
$db_pass = 'harsh';
$db_name = 'tango';

// Create a database connection
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"]; // Changed from "username" to "email"
    $password = $_POST["password"];

    // Validate the user's credentials
    $sql = "SELECT id, email, password FROM admin WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if ($password === $row['password']) { // Assuming the password is stored in plain text
            // Password is correct, create a session
            $_SESSION["id"] = $row['id'];
            $_SESSION["email"] = $row['email'];
            header("Location: ./dashboard.php"); // Redirect to a welcome page or dashboard
            exit;
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "Email not found"; // Changed from "Username not found"
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $WEB_TITLE ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Administration Login</h4>
                                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                        <div class="form-group">
                                            <label for="email"><strong>Email</strong></label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="login@auth.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="password"><strong>Password</strong></label>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="https://fiverr.com/developerharsh_">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button id="signin" type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>

                                    <?php if (isset($error)) echo "<p>$error</p>"; ?>

                                    <div class="new-account mt-3">
                                        <a href="https://fiverr.com/developerharsh_">Contact Developer?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
