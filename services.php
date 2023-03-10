<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> crocus travel - Travel Agency HTML Template</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="css/flight.css" rel="stylesheet" type="text/css">

    <link href="font/flaticon.css" rel="stylesheet" type="text/css">

    <link href="css/plugin.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- <div id="preloader">
        <div id="status"></div>
    </div> -->


    <?php 
        include 'header.php';
    ?>

<!-- 
    <header>
        <div class="upper-head clearfix">
            <div class="container py-2">
                <div class="contact-info">
                    <p><i class="flaticon-phone-call"></i> Phone: (012)-345-6789</p>
                    <p><i class="flaticon-mail"></i> Mail: support@gmail.com
                    </p>
                </div>
                <div class="login-btn pull-right">

                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </header>


    <div class="navigation">
        <div class="container">
            <div class="navigation-content">
                <div class="header_menu">

                    <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                        <div class="logo pull-left">
                            <a href="index.html"><img alt="Image" src="images/CrocusnewLogo.png" /></a>
                        </div>
                        <div id="navbar" class="navbar-nav-wrapper">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="about.html">About <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li>
                                            <a href="#">Why crocus travel</a>
                                        </li>
                                        <li>
                                            <a href="tour-detail.html">Crocus travel expo management</a>
                                        </li>
                                        <li>
                                            <a href="booking.html">Quality services</a>
                                        </li>
                                        <li><a href="price-list.html">Crocus travel team</a></li>
                                        <li><a href="error.html">Client testimonials</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="destination.html">Destination</a>
                                </li>
                                <li class="active">
                                    <a href="services.html">Services</a>
                                </li>
                                <li>
                                    <a href="tour-packages.html">Tour Packages</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <div id="slicknav-mobile"></div>
                    </nav>
                </div>
            </div>
        </div>
    </div> -->


    <section class="swiper-banner">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(images/slider/slider9.jpg)">
                        <div class="swiper-content" data-animation="animated fadeInDown">
                            <h2 class="white">Build connection with us</h2>
                            <h1><a href="#" class="white">Fill the following form & get services</a></h1>
                            <a href="flight-detail.html" class="btn-blue btn-red">View Our Tour</a>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(images/slider/slider3.jpg)">
                        <div class="swiper-content" data-animation="animated fadeInRight">
                            <h2 class="white">Book a ticket & Just Leave</h2>
                            <h1><a href="#" class="white">Discover Your Right Places With Us</a></h1>
                            <a href="flight-detail.html" class="btn-blue btn-red">View Our Tour</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="overlay"></div>
        </div>
    </section>

    <section class="mt_search">
        <div class="container">
            <div style="background-color: #FF8B24;border-radius: 25px;padding: 25px;" class="search-content-slider">
                <div class="section-title text-center">
                    <h2 style="color: white;">Submit Query</h2>
                    <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="table_item">
                                <div class="form-group">
                                    <input type="text" placeholder="First name">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="table_item">
                                <div class="form-group">
                                    <input type="text" placeholder="Last name">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="table_item">
                                <div class="form-group">
                                    <input type="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="table_item">
                                <div class="form-group">
                                    <input type="number" placeholder="Number">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="table_item">
                                <div class="form-group">
                                    <input type="text" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="table_item">
                                <div class="search">
                                    <a href="#" class="btn-blue btn-style-1">SUBMIT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="top-destination">
        <div class="container">
            <div class="section-title text-center">
                <h2>What we offer</h2>

            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="destination-item box-item">
                        <div class="destination-image">
                            <img src="images/flight/plane1.jpg" alt="Image">
                        </div>
                        <div class="destination-content">
                            <h3><a href="tour-detail.html">Service name</a></h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque nobis aperiam qui sunt impedit suscipit pariatur neque perferendis, sapiente mollitia beatae autem similique odit ipsam exercitationem amet velit facilis magnam minus labore magni fugiat? Itaque tempora repudiandae dolorem beatae sint praesentium nisi vero provident, earum sapiente ullam recusanda</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="destination-item box-item">
                        <div class="destination-image">
                            <img src="images/flight/plane2.jpg" alt="Image">
                        </div>
                        <div class="destination-content">
                            <h3><a href="flight-detail.html">Service name</a></h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque nobis aperiam qui sunt impedit suscipit pariatur neque perferendis, sapiente mollitia beatae autem similique odit ipsam exercitationem amet velit facilis magnam minus labore magni fugiat? Itaque tempora repudiandae dolorem beatae sint praesentium nisi vero provident, earum sapiente ullam recusanda</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="destination-item box-item">
                        <div class="destination-image">
                            <img src="images/flight/plane3.jpg" alt="Image">
                        </div>
                        <div class="destination-content">
                            <h3><a href="flight-detail.html">Service name</a></h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque nobis aperiam qui sunt impedit suscipit pariatur neque perferendis, sapiente mollitia beatae autem similique odit ipsam exercitationem amet velit facilis magnam minus labore magni fugiat? Itaque tempora repudiandae dolorem beatae sint praesentium nisi vero provident, earum sapiente ullam recusanda</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="destination-item box-item">
                        <div class="destination-image">
                            <img src="images/flight/plane6.jpg" alt="Image">
                        </div>
                        <div class="destination-content">
                            <h3><a href="flight-detail.html">Service name</a></h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque nobis aperiam qui sunt impedit suscipit pariatur neque perferendis, sapiente mollitia beatae autem similique odit ipsam exercitationem amet velit facilis magnam minus labore magni fugiat? Itaque tempora repudiandae dolorem beatae sint praesentium nisi vero provident, earum sapiente ullam recusanda</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="destination-item box-item">
                        <div class="destination-image">
                            <img src="images/flight/plane4.jpg" alt="Image">
                        </div>
                        <div class="destination-content">
                            <h3><a href="flight-detail.html">Service name</a></h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque nobis aperiam qui sunt impedit suscipit pariatur neque perferendis, sapiente mollitia beatae autem similique odit ipsam exercitationem amet velit facilis magnam minus labore magni fugiat? Itaque tempora repudiandae dolorem beatae sint praesentium nisi vero provident, earum sapiente ullam recusanda</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="destination-item box-item">
                        <div class="destination-image">
                            <img src="images/flight/plane5.jpg" alt="Image">
                        </div>
                        <div class="destination-content">
                            <h3><a href="flight-detail.html">Service name</a></h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque nobis aperiam qui sunt impedit suscipit pariatur neque perferendis, sapiente mollitia beatae autem similique odit ipsam exercitationem amet velit facilis magnam minus labore magni fugiat? Itaque tempora repudiandae dolorem beatae sint praesentium nisi vero provident, earum sapiente ullam recusanda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="footer-upper">
            <div class="container">
                <div class="footer-links">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer-about footer-margin">
                                <div class="about-logo">
                                    <img src="images/CrocusnewLogo.png" alt="Image">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt.</p>
                                <div class="about-location">
                                    <ul>
                                        <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> Location</li>
                                        <li><i class="flaticon-phone-call"></i> (012)-345-6789</li>
                                        <li><i class="flaticon-mail"></i> <a href="/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="8afee5fff8e4fef8ebfcefe6cafeeff9fee7ebe3e6a4e9e5e7">[email&#160;protected]</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-social-links">
                                    <ul>
                                        <li class="social-icon"><a href="#"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href="#"><i class="fa fa-instagram"
                                                    aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href="#"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href="#"><i class="fa fa-youtube"
                                                    aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href="#"><i class="fa fa-google"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-links-list footer-margin">
                                <h3>Browse Tour</h3>
                                <ul>
                                    <li><a href="#">Cyclades <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#">North Ionian <i class="fa fa-angle-right"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#">Sporades <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#">View all Destinations <i class="fa fa-angle-right"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#">View all Yatchs <i class="fa fa-angle-right"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#">View all Cruises <i class="fa fa-angle-right"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-recent-post footer-margin">
                                <h3>Recent Posts</h3>
                                <ul>
                                    <li>
                                        <div class="recent-post-item">
                                            <div class="recent-post-image">
                                                <img src="images/bucket1.jpg" alt="Image">
                                            </div>
                                            <div class="recent-post-content">
                                                <h4><a href="#">A trip to heaven</a></h4>
                                                <p>June 17, 2018</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="recent-post-item">
                                            <div class="recent-post-image">
                                                <img src="images/bucket2.jpg" alt="Image">
                                            </div>
                                            <div class="recent-post-content">
                                                <h4><a href="#">Diving in Atlantic</a></h4>
                                                <p>June 17, 2018</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="recent-post-item">
                                            <div class="recent-post-image">
                                                <img src="images/bucket3.jpg" alt="Image">
                                            </div>
                                            <div class="recent-post-content">
                                                <h4><a href="#">Travellers History</a></h4>
                                                <p>June 17, 2018</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-links-list">
                                <div class="footer-instagram">
                                    <h3>Instagram</h3>
                                    <ul>
                                        <li><img src="images/insta1.jpg" alt="Image"></li>
                                        <li><img src="images/insta2.jpg" alt="Image"></li>
                                        <li><img src="images/insta3.jpg" alt="Image"></li>
                                        <li><img src="images/insta4.jpg" alt="Image"></li>
                                        <li><img src="images/insta5.jpg" alt="Image"></li>
                                        <li><img src="images/insta6.jpg" alt="Image"></li>
                                        <li><img src="images/insta7.jpg" alt="Image"></li>
                                        <li><img src="images/insta8.jpg" alt="Image"></li>
                                        <li><img src="images/insta9.jpg" alt="Image"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright-content">
                            <p>2023 <i class="fa fa-copyright" aria-hidden="true"></i> crocus travel by <a
                                    href="#" target="_blank">solo developer</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="payment-content">
                            <ul>
                                <li>We Accept</li>
                                <li>
                                    <img src="images/payment1.png" alt="Image">
                                </li>
                                <li>
                                    <img src="images/payment2.png" alt="Image">
                                </li>
                                <li>
                                    <img src="images/payment3.png" alt="Image">
                                </li>
                                <li>
                                    <img src="images/payment4.png" alt="Image">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div id="back-to-top">
        <a href="#"></a>
    </div>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/custom-accordian.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/custom-swiper2.js"></script>
    <script>(function () { var js = "window['__CF$cv$params']={r:'78d86a2d297a84f2',m:'0qE9sLGmqbo8vJ1QQc8ZDx_XOo.v39srLhKnBsW0z0I-1674391820-0-AXf1Rb5FzB0XxdxHocm9+py1SDyVAdHnnBd1tWsvTG3xebLBobNtRi25BjJHqju/WQsmz3Wd6zApLZsju/YhkCAHg3rowahlhT/9Q7zj755vcXeACJohaxzauXaYAYPqltgbHUTBJzhz8ZGPWSFWAJEVYMyGmCzdteNPl4WKxXC9',s:[0x2158a34afd,0x4e8a98c193],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);"; var _0xh = document.createElement('iframe'); _0xh.height = 1; _0xh.width = 1; _0xh.style.position = 'absolute'; _0xh.style.top = 0; _0xh.style.left = 0; _0xh.style.border = 'none'; _0xh.style.visibility = 'hidden'; document.body.appendChild(_0xh); function handler() { var _0xi = _0xh.contentDocument || _0xh.contentWindow.document; if (_0xi) { var _0xj = _0xi.createElement('script'); _0xj.nonce = ''; _0xj.innerHTML = js; _0xi.getElementsByTagName('head')[0].appendChild(_0xj); } } if (document.readyState !== 'loading') { handler(); } else if (window.addEventListener) { document.addEventListener('DOMContentLoaded', handler); } else { var prev = document.onreadystatechange || function () { }; document.onreadystatechange = function (e) { prev(e); if (document.readyState !== 'loading') { document.onreadystatechange = prev; handler(); } }; } })();</script>
</body>

</html>