<?php
    session_start();
    if(!$_SESSION['fullname']){
        header('location:index.php');
    }
    if($_SESSION['vote_status'] != 0){
        header('location:home.php');
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--jQuery-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>

    <!--AOS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yesteryear&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!--icomoon-->
    <link rel="stylesheet" href="font/icomoon/style.css">

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

        //***********Fetching Austin Philip Vote Count****************//
        $austin = " select * from `vote_result` where `candidates` = 'Austin Philip' ";
        $query_austin = mysqli_query($con, $austin);

        $fetch_austin = mysqli_fetch_assoc($query_austin);
        $austin_votecount = $fetch_austin['votecount'];    //current vote count of Austin Philip fetched

        //***********Fetching Rachel Weiz Vote Count****************//
        $rachel = " select * from `vote_result` where `candidates` = 'Rachel Weiz' ";
        $query_rachel = mysqli_query($con, $rachel);    

        $fetch_rachel = mysqli_fetch_assoc($query_rachel);
        $rachel_votecount = $fetch_rachel['votecount'];    //current vote count of Rachel Weiz fetched
        

        // ***********Fetching Robert Patinson Vote Count****************//
        $robert = " select * from `vote_result` where `candidates` = 'Robert Patinson' ";
        $query_robert = mysqli_query($con, $robert);    

        $fetch_robert = mysqli_fetch_assoc($query_robert);
        $robert_votecount = $fetch_robert['votecount'];    //current vote count of Robert Patinson fetched

        
        $collegeid = $_SESSION['collegeid'];

        //*******************Austin Philip*****************//
        if(isset($_POST['vote1'])){
            $give_vote = " UPDATE `userdata` SET `vote` = '1' WHERE `college id` = '$collegeid' ";
            $query = mysqli_query($con, $give_vote);

            $new_vote_count = $austin_votecount + 1;

            $vquery = mysqli_query($con , " UPDATE `vote_result` SET `votecount` = '$new_vote_count' WHERE `candidates` = 'Austin Philip' ");   //update vote count of Austin Philip

            header('location:home.php');
        }

        //*******************Rachel Weiz*****************//
        if(isset($_POST['vote2'])){
            $give_vote = " UPDATE `userdata` SET `vote` = '2' WHERE `college id` = '$collegeid' ";
            $query = mysqli_query($con, $give_vote);

            $new_vote_count = $rachel_votecount + 1;

            $vquery = mysqli_query($con , " UPDATE `vote_result` SET `votecount` = '$new_vote_count' WHERE `candidates` = 'Rachel Weiz' "); //update vote count of Rachel Weiz

            header('location:home.php');
        }

        //*******************Robert Patinson*****************//
        if(isset($_POST['vote3'])){
            $give_vote = " UPDATE `userdata` SET `vote` = '3' WHERE `college id` = '$collegeid' ";
            $query = mysqli_query($con, $give_vote);

            $new_vote_count = $robert_votecount + 1;

            $vquery = mysqli_query($con , " UPDATE `vote_result` SET `votecount` = '$new_vote_count' WHERE `candidates` = 'Robert Patinson' "); //update vote count of Robert Patinson

            header('location:home.php');
        }

        $vote_status = mysqli_query($con, " select * from `userdata` where `college id` = '$collegeid'  ");

        $user_vote_status = mysqli_fetch_assoc($vote_status)['vote'];

        $_SESSION['vote_status'] = $user_vote_status;   //user vote status modified


    ?>

    <section>
        <div class="candidates">
            <div class="container">
                <div class="col-lg-6">
                    <div>
                        <h5 class="fff" style="text-transform: uppercase;">VOTE NOW <?php echo $_SESSION['fullname'] ?></h5>
                        <h1 class="fw-bold fff my-4">Vote For Your College's President</h1>
                        <p class="fff">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip</p>
                    </div>
                </div>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="row mt-5">
                        <div class="col-lg-4 mb-4">
                            <div>
                                <img src="img/election_candidates/candidate1.jpg" class="f-img-fluid" alt="">
                                <h4 class="fff text-center mt-4">Austin Philip</h4>
                                <center class="mt-4"><input type="submit" name="vote1" value="VOTE" class="f-btn-1"></center>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div>
                                <img src="img/election_candidates/candidate2.jpg" class="f-img-fluid" alt="">
                                <h4 class="fff text-center mt-4">Rachel Weiz</h4>
                                <center class="mt-4"><input type="submit" name="vote2" value="VOTE" class="f-btn-1"></center>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <img src="img/election_candidates/candidate3.jpg" class="f-img-fluid img-fluid" alt="">
                                <h4 class="fff text-center mt-4">Robert Patinson</h4>
                                <center class="mt-4"><input type="submit" name="vote3" value="VOTE" class="f-btn-1"></center>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>