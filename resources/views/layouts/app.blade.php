<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('formimages/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('formvendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('formfonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('formfonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('formvendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('formvendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('formvendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('formvendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('formvendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('formcss/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('formcss/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<section id="top">
    <div class="container-fluid">
        <div class="row">
            <table class="table table-bordered">
                <tr>
                    <td>
                        Phone:123456789
                    </td>
                    <td>
                        Email:UAE@Intercontinentalautomotives.com
                    </td>
                    <td style="float: right">
                        <input type="text">
                        Search <span class="glyphicon glyphicon-search"></span>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</section>

<section id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('images/logo.png')}}" alt="" style="width:320px;height: 56px;margin-top: 0px">
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tr>
                        <th>
                            Brands
                        </th>
                        <th>
                            Warehouse
                        </th>
                        <th>
                            About Us
                        </th>
                        <th>
                            Contact Us
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="logo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <h3 style="font-family:SansSerif;text-align: center ">Intercontinental Automotive</h3>,<br> <h4 style="font-family:SansSerif;text-align: center ">supplies Genuine and world leading brand Aftermarket Auto Parts</h4>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <img src="{{asset('images/main.jpg')}}" alt="" class="img-fluid img-thumbnail" style="width: 1600px;height: 400px">
            </div>
        </div>
    </div>
</div>





<section id="contact-form">
    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" action="contact-us" method="post">
                @csrf
				<span class="contact100-form-title">
					Send Us A Message
				</span>

                <label class="label-input100" for="first-name">Tell us your name *</label>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                    <input id="first-name" class="input100" type="text" name="firstname" placeholder="First name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                    <input class="input100" type="text" name="lastname" placeholder="Last name">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="email">Enter your email *</label>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="phone">Enter phone number</label>
                <div class="wrap-input100">
                    <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="message">Message *</label>
                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn" type="submit">
                        Send Message
                    </button>
                </div>
            </form>

            <div class="contact100-more flex-col-c-m" style="background-image: url('formimages/bg-01.jpg');">
                <div class="flex-w size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-map-marker"></span>
                    </div>

                    <div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

                        <span class="txt2">
							InterContinental Automotive Parts UAE
						</span>
                    </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>

                    <div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

                        <span class="txt3">
							+1 800 1236879
						</span>
                    </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-envelope"></span>
                    </div>

                    <div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

                        <span class="txt3">
							UAE@Intercontinentalautomotives.com
						</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="dropDownSelect1"></div>
</section>



<!-- Footer -->
<footer class="page-footer font-small indigo">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">OFFICE AND WAREHOUSE</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Japan</a>
                    </li>
                    <li>
                        <a href="#!">USA</a>
                    </li>
                    <li>
                        <a href="#!">South Korea</a>
                    </li>
                    <li>
                        <a href="#!">United Arab</a>
                    </li>
                    <li>
                        <a href="#!">Emirates</a>
                    </li>
                    <li>
                        <a href="#!">Russia</a>
                    </li>
                    <li>
                        <a href="#!">Germany</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">SHIPMENT</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">	Jordon</a>
                    </li>
                    <li>
                        <a href="#!">	Lebanon</a>
                    </li>
                    <li>
                        <a href="#!">	Russia</a>
                    </li>
                    <li>
                        <a href="#!">	Kazakhstan</a>
                    </li>
                    <li>
                        <a href="#!">Ukraine</a>
                    </li>
                    <li>
                        <a href="#!">		Uzbekistan</a>
                    </li>
                    <li>
                        <a href="#!">	Tajikistan</a>
                    </li>
                    <li>
                        <a href="#!">	Iraq</a>
                    </li>
                    <li>
                        <a href="#!">		United States</a>
                    </li>
                    <li>
                        <a href="#!">Canada</a>
                    </li>
                    <li>
                        <a href="#!">		Egypt <li>
                        <a href="#!">		Morocco</a>
                    </li>
                    <li>
                        <a href="#!">		Yemen</a>
                    </li>
                    <li>
                        <a href="#!">		Oman</a>
                    </li>
                    <li>
                        <a href="#!">		Suadi Arabia</a>
                    </li>
                    <li>
                        <a href="#!">	Tunisia</a>
                    </li>
                    <li>
                        <a href="#!">		Libya</a>
                    </li>
                    <li>
                        <a href="#!">		Mexico and all South American Countries</a>
                    </li>
                    <li>
                        <a href="#!">		Nigeria and all African Countries</a>
                    </li>

                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">VISITORS</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Sweden</a>
                    </li>
                    <li>
                        <a href="#!">USA</a>
                    </li>
                    <li>
                        <a href="#!">Canada</a>
                    </li>
                    <li>
                        <a href="#!">Africa</a>
                    </li>
                    <li>
                        <a href="#!">UAE</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Follow Us</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> UAE@Intercontinentalautomotives.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->




</body>
</html>
<!--===============================================================================================-->
<script src="formvendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="formvendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="formvendor/bootstrap/js/popper.js"></script>
<script src="formvendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="formvendor/select2/select2.min.js"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="{{asset('formvendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('formvendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('formvendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('formjs/main.js')}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>