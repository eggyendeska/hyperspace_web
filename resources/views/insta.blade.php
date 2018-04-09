<!doctype html>
<html lang="en" class="no-js">
<head>

    <!--===============
    1 ) Head Section
    ================-->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no;">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token">
    @stack('meta')

    <title>{{ config('app.name', 'Hyperspace Software Indonesia') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/insta.css') }}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/insta/modernizr.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <style>
      html{
        font-family: 'Raleway',sans-serif;
      }
    </style>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--===========
2 ) Preloader
============-->
<div id="preloader">
<div class="astronaut" data-js="astro">
<div class="head"></div>
<div class="arm arm-left"></div>
<div class="arm arm-right"></div>
<div class="body">
  <div class="panel"></div>
</div>
<div class="leg leg-left"></div>
<div class="leg leg-right"></div>
<div class="schoolbag"></div>
</div>
</div>
<!--=========
3 ) Homepage
==========-->

<div class="home-page">

    <!--( a ) Introduction -->

    <div class="introduction">
        <!-- <img alt="" src="{{ asset('images/astronaut-astronomy-cosmos-2152.jpg') }}"> -->
        <div class="mask">
        </div>
        <div class="intro-content">
            <h2 style="text-decoration: none"></h2>
            <h1><span>Hyper</span>Space <small>Software Indonesia</small></h1>
            <!-- <h2>Give us your money, we'll give you an alien techology</h2> -->
            <p class="social-media hidden-xs">
                <a href="#" class="fab fa-facebook-f" data-toggle="tooltip" title="Facebook"></a>
                <a href="#" class="fab fa-twitter" data-toggle="tooltip" title="Twitter"></a>
                <a href="#" class="fab fa-google-plus-g" data-toggle="tooltip" title="Google+"></a>
                <a href="#" class="fab fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
                <a href="#" class="fab fa-behance" data-toggle="tooltip" title="Behance"></a>
                <a href="#" class="fab fa-flickr" data-toggle="tooltip" title="Flicker"></a>
                <a href="#" class="fab fa-instagram" data-toggle="tooltip" title="Instagram"></a>
            </p>

            <!-- Social Media Icons [ END ] -->

        </div>
    </div>

    <!-- ( b ) Navigation Menu -->

    <div class="menu">
        <div class="profile-btn">
            <img alt="" src="{{ asset('images/menu/profile_btn.jpg') }}">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-heart"></i>
                </div>
                <div class="col-sm-10">
                    <h2><span>ABOUT</span> US</h2>
                    <h3>From big bang to universe expansion, read here.</h3>
                </div>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

        <div class="resume-btn">
            <img alt="" src="{{ asset('images/menu/resume_btn.jpg') }}">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-user-o"></i>
                </div>
                <div class="col-sm-10">
                    <h2>OUR <span>TEAM</span></h2>
                    <h3>Meet our Scientist</h3>
                </div>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

        <div class="portfolio-btn">
            <img alt="" src="{{ asset('images/menu/portfolio_btn.jpg') }}">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="col-sm-10">
                    <h2><span>OUR</span> PORTFOLIO</h2>
                    <h3>See the galaxies we've built</h3>
                </div>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

        <div class="contact-btn">
            <img alt="" src="{{ asset('images/menu/contact_btn.jpg') }}">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-envelope-o"></i>
                </div>
                <div class="col-sm-10">
                    <h2><span>CONTACT</span> US</h2>
                    <h3>Say hello or find us</h3>
                </div>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

    </div>
</div>

<!--=============
4 ) Close Button
==============-->

<div class="close-btn"></div>

<!--=============
5 ) Profile Page
==============-->

