<?php
$title = "Quantum Robotics - Join Us!";
$desc = "Register for the Quantum Robotics mailing list."
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
    <h1>Join the mailing list</h1>
    <p>Sign up for our mailing list! Team registration can be found on the <a href="/teams">Creating a Team</a> page.</p>
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfVLI1g-2dKv3z8igX5tuAVKegTzg__EXYZ60NHHf7H-RzsQQ/viewform" style="width:100%;height:75vh"></iframe>
</div>
<?php include 'include/footer.php' ?>
</body>

</html>
