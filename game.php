<?php
$title = "Quantum Robotics - 2019-2020 Game";
$desc = "The 2019-2020 Season VEX Robotics Game."
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="og:url" content="<?php echo("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"/>
    <meta name="description" content="<?php echo $desc ?>">
    <meta property="og:title" content="<?php echo $title ?>"/>
    <meta property="og:description" content="<?php echo $desc ?>"/>
    <title><?php echo $title ?></title>
    <?php include 'include/head.php' ?>
</head>
<body>
<?php include 'include/nav.php' ?>
<div class="container">
    <h1>Tower Takeover</h1>
    <p>Vex competitions are played on a 12’x12’ square field. There is a red and blue alliance competing against each
        other. Each alliance has two teams. Matches consist of a 15 second autonomous period, followed by a 1 minute and
        45 second driver controlled period. </p>
    <p>This year's game is called Tower Takeover. The Game Manual and other resources can be found <a
                href="https://www.vexrobotics.com/vexedr/competition/vrc-current-game">here</a>.</p>
    <p>See the team resources page for info about game element use.</p>
    <div class="iframe-container">
        <div class="videoWrapper">
            <iframe src="//www.youtube.com/embed/_JVQOiw_OUU" allowfullscreen></iframe>
        </div>
    </div>
</div>
<?php include 'include/footer.php' ?>
</body>

</html>
