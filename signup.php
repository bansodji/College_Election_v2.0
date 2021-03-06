<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "links/links.php" ?>

    <title>College Election</title>
</head>

<body>

    <?php

        include "dbcon.php";

        if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $fullname = "$firstname" . " " . "$lastname";
            $collegeid = $_POST['collegeid'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];

            $pass = password_hash($password, PASSWORD_BCRYPT);  // Hashing Password

            $select_clgid_idlist = " SELECT * FROM `id list` WHERE `college id` = '$collegeid' ";
            $query = mysqli_query($con, $select_clgid_idlist);  //checking if "college id" is present in "id list" database

            $select_clgid_userdata = " select * from `userdata` where `college id` = '$collegeid' ";
            $query2 = mysqli_query($con, $select_clgid_userdata);   //checking if "college id" is present in "userdata" database

            if(mysqli_num_rows($query2) > 0){
                echo "College Id Already exist";
            }else{
                if(mysqli_num_rows($query) == 1){
                    $id_name = mysqli_fetch_assoc($query)['name'];
                    if($id_name === $fullname){
                        if($password === $cpassword){
                            $insert_data = " INSERT INTO `userdata`(`college id`, `fullname`, `password`, `vote`) VALUES ('$collegeid', '$fullname', '$pass', '0') ";
                            $iquery = mysqli_query($con, $insert_data);

                            header('location:index.php');
                        }else{
                            echo "Password is Incorrect";
                        }
                    }else{
                        echo "Name does not match";
                    }
                }else{
                    echo "Incorrect College ID";
                }
            }

            
        }
    ?>


    <div class="container mt-4 d-flex justify-content-between">
        <div><h4 class="fw-bold">College Election</h4></div>
        <div>
            <span>Have an Account? <a href="login.php" class="f-color font-7"> Login Here</a> </span>
        </div>
    </div>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-6">
                <img src="img/signup.svg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6">
                <div>
                    <div>
                        <h1 class="font-9 f-color">Sign Up</h1>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="row mt-5">
                            <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column mb-4">
                                <span class="small-text mb-2 text-black-50 mx-2">FIRST NAME</span>
                                <input type="text" name="firstname" class="f-form-control-2" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column mb-4">
                                <span class="small-text mb-2 text-black-50 mx-2">LAST NAME</span>
                                <input type="text" name="lastname" class="f-form-control-2"     >
                            </div>
                            <div class="col-lg-12 d-flex flex-column mb-4">
                                <span class="small-text mb-2 text-black-50 mx-2">COLLEGE ID</span>
                                <input type="text" name="collegeid" class="f-form-control-2" required>
                            </div>
                            <div class="col-lg-12 d-flex flex-column mb-4">
                                <span class="small-text mb-2 text-black-50 mx-2">PASSWORD</span>
                                <input type="password" name="password" class="f-form-control-2" required>
                            </div>
                            <div class="col-lg-12 d-flex flex-column mb-4">
                                <span class="small-text mb-2 text-black-50 mx-2">CONFIRM PASSWORD</span>
                                <input type="password" name="cpassword" class="f-form-control-2" required>
                            </div>
                            <div class="col-lg-12 d-flex mb-4">
                                <input type="checkbox" name="checkbox" class="form-check-input" required>
                                <span>&nbsp;&nbsp;I've read and agree with Tearms of Service and Privacy Policy.</span>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-center mb-4">
                                <input type="submit" name="submit" value="SIGN UP" class="f-btn-2">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>