<?php
$title = "Quantum Robotics";
$desc = "Quantum Robotics is an award-winning Vex Robotics club based in Redmond, Washington."
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
    <script>
        var triggered = false;
        $(function () {
            $(window).scroll(function () {
                if ($('#numbar').visible(true) && !triggered) { //abuse 0 == false :)
                    triggered = true;
                    const options = {
                        duration: 2,
                    };
                    const options1 = {
                        duration: 3,
                    };
                    const options2 = {
                        duration: 4,
                    };
                    const countUp = new CountUp('teamcount', 5, options);
                    if (!countUp.error) {
                        countUp.start();
                    } else {
                        console.error(countUp.error);
                    }
                    const countUp2 = new CountUp('membercount', 30, options1);
                    if (!countUp2.error) {
                        countUp2.start();
                    } else {
                        console.error(countUp2.error);
                    }
                    const countUp3 = new CountUp('awardcount', 94, options2);
                    if (!countUp3.error) {
                        countUp3.start();
                    } else {
                        console.error(countUp3.error);
                    }
                }
            });
        });
    </script>
    <script>
        $(function () {
            function after_form_submitted(data) {
                if (data.result == 'success') {
                    $('form#reused_form').hide();
                    $('#success_message').show();
                    $('#error_message').hide();
                } else {
                    $('#error_message').append('<ul></ul>');

                    jQuery.each(data.errors, function (key, val) {
                        $('#error_message ul').append('<li>' + key + ':' + val + '</li>');
                    });
                    $('#success_message').hide();
                    $('#error_message').show();

                    //reverse the response on the button
                    $('button[type="button"]', $form).each(function () {
                        $btn = $(this);
                        label = $btn.prop('orig_label');
                        if (label) {
                            $btn.prop('type', 'submit');
                            $btn.text(label);
                            $btn.prop('orig_label', '');
                        }
                    });

                }//else
            }

            $('#reused_form').submit(function (e) {
                e.preventDefault();

                $form = $(this);
                //show some response on the button
                $('button[type="submit"]', $form).each(function () {
                    $btn = $(this);
                    $btn.prop('type', 'button');
                    $btn.prop('orig_label', $btn.text());
                    $btn.text('Sending ...');
                });


                $.ajax({
                    type: "POST",
                    url: 'handler.php',
                    data: $form.serialize(),
                    success: after_form_submitted,
                    dataType: 'json'
                });

            });
        });

    </script>
</head>
<body>
<?php include 'include/nav.php' ?>
<div id="homebg" class="full fullbg fixed" style="background-image: url(assets/images/bg.jpg);z-index: -999"></div>
<div id="grad" class="orangegrad full flex" style="position: absolute;top:0;left:0"><h1 class="w c">Quantum
        Robotics</h1></div>
<div id="bigtext" class="flex full" style="position: absolute;top:0;left:0">
    <div class="topbox">
        <div class="innertop bgb">
            <h1>Quantum Robotics</h1>
            <p>Quantum robotics is a club with the mission of promoting the education of science and technology by
                participating in contests in which high school students build and compete with robots. While open to all
                youth of high school age, Quantum Robotics’ primary focus is to serve the students of Nikola Tesla STEM
                High School in Redmond, Washington.</p>
            <button class="btn btn-3 btn-3e icon-arrow-right" onclick="window.location.href='/joinus'">Join Us</button>
        </div>
    </div>
</div>
<div class="container">
    <div id="numbar" class="row c">
        <div class="col-sm">
            <h5 id="teamcount">0</h5>
            <p>Teams</p>
        </div>
        <div class="col-sm">
            <h5 id="membercount">0</h5>
            <p>Members</p>
        </div>
        <div class="col-sm">
            <h5 id="awardcount">0</h5>
            <p>Awards</p>
        </div>
    </div>
</div>
<div class="parallax" data-image-src="/assets/images/bgmain.jpg"
     style="background-image: url(/assets/images/bgmain.jpg)">
    <div style="background-color: rgba(247,128,46,.4);width:100%;height:100%" class="flex minhalf">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h2>What is VEX?</h2>
                    <p>VEX Robotics is an international competition with over 11,500 teams participating in it. Teams
                        compete
                        with an alliane partner against another two teams in matches, where they try to score the most
                        points in
                        the challenge. This years challenge is Tower Takeover where teams try to score as many cubes as
                        possible
                        in the designated area.</p>
                    <a href="https://www.vexrobotics.com/competition" class="btn btn-3 btn-3e icon-arrow-right">Join
                        Us</a>
                </div>
                <div class="col-md">
                    <div class="iframe-container">
                        <div class="videoWrapper">
                            <iframe src="//www.youtube.com/embed/_JVQOiw_OUU" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax" data-image-src="/assets/images/bg2.jpg"
     style="background-image: url(/assets/images/bg2.jpg)">
    <div style="background-color: rgba(0,0,0,.7)" class="flex minhalf">
        <div class="container">
            <h2 class="o">Why do VEX?</h2>
            <div class="row">
                <div class="col-md-6 flex">
                    <div class="icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="desc">
                        <h4>Teamwork</h4>
                        <p>VEX teams are a small group of 5 to 6 people that are constantly managing many different
                            tasks.</p>
                    </div>
                </div>
                <div class="col-md-6 flex">
                    <div class="icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="desc">
                        <h4>Leadership</h4>
                        <p>Teams are entirely student led meaning students manage everything from parts to finances.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 flex">
                    <div class="icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="desc">
                        <h4>Communication</h4>
                        <p>Along with constant communication between teammates, communication is essential at
                            competitions
                            between teams from other clubs.</p>
                    </div>
                </div>
                <div class="col-md-6 flex">
                    <div class="icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="desc">
                        <h4>Stem Skills</h4>
                        <p>Students learn a variety of career related skills through the process of constructing,
                            wiring,
                            coding
                            and driving their robots.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bgb w">
    <div class="container">
        <div id="form_container">
            <h2>Contact Us</h2>
            <p>Please contact us if you are interested in joining a Quantum team, or if you have any questions about
                our
                organization or Vex Robotics. You can also contact us through our email,
                <a href="mailto:redmondquantumrobotics@gmail.com">redmondquantumrobotics@gmail.com</a>.</p>
            <form role="form" method="post" id="reused_form">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="name">
                            <h4>Your Name:</h4></label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="email">
                            <h4>Email:</h4></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label for="message">
                            <h4>Message:</h4></label>
                        <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000"
                                  rows="7"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button type="submit" class="btn btn-3 btn-3e icon-arrow-right">Contact Us</button>
                    </div>
                </div>
            </form>
            <div id="success_message" style="width:100%; height:100%; display:none; ">
                <div class="alert alert-success">
                    <strong>Success!</strong> Your message was sent successfully! We will get back to you shortly!
                </div>
            </div>
            <div id="error_message"
                 style="width:100%; height:100%; display:none; ">
                <div class="alert alert-danger">
                    <strong>Error!</strong> Sorry there was an error sending your form. Please try emailing our email directly.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bgg">
    <div class="container c">
        <h4>Quantum Robotics is sponsored by</h4>
        <img src="/assets/images/Blaze-Education.png" class="sponsorimage"/>
        <img src="/assets/images/google.png" class="sponsorimage"/>
    </div>
</div>
<?php include 'include/footer.php' ?>
</body>

</html>
