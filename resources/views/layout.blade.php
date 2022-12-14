<!DOCTYPE html>
<html lang="zxx">

<head>
    
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="public/frontend/shop/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/shop/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/shop/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/shop/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/shop/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/shop/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/shop/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/shop/css/style.css" type="text/css">

    <link rel="stylesheet" href="public/frontend/shop/css/sweetalert.css" type="text/css">
</head>

<body style="background-color: rgb(251 251 251)">
   
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="public/frontend/shop/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="public/frontend/shop/img/language.png" alt="">
                <div>Ng??n ng???</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="{{url('lang/vi')}}">VietNamese</a></li>
                    <li><a href="{{url('lang/vi')}}">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> nguyenconghau9084@gmail.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->
    
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> nguyenconghau9084@gmail.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="public/frontend/shop/img/language.png" alt="">
                                <div>Ng??n ng???</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="">VietNamese</a></li>
                                    <li><a href="">English</a></li>
                                </ul>
                            </div>
                            
                            <?php
                            $customer_id = Session::get('customer_id');
                            if($customer_id!=null){
                            ?>
                            <div class="header__top__right__auth">
                                <a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-user"></i> ????ng Xu???t</a>
                            </div>
                            <?php
                            }else{
                                ?>
                                 <div class="header__top__right__auth">
                                    <a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user"></i> ????ng nh???p</a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{URL::to('/trangchu')}}"><img src="{{asset('public/frontend/shop/img/logo2.png')}}" alt="" style='width:66%'></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul style="display: flex">
                            <li class="active"><a href="{{URL::to('/trangchu')}}">@lang('lang.home')</a></li>
                            <li><a href="#">Th????ng Hi???u</a>
                                <ul class="header__menu__dropdown">
                                  
                                    @foreach ($brand as $key=>$brand )
                                    <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id  )}}"> {{$brand ->brand_name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="{{URL::to('/contact')}}">Li??n H???</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-bag"></i> </a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh M???c</span>
                        </div>
                        <ul >
                            @foreach ($category as $key=>$cate )
                            <li><a href="{{URL::to('/Danh-muc-san-pham/'.$cate->category_id  )}}"> {{$cate ->category_name}}</a></li>
                            @endforeach
                           
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{URL::to('/tim-kiem')}}" method="POST">
                                {{ csrf_field() }}
                               
                                <input type="text" name="keywords_submit" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <a href="tel:+84856509084" class="telephone"><i class="fa fa-phone"  ></i></a>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 856.509.084</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    @yield('banner1')
    <!-- Categories Section Begin -->
    @yield('banner2')
    <!-- Categories Section End -->
    
    <!-- Featured Section Begin -->
   @yield('conten')
   @yield('conten_category')
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="public/frontend/shop/img/banner/637753063669983048_F-H1_800x300.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="public/frontend/shop/img/banner/637739032723404994_F-H1_800x300.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="public/frontend/shop/img/sale1.png" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">So s??nh loa JBL Xtreme v?? Xtreme 2 ??? C??ng d???ng c???a loa JBL Xtreme</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="public/frontend/shop/img/sale4.png" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">gi???m 500.000 ?????ng cho Laptop, PC, M??n h??nh thanh to??n b???ng th??? t??n d???ng Sacombank</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="public/frontend/shop/img/sale3.png" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="{{URL::to('/trangchu')}}"><img style="width:66%" src="public/frontend/shop/img/logo2.png" alt=""></a>
                        </div>
                        <ul>
                        <li>Address: Qu???n 12 , TP.HCM</li>
                            <li>Phone: +84 856.509.084</li>
                            <li>Email: nguyenconghau9084@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>?? NCH. All right reserved</p></div>
                        <div class="footer__copyright__payment"><img src="public/frontend/shop/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="public/frontend/shop/js/jquery-3.3.1.min.js"></script>
    <script src="public/frontend/shop/js/bootstrap.min.js"></script>
    <script src="public/frontend/shop/js/jquery.nice-select.min.js"></script>
    <script src="public/frontend/shop/js/jquery-ui.min.js"></script>
    <script src="public/frontend/shop/js/jquery.slicknav.js"></script>
    <script src="public/frontend/shop/js/mixitup.min.js"></script>
    <script src="public/frontend/shop/js/owl.carousel.min.js"></script>
    <script src="public/frontend/shop/js/main.js"></script>
    <script src="public/frontend/shop/js/sweetalert.js"></script>
    <script type="text/javascript" src="https://itexpress.vn/API/files/it.snow.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.send_order').click(function(){
               
                swal({
                        title: "X??c nh???n mua h??ng",
                        text: "????n h??ng s??? kh??ng ???????c ho??n l???i sau khi ?????ng ?? ",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "?????ng ??!",
                        cancelButtonText: "No, cancel!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                        },
                        function(isConfirm){
                            if (isConfirm) {
                                
                                var shipping_email = $('.shipping_email').val();
                                var shipping_name = $('.shipping_name').val();
                                var shipping_address = $('.shipping_address').val();
                                var shipping_phone = $('.shipping_phone').val();
                                var shipping_note = $('.shipping_note').val();
                                var shipping_method = $('.payment_select').val();

                                var _token = $('input[name="_token"]').val();
                                $.ajax({
                                    url: '{{url('/confirm-order')}}',
                                    method: 'POST',
                                    data:{shipping_email:shipping_email,shipping_name:shipping_name,
                                    shipping_address:shipping_address,shipping_phone:shipping_phone,
                                    shipping_note:shipping_note,shipping_method:shipping_method,_token:_token},
                                    success:function(){
                                        swal("Ho??n Th??nh!", "????n h??ng c???a b???n ???? g???i th??nh c??ng", "success");

                                    }
                                });
                                window.setTimeout(function(){
                                    location.reload();
                                }, 3000);
                            } else {
                                swal("Cancelled", "????n h??ng ch??a ???????c g???i ", "error");
                            }
                      
                        });




});
});

    </script>
   
    <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                    success:function(){
                        
                        swal({
                                title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                showCancelButton: true,
                                cancelButtonText: "Xem ti???p",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "??i ?????n gi??? h??ng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/gio-hang')}}";
                            });


                        }

});
});
});

    </script>
</body>

</html>