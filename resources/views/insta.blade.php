<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token">
    {!! SEO::generate() !!}

    @stack('meta')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/insta.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="{{ asset('js/insta/modernizr.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <style>
      html{
        font-family: 'Raleway',sans-serif;
      }
    </style>

    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-117529262-1', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
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
        @if(Session::has('success'))
            <script>
                //function myFunction() {
                alert("Success! Your message was sent.");

            </script>
        @endif
        <img alt="" src="{{ asset('images/astronaut.jpg') }}">
        <div class="mask">
        </div>
        <div class="intro-content">
            <h2 style="text-decoration: none"></h2>
            <h1><span>Hyper</span>Space</h1>
            <!-- <br> -->
            <h1 class="sub-tagline">Software Company</h1>
            <!-- <h2>Give us your money, we'll give you an alien techology</h2> -->
            <p class="social-media">
                <a href="https://www.facebook.com/hyperspace.id/" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
                <a href="https://twitter.com/hyperspace_id" class="fa fa-twitter" data-toggle="tooltip" title="Twitter"></a>
                <a href="#" class="fa fa-google" data-toggle="tooltip" title="Google+"></a>
                <a href="#" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
                <a href="https://www.instagram.com/hyperspace.id/" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>
            </p>

            <!-- Social Media Icons [ END ] -->

        </div>
    </div>

    <!-- ( b ) Navigation Menu -->

    <div class="menu">
        <div class="profile-btn">
            <img alt="" src="{{ asset('images/menu/aboutus.jpg') }}">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-heart"></i>
                </div>
                <div class="col-sm-10">
                    <h2><span>ABOUT</span> US</h2>
                    <h3>Just a wiki, about hyperspace</h3>
                </div>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

        <div class="resume-btn">
            <img alt="" src="{{ asset('images/menu/whoweare2.jpg') }}">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-user-o"></i>
                </div>
                <div class="col-sm-10">
                    <h2>OUR <span>TEAM</span></h2>
                    <h3>Meet our Scientists</h3>
                </div>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

        <div class="portfolio-btn">
            <img alt="" src="{{ asset('images/menu/portfolio.jpg') }}">
            <div class="mask">
            </div>
            <div class="heading col-xs-11 col-xs-offset-1">
                <div class="col-xs-2 hidden-xs">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="col-sm-10">
                    <h2>OUR <span>PORTFOLIO</span> </h2>
                    <h3>See the galaxies we've built</h3>
                </div>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

        <div class="contact-btn">
            <img alt="" src="{{ asset('images/menu/contact.jpg') }}">
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


        <div class="services-container clearfix">
            <h2 class="small-heading">What can we do?</h2>
            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-eyedropper"></i>
                <h3><strong>WEB DESIGN</strong></h3>
                <p>
                  Designing website never been so easy! We have a long time experience of developing company profiles and e-commerces, so whatever website you want to build, spill the idea, we'll make it real!
                </p>
            </div>



            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-code"></i>
                <h3><strong>WEB DEVELOPMENT</strong></h3>
                <p>
                    From a simple Point of Sales to a large scale Enterprise Resource Planning, we would always be ready to help you to solve all your problems.
                </p>
            </div>



            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-eye"></i>
                <h3><strong>GRAPHIC DESIGN</strong></h3>
                <p>
                  Need a logo? Poster maybe? Leaflet? or Assets for your websites? just tell us!
                </p>

            </div>



            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-lightbulb-o"></i>
                <h3><strong>IT CONSULTATION</strong></h3>
                <p>
                    Maybe you need to figure out what is you really needed at some point? Contact us and let us help you with your problem. Godspeed!
                </p>
            </div>



            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-rocket"></i>
                <h3><strong>DEV OPS</strong></h3>
                <p>
                    Setting up servers and deploying your system, we always be ready to help you maintain your application and putting one into your server. We know sometimes it's a pain in the buttock to face that kind of problem.
                </p>
            </div>



            <div class="services col-lg-4 col-md-6 col-sm-4">
                <i class="fa fa-wrench"></i>
                <h3><strong>VPS HOSTING</strong></h3>
                <p>
                    Wanted to be able to integrate all your apps? Let us deploy your apps to the cloud. You just give us the word, we'll take care of the rest!
                </p>
            </div>



        </div>

        <div class="skills clearfix">
            <h2 class="small-heading">Technologies</h2>
            <br>
            <div class="clearfix">
                <div class="container-fluid">
                    <div class="technologies cf">
                        <div class="skill-container col-sm-4 ">
                            <img src="{{asset('images/techs/ubuntu.png')}}" class="img-fluid" alt="ubuntu">
                        </div>
                        <div class="skill-container col-sm-4 ">
                            <img src="{{asset('images/techs/laravel.png')}}" class="img-fluid" alt="laravel">
                        </div>
                        <div class="skill-container col-sm-4 ">
                            <img src="{{asset('images/techs/django.png')}}" class="img-fluid"  alt="django">
                        </div>
                        <div class="skill-container col-sm-4 ">
                            <img src="{{asset('images/techs/swift.png')}}" class="img-fluid" alt="swift">
                        </div>
                        <div class="skill-container col-sm-4 ">
                            <img src="{{asset('images/techs/java.png')}}" class="img-fluid" alt="java">
                        </div>

                        <div class="skill-container col-sm-4 ">
                            <img src="{{asset('images/techs/wordpress.png')}}" class="img-fluid" alt="wordpress">
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <br>

        <!--( C ) Some Facts -->

        <div class="facts clearfix">
            <div class="col-xs-4">
                <h3>PROJECTS DONE</h3>
                <h1>38+</h1>
            </div>
            <div class="col-xs-4">
                <h3>HAPPY CLIENTS</h3>
                <h1>38++</h1>
            </div>
            <div class="col-xs-4">
                <h3>COFFEE CUPS</h3>
                <h1>9999+</h1>
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
            <h2 class="small-heading">Our Scientists</h2>
            @foreach($teams as $team)
                <div class="col-lg-11 col-lg-offset-1">
                    <div class="story-content clearfix">
                        <img alt="" src="{{ Voyager::image( $team->image ) }}" class="col-xs-offset-1 col-sm-offset-0 col-sm-4 col-xs-10">
                        <div class="col-sm-8 col-xs-12">
                            <h3 style="letter-spacing:0.1em;font-size:1.75em;" ><strong>{{ $team->name }}</strong></h3>
                            <h4 style="letter-spacing:0.1em;">{{$team->specialty}}</h4>
                            <!-- <small><i class="fa fa-envelope-o" aria-hidden="true"></i><i>&nbsp;&nbsp;{{ $team->email }}</i></small> -->
                            <hr style="margin: 12px 0px;">
                            <div class="clearfix"></div>
                            <p>{{ $team->quote }}</p>

                            <div class="clearfix"></div>
                            @foreach($team->skills as $skill)
                                <span class="label label-info"> {{$skill->name}}</span>
                            @endforeach
                            <div class="col-xs-12 social-media pull-left" style="text-align: left; margin-top: 10px; margin-left: 0px; padding-left: 0px;">
                                <div class="col-xs-2"><a href="{{ $team->facebook }}" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a></div>
                                <div class="col-xs-2"><a href="{{ $team->twitter }}" class="fa fa-twitter" data-toggle="tooltip" title="Twitter"></a></div>
                                <div class="col-xs-2"><a href="{{ $team->linkedin }}" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a></div>
                                <div class="col-xs-2"><a href="{{ $team->instagram }}" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a></div>
                                <div class="col-xs-2"><a href="mailto:{{$team->email}}" class="fa fa-envelope-o" data-toggle="tooltip" title="Mail Me"></a></div>
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
            <h1>OUR <span>PORTFOLIO</span></h1>
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
                                <img src="{{ Voyager::image( $project->thumbnail('small', 'image') ) }}" alt="">
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
                            <img alt="" src="{{ Voyager::image( $project->thumbnail('medium', 'image') ) }}" class=" hidden-xs">
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
                <h1>38+</h1>
            </div>
            <div class="col-xs-4">
                <h3>HAPPY CLIENTS</h3>
                <h1>38++</h1>
            </div>
            <div class="col-xs-4">
                <h3>COFFEE CUPS</h3>
                <h1>9999+</h1>
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
            <h2 class="small-heading">Give Us The Signal !</h2>

            <div class="contact-form col-sm-11 clearfix">
                <form action="{{ route('message.store') }}" method="post" name="contactForm">

                    {{ csrf_field() }}
                    <fieldset>
                        <div class="col-sm-12">
                            <input id="name" name="name" placeholder="Your Name*" type="text" value="" required>
                        </div>

                        <!-- Name Field [ END ] -->

                        <div class="col-sm-12">
                            <input id="email" name="email" placeholder="Your Email*" type="email" value="" required>
                        </div>

                        <!-- Email Field [ END ] -->

                        <div class="col-xs-12">
                            <textarea cols="5" id="message" name="message" placeholder="Your Message....*" required></textarea>
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

        <div class="google-map" id="google-map">
            <div class="col-*-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.9320612653246!2d110.3508283167991!3d-7.923427763637797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a55744e4e0331%3A0xc7576bd5bf0e3986!2sJl.+Parangtritis%2C+Patalan%2C+Jetis%2C+Bantul%2C+Daerah+Istimewa+Yogyakarta+55781!5e0!3m2!1sen!2sid!4v1523504082636" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

        <div class="contact-details clearfix">
            <h2 class="small-heading">Contact details</h2>
            <div class="contact col-sm-4">
                <p>
                    <i class="fa fa-map-marker fa-4x"></i><br>
                    Jl. Parangtritis KM 14.5, Gaduh, Patalan, Jetis, Bantul, Yogyakarta, Indonesia.
                </p>
            </div>

            <!-- Single Contact Details Item [ END ] -->

            <div class="contact col-sm-4">
                <p>
                    <i class="fa fa-phone fa-4x"></i><br>
                    +62 89 671 945 007
                </p>
            </div>

            <!-- Single Contact Details Item [ END ] -->

            <div class="contact col-sm-4">
                <p>
                    <i class="fa fa-envelope fa-4x"></i><br>
                    marketing@hyperspace.id
                </p>
            </div>


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
<script type="text/javascript" src="{{ asset('js/insta/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/jquery.easypiechart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/jquery.filterizr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/jquery.popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insta/owl.carousel.min.js') }}"></script>
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
