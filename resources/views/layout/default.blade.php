<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>HeartbeatUTH | @yield('title', 'Give me a Title!')</title>
    <title>{{ isset($title) ? $title.' | ' : '' }} {{ config('app.name') }}</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/ico" href="{{asset('')}}includes/images/heartbeatUTH_Images/heart_logo.png"/>
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <script src="{{asset('')}}js/vendor/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body data-spy="scroll" data-target="#primary-menu">
<div class="preloader">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div>
</div>

@include('layout.main-nav')

@yield('content')

<footer class="footer-area ">
    <div class="footer-bottom">
        <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
            <div class="row">
                <div class="col text-center">
                    <div class="col">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/HeartbeatUTH/" target="_blank" class="p-2" style="color: red"><i class="fab fa-facebook fa-2x"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/HeartbeatUTH" target="_blank" class="p-2" style="color: red"><i class="fab fa-twitter fa-2x"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.discord.heartbeatuth.com/" target="_blank" class="p-2" style="color: red"><i class="fab fa-discord fa-2x"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.twitch.tv/heartbeatuth" target="_blank" class="p-2" style="color: red"><i class="fab fa-twitch fa-2x"></i></a></li>
                        </ul>
                    </div>
                    <p class="pb_font-14">Support the Website:</p>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="EAHW9EW6UX8KJ">
                        <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_SM.gif" name="submit" alt="PayPal – The safer, easier way to pay online!"> <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1"> </form>
                    <p class="pb_font-14">&copy; HeartbeatUTH 2020 | All Rights Reserved | Hosted by epilepsy event | Developed by <a href="https\\:cockersgaming.uk">Cockers Gaming</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>




<!--Vendor-JS-->
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.j')}}s"></script>
<!--Plugin-JS-->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/contact-form.js')}}"></script>
<script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('js/scrollUp.min.js')}}"></script>
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<!--Main-active-JS-->
<script src="{{asset('js/main.js')}}"></script>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("July 11, 2020 12:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = days + " Days " + hours + " Hours "
            + minutes + " Minutes " + seconds + " Seconds ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
</body>

</html>
