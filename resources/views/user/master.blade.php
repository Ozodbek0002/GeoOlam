
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v5.0.29, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/newlogo.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="description" content="">


        <title>GeoOlam</title>
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/animatecss/animate.css">
        <link rel="stylesheet" href="assets/socicon/css/styles.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
        <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">


    </head>


    <body>

    {{--    // Navbar--}}
    <section data-bs-version="5.1" class="menu menu1 cid-tnKcgWlJdZ" once="menu" id="menu1-1">


        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-caption-wrap">
                        <a class="navbar-caption text-black text-primary display-7" href="{{url('/')}}">Geo🌏lam</a>
                    </span>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                        data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item dropdown">
                            <a class="nav-link link text-black dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside">Ilmiy Maqolalar</a>

                            <div class="dropdown-menu" aria-labelledby="dropdown-892">

                                <a class="text-black dropdown-item text-primary display-7" href="{{route('article_uz')}}">O'zbekcha
                                    maqolalar</a>
                                <a class="text-black dropdown-item display-7" href="{{route('article_ru')}}">Ruscha
                                    maqolalar</a>
                                <a class="text-black dropdown-item display-7" href="{{route('article_en')}}">Inglischa
                                    maqolalar</a>

                            </div>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link link text-black dropdown-toggle display-7" href="#"
                               data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                               aria-expanded="false">Slaydlar<br></a>

                            <div class="dropdown-menu" aria-labelledby="dropdown-795">

                                <a class="text-black dropdown-item text-primary display-7" href="{{route('slide_uz')}}">O`zbekcha slaydlar</a>
                                <a class="text-black dropdown-item display-7" href="{{route('slide_ru')}}">Ruscha slaydlar</a>
                                <a class="text-black dropdown-item display-7" href="{{route('slide_en')}}">Inglizcha slaydlar</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link link text-black dropdown-toggle display-7" href="#"
                               data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                               aria-expanded="false">Kitoblar</a>

                            <div class="dropdown-menu" aria-labelledby="dropdown-111">

                                <a class="text-black dropdown-item text-primary display-7" href="{{route('book_lu')}}">Lug'atlar</a>
                                <a class="text-black dropdown-item display-7" href="{{route('book_en')}}">Ensiklopediyalar</a>
                                <a class="text-black dropdown-item display-7" href="{{route('book_mo')}}">Monografiyalar</a>
                                <a class="text-black dropdown-item display-7" href="{{route('book_us')}}">Uslubiy qo'llanmalar</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link link text-black dropdown-toggle display-7" data-toggle="dropdown-submenu"
                               data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Kurs ishlari</a>

                            <div class="dropdown-menu" aria-labelledby="dropdown-951">
                                <a class="text-black show dropdown-item text-primary display-7" href="{{route('cource_uz')}}">O`zbekcha kurs ishlar</a>
                                <a class="text-black show dropdown-item display-7" href="{{route('cource_ru')}}">Ruscha kurs ishlar</a>
                                <a class="text-black show dropdown-item display-7" href="{{route('cource_en')}}">Inglizcha kurs ishlar</a>

                            </div>
                        </li>

                        <li class="nav-item"><a class="nav-link link text-black text-primary display-7"
                                                href="{{route('informations')}}">Qiziqarli ma`lumotlar</a>
                        </li>

                        <li class="nav-item"><a class="nav-link link text-black text-primary display-7"
                                                href="{{route('contact')}}">Aloqa</a>
                        </li>


                    </ul>


                </div>
            </div>
        </nav>
    </section>
    {{--    // Navbar--}}



    @yield('content')

    {{--    // Footer--}}
    <section class="cid-tnKd0Z1Z0r" id="footer1-2">

        <section data-bs-version="5.1" class="footer1 cid-tnKcrkWiTH" once="footers" id="footer1-2">
            <div class="container">

                <div class="row mbr-white" align="center">

                    <div class="col-12 col-md- col-lg-4 pl-3 pr-5 ">
                        <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7 text-center">Ma'lumot&nbsp;</h5>
                        <ul class="list mbr-fonts-style display-4">

                            <li class="mbr-text item-wrap">Ushbu saytda siz turli xildagi ilmiy maqolalar va dolzarb
                                mavzular haqida ma'lumotlarga ega bo'lasiz.
                            </li>

                            <li class="mbr-text item-wrap">Shuningdek turli kitoblar va slaydlar topishingiz mumkin.</li>

                            <li class="mbr-text item-wrap"><br></li>

                            <li class="mbr-text item-wrap">
                                <strong>
                                    <a href="https://t.me/Muallif2" class="text-secondary" target="_blank">
                                        Reklama xizmati mavjud
                                    </a>
                                </strong>
                            </li>

                            <li class="mbr-text item-wrap"><br></li>

                        </ul>
                    </div>

                    <div class="col-12 col-md- col-lg-4 pr-2">
                        <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7 text-center" >Takliflar<br></h5>
                        <ul class="list mbr-fonts-style display-4">
                            <li class="mbr-text item-wrap">Ilmiy maqolalar chop etish</li>
                            <li class="mbr-text item-wrap">Uslubiy qo'llanmalar chiqarish</li>
                            <li class="mbr-text item-wrap">Monografiya&nbsp; chiqarish</li>
                            <li class="mbr-text item-wrap"><br></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md- col-lg-4 pl-2">
                        <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7 text-center" >Aloqa</h5>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">Email: sabirovj75@gmail.com
                            <br>Tel: +998 88 526 19 12</p>
                        <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7"><br></h5>
                        <div class="social-row display-7 d-flex justify-content-center">
                            <div class="soc-item">
                                <a href="https://t.me/Muallif2" target="_blank">
                                    <span class="mbr-iconfont socicon-telegram socicon"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="mailto:sabirovj75@gmail.com">
                                    <span class="mbr-iconfont mbri-letter"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.instagram.com/sobirov_javohir_1912/" target="_blank">
                                    <span class="mbr-iconfont socicon-instagram socicon"></span>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </section>
    {{--        // Footer--}}


    <script src="{{asset('assets/web/assets/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/tether/tether.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/smoothscroll/smooth-scroll.js')}}"></script>
    <script src="{{asset('assets/dropdown/js/nav-dropdown.js')}}"></script>
    <script src="{{asset('assets/dropdown/js/navbar-dropdown.js')}}"></script>
    <script src="{{asset('assets/touchswipe/jquery.touch-swipe.min.js')}}"></script>
    <script src="{{asset('assets/viewportchecker/jquery.viewportchecker.js')}}"></script>
    <script src="{{asset('assets/parallax/jarallax.min.js')}}"></script>
    <script src="{{asset('assets/theme/js/script.js')}}"></script>

    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
                class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">



    </body>

</html>