<div class="profile-page">

    <!--( a ) Profile Page Fixed Image Portion -->

    <div class="image-container col-md-5 col-sm-12">
        <div class="mask">
        </div>
        <div class="main-heading">
            <h1><span>ABOUT</span> US</h1>
        </div>
    </div>

    <!--( b ) Profile Page Content -->

    <div class="content-container col-md-7 col-sm-12">



        <!--( B ) What Can I Do -->

        <div class="services-container clearfix">
            <h2 class="small-heading">What can we do?</h2>
            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-eyedropper"></i>
                <h3>GRAPHIC DESIGN</h3>
                <p>
                    Sed mi sem, sagi eros ac, laoreet commodo diam. Morbi id est in urna facilisis dictum. Mauris rutrum mollis neque a sodales. Mauris sed ipsum nec turpis finibus.
                </p>
            </div>

            <!-- Single Service Item [ END ]  -->

            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-eye"></i>
                <h3>WEB DESIGN</h3>
                <p>
                    Vivamus et rhoncus mauris, suscipit efficitur elementum ex. Interdum et malesuada ipsum primis in faucibus. Nullam odio libero, cursus ac ligula suscipit maximus.
                </p>
            </div>

            <!-- Single Service Item [ END ]  -->

            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-code"></i>
                <h3>WEB DEVELOPMENT</h3>
                <p>
                    Praesent ac varius ante, eu suscipit odio. Vesmolito modo pretium scelerisque. Sed vulputate ac varius ante dapibus tempor. Maecenas ut cursus aug suscipit malesuada felis.
                </p>
            </div>

            <!-- Single Service Item [ END ]  -->

            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-lightbulb-o"></i>
                <h3>BRIGHT IDEAS</h3>
                <p>
                    Nunc egestas sed efficitur nulla a sodales. Pellentesque tincidunt diam quam, rhoncus congue pellentesque eu, faucibus nec turpis. Quisque laoreet tincidunt turpis dolor tempus.
                </p>
            </div>

            <!-- Single Service Item [ END ]  -->

            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-rocket"></i>
                <h3>APP DEVELOPMENT</h3>
                <p>
                    Vestibulum dictum tincidunt pulvinar elementum. Etiam urna massa, vestibulum id purus id, vehicula placerat dui. Aenean sit amet pulvinar urna. Ut at mi semper, eleifend.
                </p>
            </div>

            <!-- Single Service Item [ END ]  -->

            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-wrench"></i>
                <h3>SETTINGS</h3>
                <p>
                    Vestibulum tincidunt sed dapibus elit, sed accumsan libero. Nam vulputate tincidunt quam quis nibh porttitor, a tincidunt lacinia. Nulla turpis arcu, hendrerit volutpat tincidunt at, eget est.
                </p>
            </div>

            <!-- Single Service Item [ END ]  -->

        </div>

        <div class="skills clearfix">
            <h2 class="small-heading">Skills</h2>
            <div class="clearfix">
                <div class="skill-container col-sm-4">
                    <h3>Photoshop</h3>
                    <div class="skill" data-percent="60">
                        <span>60%</span>
                    </div>
                </div>

                <!-- Single Skills Item [ END ] -->

                <div class="skill-container col-sm-4">
                    <h3>Illustrator</h3>
                    <div class="skill" data-percent="65">
                        <span>65%</span>
                    </div>
                </div>

                <!-- Single Skills Item [ END ] -->

                <div class="skill-container col-sm-4">
                    <h3>Dreamweaver</h3>
                    <div class="skill" data-percent="80">
                        <span>80%</span>
                    </div>
                </div>

                <!-- Single Skills Item [ END ] -->

                <div class="skill-container col-sm-4">
                    <h3>Design</h3>
                    <div class="skill" data-percent="55">
                        <span>55%</span>
                    </div>
                </div>

                <!-- Single Skills Item [ END ] -->

                <div class="skill-container col-sm-4">
                    <h3>Development</h3>
                    <div class="skill" data-percent="90">
                        <span>90%</span>
                    </div>
                </div>

                <!-- Single Skills Item [ END ] -->

                <div class="skill-container col-sm-4">
                    <h3>Coding</h3>
                    <div class="skill" data-percent="85">
                        <span>85%</span>
                    </div>
                </div>

                <!-- Single Skills Item [ END ] -->

            </div>
        </div>

        <!--( C ) Some Facts -->

        <div class="facts clearfix">
            <div class="col-xs-4">
                <h3>PROJECTS DONE</h3>
                <h1>{{ $projects->count() }}+</h1>
            </div>
            <div class="col-xs-4">
                <h3>HAPPY CLIENTS</h3>
                <h1>100+</h1>
            </div>
            <div class="col-xs-4">
                <h3>COFFEE CUPS</h3>
                <h1>250+</h1>
            </div>
        </div>

        <!--( D ) Footer -->

        <div class="footer clearfix">
            <a href="#">HyperSpace Software Indonesia</a>
            <p>
                Copyright © 2018 All right reserved
            </p>
        </div>
    </div>
</div>

<!--=============
6 ) Resume Page
===============-->

