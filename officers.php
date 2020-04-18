<?php
function printFull($name, $image, $position, $email)
{
    echo '
    <div class="bio col-sm">
            <img src="/assets/images/' . $image . '.jpg" alt="' . $name . '">
            <div>
                <h4>' . $name . '</h4>
                <p>' . $position . '</p>
                <a href="' . $email . '" class="btn btn-3 btn-3e icon-arrow-right">Email</a>
            </div>
    </div>
    ';
}

$title = "Quantum Robotics - Officers";
$desc = "Contact information for the Quantum 2019-2020 officers."
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
    <h1>2019-2020 Officers</h1>
    <p>All officers are available for contact via email, however if you have any specific questions we recommend you
        contact us at <a href="mailto:redmondquantumrobotics@gmail.com">redmondquantumrobotics@gmail.com</a>, through
        the contact form, or email our president, Maxwell Wang.</p>
    <div class="row">
        <?php
        printFull("Maxwell Wang", "maxwell", "President", "mxwllwang@gmail.com");
        printFull("Ryan Fidelis", "logo", "Vice President", "reeinfeilds@gmail.com");
        printFull("Rohith Leeladharan", "logo", "Event Manager", "rohithlee9@gmail.com");?>
    </div>
    <div class="row">
        <?php
        printFull("Archit Patankar", "archit", "Team Manager", "architp10@gmail.com");
        printFull("Mathias Foster", "mathias", "Public Relations", "Mathiasyfoster58@gmail.com");
        printFull("Katie Chan", "katie", "Treasurer", "katie@digitaltofu.com");?>
    </div><div class="row">
        <?php
        printFull("Tristan Stevens", "tristan", "Secretary", "tristan@catzooks.com");
        ?>
    </div>
    <h1>Bylaws</h1>
    <p>The bylaws are the clubs 'Users Guide' and lay out important information on how the Quantum Robotics Club is run.
        These details include:
    <ul>
        <li>The fact that we have two kinds of members (adult and student)</li>
        <li>The officer positions and their duties and how they are elected</li>
        <li>Membership requirements (yearly dues, volunteer hours)</li>
        <li>How build teams are formed</li>
        <li>How teams gets the parts they need and how those are shared</li>
        <li>How to resolve any disputes and how new build teams are formed if they dissolve</li>
        <li>How general decisions are made</li>
    </ul>
    In short if you need details about how something is done in the organization, the Bylaws contains the answer. You
    can download them below.</p>
    <a class="btn btn-3 btn-3e icon-arrow-right" href="/assets/docs/bylaws.pdf" download="Quantum Bylaws.pdf">Bylaws</a>
    <p></p>
    <h3>Revision History</h3>
    <p>These bylaws were officially ratified at the Club wide meeting on Friday 9/13/2013. There were 27 members present, including:
    <ul>
        <li>The Student President, Mrigank Bhardwaj </li>
        <li>The Adult Committee Chairman, Vance Morrison</li>
        <li>The Crew Advisor, Laura Johnston</li>
    </ul>
    The vote to accept the bylaws was unanimous.
    </p>
</div>
<?php include 'include/footer.php' ?>
</body>

</html>
