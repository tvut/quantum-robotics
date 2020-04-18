<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="Cache-control" content="public">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image" content="https://quantum917.org/assets/images/oglogo.png"/>
<meta name="keywords"
      content="robots, vex robotics, redmond robotics, exothermic robotics, quantum robotics, 917 robotics, quantum 917, tesla stem, high school, entropy robotic, washington, vex, blaze, education, redmond high school, sammamish, eastlake, bellevue, worlds, 917">
<!--Icons-->
<link rel="icon" href="/assets/images/logo.png">
<!--Plugins-->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<script src="/assets/js/countUp.js"></script>
<script src="/assets/js/jquery.visible.min.js"></script>
<script src="/assets/js/parallax.js"></script>
<!--Run Before Load-->
<!--<script src="/cdn/js/nav.js"></script>-->
<!--CSS-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,400|Raleway:900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/v2.css">
<script>
    $(document).ready(function () {
        /* Shrinks Menu When Scrolled Past 1/2 the page */
        var scroll_pos = 0;
        if ($(window).width() > 992) {
            $('.navbar').css({
                "background-color": "transparent"
            });
        } else {
            $('.navbar').css({
                "background-color": "black"
            });
        }
        $(document).scroll(function () {
            scroll_pos = $(this).scrollTop();
            if ($(window).width() > 992) {
                if (scroll_pos > 50) {
                    $('.navbar').css({
                        "background-color": "black"
                    });
                } else {
                    $('.navbar').css({
                        "background-color": "transparent"
                    });
                }
            }
        });
        /*Removes inline CSS on page resize*/
        $(window).resize(function () {
            if ($(window).width() > 992) {
                if (scroll_pos > 50) {
                    $('.navbar').css({
                        "background-color": "black"
                    });
                } else {
                    $('.navbar').css({
                        "background-color": "transparent"
                    });
                }
            }else
                {
                    $('.navbar').css({
                        "background-color": "black"
                    });
                }
        });
    });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147415827-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-147415827-1');
</script>