<div class="resume-page">

    <!--( a ) Resume Page Fixed Image Portion -->

    <div class="image-container col-md-5 col-sm-12">
        <div class="mask">
        </div>
        <div class="main-heading">
            <h1>OUR <span>TEAM</span></h1>
        </div>
    </div>

    <!--( b ) Resume Page Content -->

    <div class="content-container col-md-7 col-sm-12">

        <!--( A ) Education Section -->
        <div class="education clearfix">
            <h2 class="small-heading">Our astronauts</h2>
            @foreach($teams as $team)
                <div class="col-lg-11 col-lg-offset-1">
                    <div class="story-content clearfix">
                        <img alt="" src="{{ Voyager::image( $team->image ) }}" class="col-xs-offset-1 col-sm-offset-0 col-sm-4 col-xs-10">
                        <div class="col-sm-8 col-xs-12">
                            <h3>{{ $team->name }}</h3>
                            <small><i>{{ $team->email }}</i></small>
                            <hr style="margin: 5px 0px;">
                            <div class="clearfix"></div>
                            <p>{{ $team->quote }}</p>

                            <div class="clearfix"></div>
                            @foreach($team->skills as $skill)
                                <span class="label label-info"> {{$skill->name}}</span>
                            @endforeach
                            <div class="col-xs-12 social-media pull-left" style="text-align: left; margin-top: 10px; margin-left: 0px; padding-left: 0px;">
                                <a href="{{ $team->facebook }}" class="btn-sm fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
                                <a href="{{ $team->twitter }}" class="fa fa-twitter" data-toggle="tooltip" title="Twitter"></a>
                                <a href="{{ $team->linkedin }}" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
                                <a href="{{ $team->instagram }}" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

        <!--( C ) Footer Section -->

        <div class="footer clearfix">
            <a href="#">HyperSpace Software Indonesia</a>
            <p>
                Copyright © 2018 All right reserved
            </p>
        </div>
    </div>
</div>

<!--===============
7 ) Portfolio Page
================-->

