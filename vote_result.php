<?php
session_start();

if($_SESSION['collegeid'] != "admin"){
    header('location:home.php');
}

include "dbcon.php";

//************Austin Pilip Vote Count*************//
$austin_data = mysqli_query($con, " select * from `vote_result` where `candidates` = 'Austin Philip' ");
$austin_vote_count = mysqli_fetch_assoc($austin_data)['votecount'];
$_SESSION['austin_votecount'] = $austin_vote_count;


//************Rachel Weiz Vote Count*************//
$rachel_data = mysqli_query($con, " select * from `vote_result` where `candidates` = 'Rachel Weiz' ");
$rachel_vote_count = mysqli_fetch_assoc($rachel_data)['votecount'];
$_SESSION['rachel_votecount'] = $rachel_vote_count;



//************Robert Patinson Vote Count*************//
$robert_data = mysqli_query($con, " select * from `vote_result` where `candidates` = 'Robert Patinson' ");
$robert_vote_count = mysqli_fetch_assoc($robert_data)['votecount'];
$_SESSION['robert_votecount'] = $robert_vote_count;



//******************Calculating Total Vote*****************//
$_SESSION['total_vote'] = $_SESSION['austin_votecount'] + $_SESSION['rachel_votecount'] + $_SESSION['robert_votecount'];


//*******************Calculating Individual Persentage*******************//
$austin_percent = ($_SESSION['austin_votecount'] * 100) / $_SESSION['total_vote']; //Austin %
// echo $_SESSION['austin%'] . " ";

$rachel_percent = ($_SESSION['rachel_votecount'] * 100) / $_SESSION['total_vote']; //Rachel % 
// echo $_SESSION['rachel%'] . " ";   

$robert_percent = ($_SESSION['robert_votecount'] * 100) / $_SESSION['total_vote']; //Robert %   
// echo $_SESSION['robert%'] . " "; 


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

    <section>
        <div class="candidates" style="height: 100vh;">
            <div class="container">

                <h1 class="fff mb-5">Vote Summery</h1>

                <div class="mb-5">
                    <div class="d-flex justify-content-between">
                        <h2 class="fff">Total Vote Submitted</h2>
                        <h2 class="fff"> <?php echo $_SESSION['total_vote']; ?> </h2>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <h3 class="fff">Austin Philip</h3>
                        <h3 class="fff"> <?php echo $_SESSION['austin_votecount']; ?> </h3>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" style="width:27%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <h3 class="fff">Rachel Weiz</h3>
                        <h3 class="fff"> <?php echo $_SESSION['rachel_votecount']; ?> </h3>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 37.5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <h3 class="fff">Robert Patinson</h3>
                        <h3 class="fff"> <?php echo $_SESSION['robert_votecount']; ?> </h3>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>


            </div>
        </div>
    </section>


</body>

</html>