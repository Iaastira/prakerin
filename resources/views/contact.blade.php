<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>GAVI- Gaming Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset ('assets/egames/img/core-img/favicon.ico')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/egames/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    @include('layouts.front.header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/23.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="contact-content mb-100">
                                <a href="#" class="mb-50 d-block"><img src="{{asset ('assets/egames/img/core-img/logo.png')}}" alt=""></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="contact-content mb-100">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="contact-content mb-100">
                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="title">
                                        <p>Address</p>
                                    </div>
                                    <p>1481 Creekside Lane Avila Beach, CA 931</p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="title">
                                        <p>Phone</p>
                                    </div>
                                    <p>+53 345 7953 32453</p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="title">
                                        <p>E-mail</p>
                                    </div>
                                    <p nekrosp8@gmail.com </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12">
                    <h4 class="mb-70">Get In Touch</h4>

                    <!-- Contact Form -->
                    <div class="contact-form-area mb-100">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="name" placeholder="Name*">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" class="form-control" id="email" placeholder="Email*">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn egames-btn w-100" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Google Maps -->
                     
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.front.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset ('assets/egames/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset ('assets/egames/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset ('assets/egames/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset ('assets/egames/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset ('assets/egames/js/active.js')}}"></script>
</body>

</html>