<div class="portfolio-page">

    <!--( a ) Portfolio Page Fixed Image Portion -->

    <div class="image-container col-md-5 col-sm-12">
        <div class="mask">
        </div>
        <div class="main-heading">
            <h1><span>PORT</span>FOLIO</h1>
        </div>
    </div>

    <!--( b ) Portfolio Page Content -->

    <div class="content-container col-md-7 col-sm-12">

        <!--( A ) Portfolio -->

        <div class="portfolio">
            <h2 class="small-heading">Explored projects</h2>
            <div class="project-container">

                <div class="project-controls">
                    <button class="filter" data-filter="all">All</button>
                    @foreach($projectCategories as $category)
                    <button class="filter" data-filter="{{ $category->id }}">{{ $category->name }}</button>
                    @endforeach
                </div>

                <!-- Portfolio Control Buttons [ END ] -->

                <div class="projet-items clearfix" id="projects">

                    <!-- Portfolio Image -->
                    @foreach($projects as $project)
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 filtr-item" data-category="{{ $project->project_categories_id }}">
                            <div class="project">
                                <img src="{{ Voyager::image( $project->image ) }}" alt="">
                                <div class="ovrly">
                                </div>
                                <div class="buttons">
                                    <a href="#" class="fa fa-link"></a>
                                    <a href="#portfolio-{{$project->id}}" class="fa fa-search show-popup"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Popup Content -->

                        <div class="pop-up-box" id="portfolio-{{$project->id}}">
                            <img alt="" src="{{ Voyager::image( $project->image ) }}" class=" hidden-xs">
                            <div class="popup-content">
                                <h3>{{ $project->title }}</h3>
                                <p>
                                    {{ $project->description }}
                                </p>
                                {{--<a href="#">PREVIEW</a>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!--( B ) Testimonials Section -->

        <div class="testimonials clearfix">
            <h2 class="small-heading">Some words from client</h2>
            <div class="testimonials-container col-sm-10 col-sm-offset-1">
                <div class="owl-carousel">
                    @foreach ($testimonials as $testimonial)
                    <div>
                        <p>
                            <i class="fa fa-quote-left"></i>{{ $testimonial->testimonial }}<i class="fa fa-quote-right"></i>
                        </p>
                        <h3>{{ $testimonial->client_name }}</h3>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!--( C ) Some Facts -->

        <div class="facts clearfix">
            <div class="col-xs-4">
                <h3>PROJECTS DONE</h3>
                <h1>{{ $projects->count() }}+</h1>
            </div>
            <div class="col-xs-4">
                <h3>HAPPY CLIENTS</h3>
                <h1>100+</h1>
            </div>
            <div class="col-xs-4">
                <h3>COFFEE CUPS</h3>
                <h1>250+</h1>
            </div>
        </div>

        <!-- Footer -->

        <div class="footer clearfix">
            <a href="#">HyperSpace Software Indonesia</a>
            <p>
                Copyright © 2018 All right reserved
            </p>
        </div>
    </div>
</div>

<!--==============
8 ) Contact Page
===============-->

<div class="contact-page">

    <!--( a ) Contact Page Fixed Image Portion -->

    <div class="image-container col-md-5 col-sm-12">
        <div class="mask">
        </div>
        <div class="main-heading">
            <h1><span>CONTACT</span> US</h1>
        </div>
    </div>

    <!--( b ) Contact Page Content -->

    <div class="content-container col-md-7 col-sm-12">

        <!--( A ) Contact Form -->

        <div>
            <h2 class="small-heading">Say hello!</h2>

            <div class="contact-form col-sm-11 clearfix">

                <form action="php/contact.php" id="contactForm" method="post" name="contactForm">
                    <fieldset>
                        <div class="col-sm-12">
                            <input id="name" name="name" placeholder="Your Name*" type="text" value="">
                        </div>

                        <!-- Name Field [ END ] -->

                        <div class="col-sm-12">
                            <input id="email" name="email" placeholder="Your Email*" type="text" value="">
                        </div>

                        <!-- Email Field [ END ] -->

                        <div class="col-xs-12">
                            <textarea cols="5" id="message" name="message" placeholder="Your Message....*"></textarea>
                        </div>

                        <!-- Message Field [ END ] -->

                        <div class="col-xs-12">
                            <button class="submit active">SEND</button>
                        </div>

                        <div class="error col-xs-12">
                            <h3></h3>
                        </div>

                        <!-- Error Message [ END ] -->

                        <div class="success col-xs-12">
                            <h3>Success! Your message was sent.</h3>
                        </div>

                        <!-- Submit Button [ END ] -->

                    </fieldset>
                </form>

                <!-- Contact Form [ END ] -->

            </div>
        </div>

        <!--( B ) Google Map -->

        <div class="google-map" id="google-map"></div>

        <!--( C ) Contact Details -->

        <div class="contact-details clearfix">
            <h2 class="small-heading">Contact details</h2>
            <div class="contact col-sm-4">
                <p>
                    <i class="fa fa-map-marker"></i><br>
                    121 King St, Melbourne VIC
                </p>
            </div>

            <!-- Single Contact Details Item [ END ] -->

            <div class="contact col-sm-4">
                <p>
                    <i class="fa fa-phone"></i><br>
                    +00 000 0000 000
                </p>
            </div>

            <!-- Single Contact Details Item [ END ] -->

            <div class="contact col-sm-4">
                <p>
                    <i class="fa fa-fax"></i><br>
                    +00 000 0000 000
                </p>
            </div>

            <!-- Single Contact Details Item [ END ] -->

            <div class="contact col-sm-4">
                <p>
                    <i class="fa fa-phone"></i><br>
                    +00 000 0000 000
                </p>
            </div>

            <!-- Single Contact Details Item [ END ] -->

            <div class="contact col-sm-4">
                <p>
                    <i class="fa fa-envelope"></i><br>
                    dummy@example.com
                </p>
            </div>

            <!-- Single Contact Details Item [ END ] -->

            <div class="contact col-sm-4">
                <p>
                    <i class="fa fa-globe"></i><br>
                    www.example.com
                </p>
            </div>

            <!-- Single Contact Details Item [ END ] -->

            <div class="col-xs-12 social-media">
                <a href="#" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
                <a href="#" class="fa fa-twitter" data-toggle="tooltip" title="Twitter"></a>
                <a href="#" class="fa fa-plus" data-toggle="tooltip" title="Google+"></a>
                <a href="#" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
                <a href="#" class="fa fa-behance" data-toggle="tooltip" title="Behance"></a>
                <a href="#" class="fa fa-flickr" data-toggle="tooltip" title="Flicker"></a>
                <a href="#" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>
            </div>

            <!-- Social Media Icons [ END ] -->

        </div>

        <!-- ( D ) Footer -->

        <div class="footer clearfix">
            <a href="#">HyperSpace Software Indonesia</a>
            <p>
                Copyright © 2018 All right reserved
            </p>
        </div>
    </div>
</div>

<!--============
9 ) Javascript
=============-->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('js/insta/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/jquery.easypiechart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/jquery.filterizr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/jquery.popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/owl.carousel.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDirYnFlHB8ScnXrEpbWcpv5q95RyAl0tg"></script>
<script type="text/javascript" src="{{ asset('js/insta/jquery.gmap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/viewport-units-buggyfill.hacks.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/viewport-units-buggyfill.js') }}"></script>
<script>
    window.viewportUnitsBuggyfill.init({
        refreshDebounceWait: 50,
        hacks: window.viewportUnitsBuggyfillHacks
    });
</script>
<script type="text/javascript" src="{{ asset('js/insta/script.js') }}"></script>
</body>
</html>
