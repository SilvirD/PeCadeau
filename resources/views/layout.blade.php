<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petit Cadeau</title>
    <!-- <link href="{{asset('public/Frontend/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{asset('public/Frontend/css/style.css')}}" rel='stylesheet' type='text/css' /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="{{asset('public/Frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container">

            <div class="row">
                <nav id="home-nav">
                    <ul class="main-menu">
                        <li><a href="{{URL::to('/trang-chu')}}"><i class="fas fa-home"></i>Home</a></li>
                        <li><a href="#footer">Contact</a></li>
                        <li>
                            <div class="menu-trigger">
                                <span class="span-1"></span>
                                <span class="span-2"></span>
                                <span class="span-3"></span>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!--search-->
                <div class="search-box">
                    <form action="{{URL::to('/tim-kiem')}}" method="POST" class="form2">
                        {{csrf_field()}}
                        <input type="text" class="sb-text" name="keywords_submit" placeholder="Search">
                        <button class="sb-sbm" type="submit" name="search_items">
                            <i class="fas fa-search"></i>
                        </button>

                        <a href="{{ session('acc')?URL::to('/infor'):URL::to('/login-checkout')}}"><i
                                class="fas fa-user-circle"></i><?php echo session('acc')?session('acc')->acc_name:' Log in';?></a>
                        <a href="{{URL::to('/logout-checkout')}}" <?php echo session('acc')?'':'hidden';?>><i
                                class="fas fa-sign-out-alt" style="margin-left: 10px;"></i></i>Log out</a>
                        <!-- Check Login-logout -->
                        <!-- <?php
                          //  $customer_id = Session::get('acc_id');
                        // if($customer_id != NULL) {
                        ?>
                        
                        <a href="{{URL::to('/logout-checkout')}}"><i class="fas fa-user-circle"
                                style="color:black"></i> Log out</a>
                        <?php
                        //}else{
                        ?>
                        <a href="{{URL::to('/login-checkout')}}"><i class="fas fa-user-circle"
                                style="color:black"></i> Log in</a>
                        <?php
                        //}
                        ?> -->
                        <!-- end check login-logout -->

                        <!-- Check Payment -->
                        <?php
                            $customer_id = Session::get('acc_id');
                            $delivery_id = Session::get('deli_id');
                            if($customer_id != NULL && $delivery_id == NULL) {
                        ?>
                        <a href="{{URL::to('/checkout')}}"><i class="fas fa-crosshairs"
                                style="color:black; margin-left:15px"></i> Payment</a>

                        <?php
                            }elseif($customer_id != NULL && $delivery_id != NULL){
                        ?>
                        <a href="{{URL::to('/payment')}}"><i class="fas fa-crosshairs"
                                style="color:black; margin-left:15px"></i> Payment</a>

                        <?php
                        }else{
                        ?>
                        <a href="{{URL::to('/login-checkout')}}"><i class="fas fa-crosshairs"
                                style="color:black; margin-left:15px"></i> Payment</a>
                        <?php
                        }
                        ?>
                        <!-- end check payment -->

                        <a href="{{URL::to('/show-cart')}}"><i class="fas fa-shopping-cart"
                                style="color:black; margin-left:15px"></i> Cart</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="menu-container">
            <div class="container">
                <ul id="menu" class="clearfix">
                    <li>
                        <a href="#">Decorations</a>
                        <ul class="sub-menu">
                            <li><a href="{{URL::to('/category/12')}}">Flowers & Plants</a></li>
                            <li><a href="{{URL::to('/category/13')}}">Lamps</a></li>
                            <li><a href="{{URL::to('/category/14')}}">Others</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Kitchen</a>
                        <ul class="sub-menu">
                            <li><a href="{{URL::to('/category/9')}}">Dishes</a></li>
                            <li><a href="{{URL::to('/category/10')}}">Pot, Teapot, Tray</a></li>
                            <li><a href="{{URL::to('/category/11')}}">Accessories</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Personal Items</a>
                        <ul class="sub-menu">
                            <li><a href="{{URL::to('/category/2')}}">Bracelet</a></li>
                            <li><a href="{{URL::to('/category/1')}}">Tote Bag</a></li>
                            <li><a href="{{URL::to('/category/3')}}">Others</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Cups</a>
                        <ul class="sub-menu">
                            <li><a href="{{URL::to('/category/4')}}">Cup</a></li>
                            <li><a href="{{URL::to('/category/5')}}">Glass</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Relax</a>
                        <ul class="sub-menu">
                            <li><a href="{{URL::to('/category/6')}}">Scented Candles</a></li>
                            <li><a href="{{URL::to('/category/7')}}">Essential Oils</a></li>
                            <li><a href="{{URL::to('/category/8')}}">Others</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </header>
    <section id="hero-image">
        <div class="hero-content">
            <h1>Petit <br> Cadeau</h1>
            <p>For the perfect relative</p>
        </div>
        <a href="{{URL::to('/all-product')}}" class="btn-WN1">Watch now</a>
    </section>
    @yield('content')
    <section id="introduce2" class="section-padding">
        <div id="opening-time" class="container text-center">
            <h2 class="title">Opening Hours</h2>
            <p class="sub-title">Mon - Fri: 9am - 6pm</p>
            <p class="sub-title">Sat: 10am - 2pm</p>
            <p class="sub-title">Sun: Closed</p>
        </div>
    </section>
    <!--footer-->
    <footer class="soction-padding" id="footer">
        <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.101664116635!2d105.80194586424538!3d21.028617793160613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab424a50fff9%3A0xbe3a7f3670c0a45f!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBHaWFvIHRow7RuZyBW4bqtbiB04bqjaSAoVVRDKQ!5e0!3m2!1svi!2sus!4v1604281379331!5m2!1svi!2sus"
            width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        <div class="contact">
            <p class="sub-ct">
                <span>Phone: +84359280808</span>
            </p>
            <p class="sub-ct">
                <span>Email: kingofpoppro@gmail.com</span>
            </p>
        </div>
        <div class="social-icons">
            <ul>
                <li><a href="https://www.facebook.com/ALittleLeafHomedecor"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li><a href="https://twitter.com/home"><i class="fab fa-twitter-square"></i></a></li>
                <li><a href="https://alittleleaf.com.vn/"><i class="fas fa-link"></i></a></li>
            </ul>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script>
    $(document).ready(function() {
        // code Jquery

        //menu
        $(".menu-trigger").click(function() {
            $(".menu-container").slideToggle();
        });

        //search
        $(".sb-sbm").click(function(e) {
            if ($(".sb-text").val().length <= 0) {
                e.preventDefault();
            }
            $(".sb-text").toggleClass("open");
        });
        //light-box
        $('.grid-album .grid-item').children('img').click(function() {
            var lb_img = $(this).attr('src');
            $('html').addClass('overflow-hidden');
            $('body').addClass('body-no-scoll');
            $('body').append('<div class="light-box-page"><div class="light-box-img"><img src="' +
                lb_img + '" alt=""></div></div>')
            $('body').on('click', '.light-box-page', function() {
                $('html').removeClass('overflow-hidden');
                $('.light-box-page').remove();
            });
        });
        //detail-img
        $('.grid-album1 .grid-item1').children('img').click(function() {
            var lb_img = $(this).attr('src');
            $('html').addClass('overflow-hidden');
            $('body').addClass('body-no-scoll');
            $('body').append('<div class="light-box-page"><div class="light-box-img"><img src="' +
                lb_img + '" alt=""></div></div>')
            $('body').on('click', '.light-box-page', function() {
                $('html').removeClass('overflow-hidden');
                $('.light-box-page').remove();
            });
        });
    });
    </script>

</body>

</html>