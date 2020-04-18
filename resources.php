<?php
$title = "Quantum Robotics - Resources";
$desc = "Resources for new or returning teams."
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
        <h1>Resources</h1>
        <h3>Parts for Your Robot</h3>
        <p>Your build team will buy the parts it needs on your own. Parts can be purchased online at <a
                    href="https://vexrobotics.com">vexrobotics.com</a> or at <a
                    href="https://robotmesh.com">RobotMesh</a>. If
            you need to pick up parts right away, you can go to RobotMesh in Kirkland.</p>
        <p>You will probably need about $1500 to buy all of the parts you need if you have nothing to start with. You
            will also need to budget about $300 for competition sign ups throughout the year. This means that if your
            team has 6 members, each member will need to contribute $300-$400. Thus you will need to designate some
            adult from your team as the treasurer for your build team. This adult can collect the contributions from the
            other adults and actually spend the money. They will order the parts and paying the registration fees
            (typically $50) associated with any robotics competitions your team attends. This person should also keep
            track of how much each member contributed and what it was spent on.</p>
        <p>The officer board has put together a list of parts we recommend a first year team should purchase. These
            parts are essentials and your team will most likely end up using all of them. Don't hold yourself to this
            parts list - you can always buy less or more than we recommend. However, make sure to steer away from the
            Vex kits, such as the clawbot kit. They contain parts that are useful for building the clawbot, not a
            competition bot.</p>
        <a href="https://docs.google.com/spreadsheets/d/14mVtBrh-BzOfMrSlRE9YTr7CLrg_2BORVk_gRYlGN8s/edit?usp=sharing" class="btn btn-3 btn-3e icon-arrow-right">Parts List</a>

        <p>With all the options for purchasing robot parts, It can be difficult to know what is right for your team.
            This parts list is designed to help you make your initial purchase so that you will have all of the basic
            hardware that you need to start the year strong. As teams become more experienced, you will need to order
            more specialized parts. To start out, however, these parts will be more than enough. </p>
        <p>If you have any questions about the contents of this list, are wondering why certain items are NOT on this
            list, or have questions about the use of certain parts, feel free to <a href="/#form_container">contact
                us</a>.</p>
        <h3>VEXCode</h3>
        <p>The VEX V5 Brain is coded in VEXCode, which is a C based language. Multiple different IDEs exist, and teams
            are allowed to use any IDE they wish. The two main IDEs are VEXCode and PROS.</p>
        <p>VEXCode is the recommended IDE, with official support from VEX. It supports wireless programming and has
            block based as well as text coding options.</p>
        <a href="https://www.vexrobotics.com/vexcode" class="btn btn-3 btn-3e icon-arrow-right">Download VEXCode</a>
        <p>PROS used to be the recommended IDE, however since the release of VEXCode, PROS is no longer our choice. PROS
            is based on the Atom Editor, which means it is more modular and can support plugins and external libraries.
            It comes with many built in features, including a chassis controller that has a built in PID Loop.
            However, PROS is not an official Vex product and in our usage seems to be less stable than VEXCode.</p>
        <a href="https://pros.cs.purdue.edu/v5/" class="btn btn-3 btn-3e icon-arrow-right">Download PROS</a>
        <p>If you ever need help coding, you can check the example code files that come with your IDE, the <a
                    href="https://vexforum.com">VEX Forums</a>, or YouTube.</p>
        <h3>Getting Started with Building</h3>
        <p>There is a lot of helpful information available on the <a href="https://vexforum.com">VEX Forums</a>.</p>
        <p>If you are running into a problem, out of ideas, or looking for a starting point​ this is a great place to
            look. Don't be afraid to make an account and post your own questions as well, or ask a more experienced
            Quantum team for advice.​</p>
        <p>Teams can also find a lot of videos on YouTube with tutorials on how to build, as well as reveals of other
            bots teams have made for the current season (and past seasons).</p>
        <h3>Mentors</h3>
        <p>If they would like, new teams will be provided with an experienced mentor to help them get started. This
            mentor should be in a group chat with your team so that they may give advice and answer questions as needed.
            They may also attend team meetings.​</p>
        <h3>Field Elements</h3>
        <p>The club will provide teams with a small set of field elements for experimentation and testing of their
            robot. These will be distributed at the beginning of the year or available by request. At club-wide build
            sessions, an entire practice field will be set up for use. Teams will be responsible for bringing the field
            elements lent to them to each club-wide meeting for use.​</p>
    </div>
    <?php include 'include/footer.php' ?>
    </body>

    </html>
<?php
