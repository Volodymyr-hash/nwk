<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles/responsive.css')}}">
    <title>Работа Nashi v Katowice</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url({{asset('css/styles/bootstrap4/bootstrap.min.css')}});
        @import url({{asset('css/styles/work/css/default-assets/classy-nav.css')}});
        @import url({{asset('css/styles/work/css/nice-select.css')}});
        @import url({{asset('css/styles/work/css/jquery-ui.min.css')}});
    </style>
    <style>
        /*********footer*******************/
        . kilimanjaro_area {
            position: relative;
            z-index: 1;
        }
        .foo_top_header_one {
            background-color: #15151e;
            color: #fff;
        }
        .section_padding_100_70 {
            padding-top: 100px;
            padding-bottom: 70px;
        }
        .foo_top_header_one {
            color: #fff;
        }.kilimanjaro_part {
             margin-bottom: 30px;
         }
        .foo_top_header_one .kilimanjaro_part > h5 {
            color: #fff;
        }
        .kilimanjaro_part h4, .kilimanjaro_part h5 {
            margin-bottom: 30px;
        }
        .kilimanjaro_single_contact_info > p, .kilimanjaro_single_contact_info > h5, .kilimanjaro_blog_area > a, .foo_top_header_one .kilimanjaro_part > p {
            color: rgba(255,255,255,.5);
        }
        p, ul li, ol li {
            font-weight: 300;
        }
        ul {
            margin: 0;
            padding: 0;
        }
        .kilimanjaro_bottom_header_one {
            background-color: #111;
        }
        .section_padding_50 {
            padding: 50px 0;
        }
        .kilimanjaro_bottom_header_one p {
            color: #fff;
            margin: 0;
        }
        p, ul li, ol li {
            font-weight: 300;
        }
        .kilimanjaro_bottom_header_one a {
            color: inherit;
            font-size: 14px;
        }
        a, h1, h2, h3, h4, h5, h6 {
            font-weight: 400;
        }
        .m-top-15 {
            margin-top: 15px;
        }
        ul {
            margin: 0;
            padding: 0;
        }

        .kilimanjaro_widget > li {
            display: inline-block;
        }
        p, ul li, ol li {
            font-weight: 300;
        }
        ol li, ul li {
            list-style: outside none none;
        }
        .kilimanjaro_widget a {
            border: 1px solid #333;
            border-radius: 6px;
            color: #888;
            display: inline-block;
            font-size: 13px;
            margin-bottom: 4px;
            padding: 7px 12px;
        }
        ul {
            margin: 0;
            padding: 0;
        }
        .kilimanjaro_links a {
            border-bottom: 1px solid #333;

            display: block;
            font-size: 13px;
            margin-bottom: 5px;
            padding-bottom: 10px;
        }
        .kilimanjaro_links a {

            font-size: 13px;
        }
        top-15 {
            margin-top: 15px;
        }
        .foo_top_header_one .kilimanjaro_part > h5 {
            color: #fff;
        }
        .kilimanjaro_part h4, .kilimanjaro_part h5 {
            margin-bottom: 30px;
        }
        .kilimanjaro_social_links > li {
            display: inline-block;
        }
        p, ul li, ol li {
            font-weight: 300;
        }
        .kilimanjaro_social_links a {
            border: 1px solid #333;
            border-radius: 6px;

            display: inline-block;
            font-size: 13px;
            margin-bottom: 3px;
            padding: 7px 12px;
        }
        .kilimanjaro_blog_area .kilimanjaro_date {
            color: #27ae60;
            font-size: 13px;
            margin-bottom: 5px;
        }
        .kilimanjaro_blog_area > p {
            color: rgba(255,255,255,.5);
            line-height: 1.3;
            margin-bottom: 0;
        }
        .kilimanjaro_works > a {
            display: inline-block;
            float: left;
            position: relative;
            width: 33.33333333%;
            z-index: 1;
        }
        .kilimanjaro_thumb {
            left: 0;
            position: absolute;
            top: 0;
            width: 75px;
        }
        .kilimanjaro_links a i {
            padding-right: 10px;
        }
        /* :: 18.0 Footer Area CSS */

        .footer_area {
            position: relative;
            z-index: 1;
        }
        .footer_bottom p > i,
        .footer_bottom p > a:hover {
            color: #27ae60;
        }

        .social_links_area {
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 50px 0 30px 0;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        .social_links_area > a:hover {
            color: #27ae60;
        }

        .inline-style .social_links_area > a:hover {
            background-color: transparent;
            color: #27ae60;
            border: 0px solid transparent;
        }
        .single_feature:hover .feature_text h4 {
            color: #27ae60;
        }
        .kilimanjaro_blog_area {
            border-bottom: 1px solid #333;
            margin-bottom: 15px;
            padding: 0 0 15px 90px;
            position: relative;
            z-index: 1;
        }
        .kilimanjaro_links a {
            border-bottom: 1px solid #333;

            display: block;
            font-size: 13px;
            margin-bottom: 5px;
            padding-bottom: 10px;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/styles/praca.css')}}" type="text/css">
</head>

<body>
<div class="super_container">
    <header style="background-color: black; opacity: 0.9" class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo"><a href="{{url('/')}}">Nashi v Katowice</a></div>
                        <nav class="main_nav" style="margin-left: 200px">
                            <ul>
                                <li class="active"><a href="{{url('work/list')}}">РАБОТА</a></li>
                             <!--   <li><a href="{{url('places')}}">УСЛУГИ</a></li>  -->
                                <li><a href="{{url('archive')}}">СТАТЫИ</a></li>
                                <li><a href="{{url('contact')}}">КОНТАКТ</a></li>
                             <!--   <li><a href="{{url('team')}}">О НАС</a></li>   -->
                            </ul>
                        </nav>
                        <div class="hamburger ml-auto menu_mm">
                            <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu flex flex-column align-items-center justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="logo menu_mm"><a href="{{url('/')}}">Nashi v Katowcie</a></div>
        <nav class="menu_nav">
            <ul  class="menu_mm">
                <li class="menu_mm"><a href="{{url('work/list')}}">РАБОТА</a></li>
             <!--   <li class="menu_mm"><a href="{{url('places')}}">УСЛУГИ</a></li>  -->
                <li class="menu_mm"><a href="{{url('archive')}}">СТАТЫИ</a></li>
                <li class="menu_mm"><a href="{{url('contact')}}">КОНТАКТ</a></li>
                <li class="menu_mm"><a href="{{url('team')}}">О НАС</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- **** Breadcrumb Area End **** -->

<!-- **** Sale area Start **** -->
<section class="rehome-house-sale-area section-padding-80 mt-50">
    <div class="container">
        <div class="row">
           @foreach($works as $work)
            <div class="ol-12 col-md-6 col-lg-4">
                <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                    <!-- Property Thumb -->
                    <div class="property-thumb">
                        <img src="{{asset('storage/'. $work->work_link)}}" alt="">
                    </div>

                    <!-- Property Description -->
                    <div class="property-desc-area">
                        <!-- Property Title & Seller -->
                        <div class="property-title-seller d-flex justify-content-between">
                            <!-- Title -->
                            <div class="property-title">
                                <h4 class="text-black">{{$work->stanowisko}}</h4>
                                <p><i class="fa fa-map-marker " aria-hidden="true"></i> {{ $work->miasto}}</p>
                            </div>
                            <!-- Seller -->
                            <div class="property-seller">
                                <p>Название фирми:</p>
                                <h6 style="font-weight: bold;" class="text-black">{{$work->nazwa_agencji_firmy}}</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class="flex-wrap">
                            <p>Ставка/год: <span style="color: #0a0a0a; font-weight: bold">{{$work->stawka}}</span></p>
                            <p>Форма контракта: <span style="color: #0a0a0a; font-weight: bold">{{$work->typ_umowy}}</span></p>
                            <p>Опис: <span style="color: #0a0a0a;"><br>{{$work->o_pracy}}</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class="property-price">
                        <p class="badge-rent"><a href="mailto:nashivkatowice@gmail.com">Написать</a></p>
                        <p class="price"><a href="tel:+48 795 744 863">Позвонить</a></p>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
      </div>
</section>

<div class=" w-full  flex  flex-row  flex-wrap  bg-gray-600  p-10  py-20  justify-center" style="background-repeat: no-repeat; background-size: cover; background-blend-mode: multiply;background-position: center center;background-image: url('https://images.unsplash.com/photo-1573079487717-f8ebae0b1539?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');">
    <div class=" w-full  text-center">
        <div class=" text-3xl  text-center text-white  antialiased">ИЩЕТЕ РАБОТУ??</div>
        <div class="text-xl   text-center  text-white antialiased">У нас есть вакансии на территории всей Силезии</div>
    </div>

    <form class=" mt-3  flex   flex-row   flex-wrap" action="tel:518922121" method="POST">
        <div class=" w-3/3">
            <button style="background-color: #ff8525" class=" w-full text-white  p-2  bg-indigo-400  rounded-r-lg rounded-l-lg text-center hover: bg-indigo-300" type="submit">ПОЗВОНИТЬ</button>
        </div>
    </form>
</div>

<footer class="kilimanjaro_area mt-10">
    <!-- Top Footer Area Start -->
    <div class="foo_top_header_one section_padding_100_70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="kilimanjaro_part">
                        <h5>О НАС</h5>
                        <p>Наши в Катовице - сообщество для жителей
                            не только Катовице, но и всей Силезии.<br>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="kilimanjaro_part">
                        <h5>ССЫЛКИ</h5>
                        <ul class=" kilimanjaro_widget">
                            <li><a style="color: #ff8525" href="https://www.facebook.com/nashiwkatowice">NashivKatowice24.info</a></li>
                            <li><a style="color: #ff8525" href="https://www.facebook.com/337292533587356/posts/680800299236576/?d=n">Реклама</a></li>
                            <li><a style="color: #ff8525" href="https://www.facebook.com/nashivkatowice.praca">NashivKatowice Praca</a></li>
                            <li><a style="color: #ff8525" href="https://www.facebook.com/groups/1036044496834686">Автомобили</a></li>
                        </ul>
                    </div>

                    <div class="kilimanjaro_part m-top-15">
                        <h5>КАТЕГОРИИ</h5>
                        <ul class="kilimanjaro_links">
                            <li><a style="color: #ff8525" href="{{url('work/list')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>РАБОТА</a></li>
                            <li><a style="color: #ff8525" href="{{url('archive')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>СТАТЫИ</a></li>
                            <li><a style="color: #ff8525" href="{{url('contact')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>КОНТАКТ</a></li>
                        <!--    <li><a href="{{url('team')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>О НАС</a></li>   -->
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="kilimanjaro_part">
                        <h5>ПОСЛЕДНИЕ НОВОСТИ</h5>
                        <div class="kilimanjaro_blog_area">
                            <div class="kilimanjaro_thumb">
                                <i class="fas fa-newspaper fa-3x"></i>
                            </div>
                            <a href="#">В КАТОВИЦЕ ЗА БЫСТРО РАСТЕТ ЧИСЛО СМЕРТЕЙ</a>
                            <p class="kilimanjaro_date">Січень 2021</p>
                            <p>Кульминация наступила в ноябре, когда в Катовицах умерло 770 человек. Для сравнения, в 2018 году их было 350, а в 2019 году-356</p>
                        </div>
                        <div class="kilimanjaro_blog_area">
                            <div class="kilimanjaro_thumb">
                                <i class="fas fa-newspaper fa-3x"></i>
                            </div>
                            <a href="#">Траси А4 и А1</a>
                            <p class="kilimanjaro_date">Січень 2021</p>
                            <p>По-прежнему самый большой в Польше и один из крупнейших в Европе автомобильный узел A4 и A1 в Гливице-Соснице был открыт 23 декабря 2009 года.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="kilimanjaro_part">
                        <h5>МЫ В СОЦИАЛЬНЫХ СЕТЯХ:</h5>
                        <div class="kilimanjaro_single_contact_info">
                            <p><a style="color: #ff8525" href="tel:+48 795 744 863">+48 795 744 863</a></p>
                        </div>
                        <div class="kilimanjaro_single_contact_info">
                            <br>
                            <h5>Email:</h5>
                            <p><a style="color: #ff8525" href="mailto:nashivkatowice@gmail.com">nashivkatowice@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="kilimanjaro_part m-top-15">
                        <h5>Social Links</h5>
                        <ul class="kilimanjaro_social_links">
                            <li><a style="color: #ff8525" href="https://www.facebook.com/search/top?q=nashivkatowice24.info"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                            <li><a style="color: #ff8525" href="https://www.instagram.com/nashivkatowice/"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Area Start -->
    <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>© All Rights Reserved by <a href="#">NashivKatowice.pl<i class="fa fa-love"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/b5d9a7d5d7.js" crossorigin="anonymous"></script>


<script src="{{ asset('css/styles/work/js/jquery.min.js') }}"></script>
<!-- Popper -->
<script src="{{ asset('css/styles/work/js/popper.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('css/styles/work/js/bootstrap.min.js') }}"></script>
<!-- All Plugins -->
<script src="{{ asset('css/styles/work/js/rehomes.bundle.js')}}"></script>
<!-- Active -->
<script src="{{ asset('css/styles/work/js/default-assets/active.js') }}"></script>
<script src="{{asset('js/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/masonry/masonry.js')}}"></script>
<script src="{{asset('js/js/custom.js')}}"></script>
</body>

</html>