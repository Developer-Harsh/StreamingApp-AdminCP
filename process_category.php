<?php
if (isset($_FILES['my_image']) && isset($_POST['flag'])) {
    $sname = "localhost";
    $uname = "harsh";
    $password = "harsh";
    $db_name = "tango";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        echo "Connection failed!";
        exit();
    }

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];
    $FLAG = $_POST['flag'];

    if ($error === 0) {
        if ($img_size > 1000000) {
            $em = "Sorry, your file is too large.";
            $error = array('error' => 1, 'em' => $em);
            echo json_encode($error);
            exit();
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");
            $current_time = date("Y-m-d H:i:s"); // Format current time as DATETIME string

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = "uploads/" . $new_img_name;

                if (move_uploaded_file($tmp_name, $img_upload_path)) {
                    // Use single quotes and proper escaping for string values
                    $FLAG = mysqli_real_escape_string($conn, $FLAG);
                    $new_img_name = mysqli_real_escape_string($conn, $new_img_name);
                    $current_time = mysqli_real_escape_string($conn, $current_time);

                    // Assuming your table structure is: ID, IMAGE, NAME, CREATED_AT, UPDATED_AT, IS_TOP
                    $sql = "INSERT INTO categories (IMAGE, NAME, CREATED_AT, UPDATED_AT, IS_TOP) VALUES ('$new_img_name', '$FLAG', '$current_time', '$current_time', 0)";

                    if (mysqli_query($conn, $sql)) {
                        $res = array('error' => 0, 'src' => $new_img_name);
                        echo json_encode($res);
                        exit();
                    } else {
                        $em = "Error: " . mysqli_error($conn);
                        $error = array('error' => 1, 'em' => $em);
                        echo json_encode($error);
                        exit();
                    }
                } else {
                    $em = "Failed to move uploaded file.";
                    $error = array('error' => 1, 'em' => $em);
                    echo json_encode($error);
                    exit();
                }
            } else {
                $em = "You can't upload files of this type";
                $error = array('error' => 1, 'em' => $em);
                echo json_encode($error);
                exit();
            }
        }
    } else {
        $em = "Unknown error occurred!";
        $error = array('error' => 1, 'em' => $em);
        echo json_encode($error);
        exit();
    }
}
?>
