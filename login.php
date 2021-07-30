<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--jQuery-->
    <script src="js/jquery-3.6.0.min.js"></script>

    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yesteryear&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!--icomoon-->
    <link rel="stylesheet" href="/font/icomoon/style.css">

    <!--Bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Local-->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>

    <title>College Election</title>
</head>

<body>


    <?php

        include "dbcon.php";

         if (isset($_POST['submit'])) {
            $collegeid = $_POST['collegeid'];
            $password = $_POST['password'];

            $check_clgid = " select * from `userdata` where `college id` = '$collegeid' ";
            $query = mysqli_query($con, $check_clgid);

            if (mysqli_num_rows($query)) {
                $db_fetch = mysqli_fetch_assoc($query);    //Fetch Query
                $db_pass = $db_fetch['password'];       //Fetching password

                $_SESSION['fullname'] = $db_fetch['fullname'];    //fetching Fullname

                $_SESSION['collegeid'] = $collegeid;     //College ID

                $verify_pass = password_verify($password, $db_pass);   //Verifying passoword

                if ($verify_pass) {
                    header('location:home.php');
                } else {
                    echo "Password is incorrect";
                }
            } else {
                echo "College ID not found";
            }
        }


    ?>


    <div class="container mt-4 d-flex justify-content-between">
        <div>
            <h4 class="fw-bold">College Election</h4>
        </div>
        <div>
            <span>Don't have an Account? <a href="signup.php" class="f-color-2 font-7"> Sign Up Here</a> </span>
        </div>
    </div>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-6">
                <div>
                    <div>
                        <h1 class="font-9 f-color-2">Login</h1>
                    </div>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="row mt-5 gx-5">
                            <div class="col-lg-12 d-flex flex-column mb-4">
                                <span class="small-text mb-2 text-black-50 mx-2">COLLEGE ID</span>
                                <input type="text" name="collegeid" class="f-form-control-2" required>
                            </div>
                            <div class="col-lg-12 d-flex flex-column mb-4">
                                <span class="small-text mb-2 text-black-50 mx-2">PASSWORD</span>
                                <input type="password" name="password" class="f-form-control-2" required>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-center mb-4">
                                <input type="submit" name="submit" class="f-btn-3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="img/login.svg" class="img-fluid" alt="">
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>