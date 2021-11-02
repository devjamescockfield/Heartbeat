@extends('layout.default')

@section('title', 'Home')

@section('content')


    <div data-simplebar>

        <!--Header-area-->
        <header class="header-area overlay full-height relative v-center" style="height: fit-content;" id="home-page">
            <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
                <div class="row v-center">
                    <div class="col-xs-12 col-md-7 header-text">
                        <h2>Heartbeat Under The Hearts</h2>
                        <h5>We have taken over the Epilepsy event from WTLVTC so <a href="https://www.discord.heartbeatuth.com/">Join our discord</a> to get more information on the event!!</h5>
                        <p>Important Links: </p>

                        <a href="https://ets2c.com/view/83591/yamyam-naples-hotel" target="_blank" type="button" class="button white btn btn-link">ETS2C Link</a><br>
                        <a href="#" target="_blank" type="button" class="button white btn btn-link">Heartbeat UTH 2020 Forum (Available in 2020)</a><br>
                        <a href="https://www.justgiving.com/fundraising/rainbowtrust2020" target="_blank" class="button white btn btn-link">Donations</a><br>
                        <a href="https://shop.spreadshirt.co.uk/Heartbeatuth" target="_blank" class="button white btn btn-link">HeartbeatUTH Shop</a>
                        <br>
                        <br>
                        <br>

                        <h4>Why did we plan the event?</h4>
                        <p>"This is a good question we have been asked many times and the truth is, heartbeatuth was going to be a one off as we both wanted to give back to a charity that's helped us both. But then we sat down together and thought we could help more charities out there."</p>
                        <h6>By Cookie</h6>
                        <br>
                        <div class="animated fadeInUp">
                            <h3>Countdown to the Event!!!</h3>
                            <p style="font-size: 30px" id="demo"></p>
                        </div>

                        <script>

                            (function(d, s, id) {

                                var js, pjs = d.getElementsByTagName(s)[0];

                                if (d.getElementById(id)) return;

                                js = d.createElement(s);

                                js.id = id;

                                js.src = "//www.tickcounter.com/static/js/loader.js";

                                pjs.parentNode.insertBefore(js, pjs);

                            }(document, "script", "tickcounter-sdk"));

                        </script>

                    </div>
                    <div class="hidden-xs hidden-sm col-md-5 text-right">
                        <div class="screen-box screen-slider">
                            <div class="item">
                                <img src="{{asset('images/heartbeatUTH_Images/heart_logo.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('images/2020/heartbeatuth2020.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header-area/-->



        <!--Feature-area-->
        <section class= "section-padding" id="about-page">
            <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
                <h2 style="text-align: center;">About</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="box">
                            <h4>Rainbow Trust's Aim</h4>
                            <p>Being told that your child is so seriously ill that they might die is something no parent ever wishes to hear. Nobody knows how they would react or how they would cope. And in this new world in which families find themselves, everyday life has to continue. This year we supported more families than ever before through our eight care teams, read how we helped families cope in our latest impact report: <a href="https://rainbowtrust.org.uk/uploads/other/pdfs/Impact_Report_17_18.pdf"><u>Impact Report</u></a>.
                                Every family in the UK who has a child with a life threatening illness should get the support they need. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="box">
                            <h4>Our plans are to:</h4>
                            <ol>
                                <li>Ensure high quality service and support for families</li>
                                <li>Extend our range and scope of services to families</li>
                                <li>Increase our influence and reputation as a ‘trusted voice’</li>
                                <li>Raise more funds to ensure we can maintain support for families</li>
                                <li>Increase public awareness.</li>
                                <li>We are committed to meeting increasing demand from families by growing our existing family support teams. We will also create a feasibility model for expanding to new locations in the future.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="box">
                            <h4>Our Aim for the 2020 event</h4>
                            <p>Our aim is to raise 500 pounds for rainbow trust to help with the cost. AS there's an estimated 49,000 children and young people in the uk living with a life limiting or life threatening condition who may require palliative care. Not only we supporting the families but also the people who work for this amazing charity</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Feature-area/-->

        <section class="sky-bg section-padding" id="reviews-page">
            <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
                <h1 style="text-align: center;">Reviews from previous truckers who attended in 2018:</h1> <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active row">
                                    <div class="v-center">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="caption-title" data-animation="animated fadeInUp">
                                                <h2>Cookienightstorm</h2>
                                            </div>
                                            <div class="caption-desc" data-animation="animated fadeInUp">
                                                <blockquote>Me and YamYam would like to say a BIG thank you to everyone who turned up for the first ever event of Heartbeat UTH. We're looking forward to 2019 event and to see the support from everyone again.</blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="v-center">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="caption-title" data-animation="animated fadeInUp">
                                                <h2>Colnelio</h2>
                                            </div>
                                            <div class="caption-desc" data-animation="animated fadeInUp">
                                                <blockquote>Apart from the lack of trucks that didnt turn up at truckfest after booking slots, id say the actual convoy went rather smoothly and enjoyed my time working with you guys</blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="v-center">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="caption-title" data-animation="animated fadeInUp">
                                                <h2>Niklas</h2>
                                            </div>
                                            <div class="caption-desc" data-animation="animated fadeInUp">
                                                <blockquote>I really enjoyed it!</blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Indicators -->
                                <ol class="carousel-indicators caption-indector">
                                    <li data-target="#caption_slide" data-slide-to="0" class="active">
                                        <strong>Cookienightstorm</strong> Event Owner
                                    </li>
                                    <li data-target="#caption_slide" data-slide-to="1">
                                        <strong>Colnelio</strong> Participant
                                    </li>
                                    <li data-target="#caption_slide" data-slide-to="2">
                                        <strong>Niklas</strong> Participant
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class= "section-padding" id="routes-page">
            <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
                <!--<div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Routes</h2>
                            <p>Here are the <strong>routes</strong> for the 2019 HeatBeatUTH Event on the 13th of July 2019: </p>
                        </div>
                    </div>
                </div>-->

                <h2>Routes will be uploaded closer to the event!</h2>

            </div>
        </section>




        <section class="section-padding sky-bg full-height" id="twitch-page">

            <!-- Add a placeholder for the Twitch embed -->
            <div id="twitch-embed" style="width: 90%; height: 100%; margin-left: 5%; margin-right: 5%;"></div>

            <!-- Load the Twitch embed script -->
            <script src="https://embed.twitch.tv/embed/v1.js"></script>

            <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
            <script type="text/javascript">
                new Twitch.Embed("twitch-embed", {
                    width: '100%',
                    height: '100%',
                    channel: "heartbeatuth"
                });
            </script>
        </section>

        <section class="sky-bg section-padding" id="gallery-page">
            <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h2>Gallery</h2>
                        <h3>Checkout our facebook to see some of the pictures from our Convoys </h3>
                        <a class="button white" target="_blank" href="https://www.facebook.com/pg/HeartbeatUTH/photos/">Facebook Pictures</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding" id="team-page">
            <div class="container" style="margin-top: 5%; margin-bottom: 5%;">

                <h2 style="text-align: center;">Meet the Team</h2>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="single-team">
                            <div class="team-photo">
                                <img src="{{asset('images/heartbeatUTH_Images/YamYam.jpg')}}" alt="YameYam Logo" width="50%" height="50%">
                            </div>
                            <div class="blog-content">
                                <h3>YamYam</h3>
                                <p>Event Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="single-team">
                            <div class="team-photo">
                                <img src="{{asset('images/heartbeatUTH_Images/CookieNightStorm.jpg')}}" alt="CookieNightStorm Logo" width="50%" height="50%">
                            </div>
                            <div class="blog-content">
                                <h3>CookieNightStorm</h3>
                                <p>Event Owner</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="single-team">
                            <div class="team-photo">
                                <img src="{{asset('images/heartbeatUTH_Images/Bigmac.jpg')}}" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>Bigmac</h3>
                                <p>Event Planner</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="single-team">
                            <div class="team-photo">
                                <img src="{{asset('images/heartbeatUTH_Images/CockersGamingLogo.png')}}" alt="" width="50%" height="50%">
                            </div>
                            <div class="blog-content">
                                <h3>Cockers Gaming</h3>
                                <p>Head Website Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <section class="section-padding sky-bg" id="contact-page">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Contact us</h2>
                            <p>If you have a question or want to leave us a comment on the event? Fill in the Contact Us form bellow</p>
                        </div>
                    </div>
                </div>
                <form action="{{asset('process.php')}}" id="contact-form" method="post" class="contact-form">
                    <div class="form-double">
                        <input type="text" id="form-name" name="form-name" placeholder="Your name" class="form-control" required="required">
                        <input type="email" id="form-email" name="form-email" class="form-control" placeholder="E-mail address" required="required">
                    </div>
                    <input type="text" id="form-subject" name="form-subject" class="form-control" placeholder="Message topic">
                    <textarea id="form-message" name="form-message" rows="5" class="form-control" placeholder="Your message" required="required"></textarea>
                    <button type="submit" class="button">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
