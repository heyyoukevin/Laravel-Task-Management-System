@extends("layout.adminheadfoot")

@section("page-content")


<!DOCTYPE html>
<html lang="en">

<head>
    <title>TASK MANAGEMENT SYSTEM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('images/zay.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    

       <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" background="{{asset('images/qwe1.jpeg')}}">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img class="img-fluid" src="{{asset('images/qwe1.jpeg')}}" width="500" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Web design</b></h1>
                                <h3 class="h2">We design websites, branding, infographics, UX /UI and more! ! !....</h3>
                                <p>
                                We design for all type of websites following the latest web trends. 100% satisfaction guaranteed everytime!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{asset('images/qwe2.png')}}" width="1000" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Mobile App</h1>
                                <h3 class="h2">The perfect balance of aesthetics and functionality! ! !....</h3>
                                <p>
                                The amount of mobile devices in the world will soon exceed the population of Earth itself.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img class="img-fluid" src="{{asset('images/qwe3.jpeg')}}" width="500" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Own Development Team</h1>
                                <h3 class="h2">Reubro delivering stunning IT solutions to major companies! ! !....</h3>
                                <p>
                                Our nearshore and offshore IT outsourcing services are based on one core offering.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">


        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Projects of The Month</h1>
                <p>
                    Go ahead and Explore ! ! !
                </p>
            </div>
        </div>

        <div class="row">

	<div class="col-md-6 col-lg-3 pb-5">
        <div class="h-100 py-5 services-icon-wap shadow">
        <div class="h1 text-success text-center">
	<a><img src="{{asset('images/1a.jpg')}}" class="rounded-circle img-fluid border"></a>
	</div>
    <br>    	
    <center>
            <a class="navbar-brand text-success logo h3 align-self-center" target="_blank" href="http://52.40.210.26:7000/user">JOBTYM</a>
    </center>
        </div>
        </div>

	<div class="col-md-6 col-lg-3 pb-5">
        <div class="h-100 py-5 services-icon-wap shadow">
        <div class="h1 text-success text-center">
	<a><img src="{{asset('images/1b.jpg')}}" class="rounded-circle img-fluid border"></a>
	</div>
    <br>    	
    <center>
            <a class="navbar-brand text-success logo h3 align-self-center" target="_blank" href="http://primecom.mu/index.php">PRIMECOME</a>
    </center>
        </div>
        </div>

	<div class="col-md-6 col-lg-3 pb-5">
        <div class="h-100 py-5 services-icon-wap shadow">
        <div class="h1 text-success text-center">
	<a><img src="{{asset('images/1c.jpg')}}" class="rounded-circle img-fluid border"></a>
	</div>
    <br>    	
    <center>
            <a class="navbar-brand text-success logo h3 align-self-center" target="_blank" href="http://162.243.34.204/alpha/custom-stickers.php">123 STICKERS</a>
    </center>
        </div>
        </div>

	<div class="col-md-6 col-lg-3 pb-5">
        <div class="h-100 py-5 services-icon-wap shadow">
        <div class="h1 text-success text-center">
	<a><img src="{{asset('images/1d.jpg')}}" class="rounded-circle img-fluid border"></a>
	</div>
    <br>    	
    <center>
            <a class="navbar-brand text-success logo h3 align-self-center" target="_blank" href="https://macoscle.org/">CCCU</a>
    </center>
        </div>
        </div>

        </div>


    </section>
    <!-- End Categories of The Month -->


<!-- Modal -->
<section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-black">
                    <h1>About Us</h1>
                    <p style="color:white">Reubro Design is a successful graphic and web design company established in Kerala, India. Our expertise includes copy-writing, graphics & web design, CMS Website, customized web development, eCommerce website, as well as search engine optimization.</p>
                    <h5>OUR COMMITMENT</h5>
                    <p style="color:white">We strive to exceed your expectations, so we are never too busy to return a call or e-mail. That means you will always know the status of your project. Our experience in dealing with various business industries coupled with our love of creative design help us deliver truly outstanding results for our clients on time and on budget.</p>
                    <h5>OUR MISSION</h5>
                    <p style="color:white">To be the leading web & graphics design agency in India in helping SMEs engage and benefit from our expertise in Infocomm Technology, Branding and Marketing.</p>
                    <h5>OUR CORE VALUES</h5>
                    <p style="color:white">Integrity - To be honest with our clients, our employees, our stakeholders, and the people we interact with. One of our principles is in providing clients.</p>


                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/zxc1.png')}}" width="400" height="500" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->



    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Services</h1>
                <p>
                    Servicing In Our Community For Over 40 Years
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Delivery On Time</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Completion on Estimated Time</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                    <h2 class="h5 mt-4 text-center">Privacy & Consistent</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                    <h2 class="h5 mt-4 text-center">24 Hours Service</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->



    <!-- Start Script -->
    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/templatemo.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- End Script -->


</body>
</html>


@endsection