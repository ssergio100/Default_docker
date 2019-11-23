<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$titulo}}</title>
    <link rel="icon" href="{{ URL::asset('assets/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    {{-- <link rel="stylesheet" href="{{ URL::asset('assets/css//themify-icons.css') }}"> --}}
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-xl-8">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ URL::asset('/vo')}}"> <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logotipo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Alternar de navegação">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="sobre" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sobre a DNA
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="sobre">
                                            <a class="dropdown-item" href="{{ URL::asset('sobre/missao')}}">Idealizadora da DNA Happiness</a>
                                            <a class="dropdown-item" href="{{ URL::asset('sobre/visao')}}">Conheça a DNA Happiness</a>
                                            <a class="dropdown-item" href="{{ URL::asset('sobre/valores')}}">Nosso DNA</a>
                                        </div>
                                    </li>
                                
                            
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="{{ URL::asset('sobre/servicos')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Serviços
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="servicos">
                                            <a class="dropdown-item" href="{{ URL::asset('sobre/coaching')}}">Coaching</a>
                                            <a class="dropdown-item" href="{{ URL::asset('sobre/treinamento')}}">Treinamentos</a>
                                            <a class="dropdown-item" href="{{ URL::asset('sobre/monistrante')}}">Ministrante Best Sellers</a>
                                            <a class="dropdown-item" href="{{ URL::asset('sobre/cominicacao-positiva')}}">Comunicação Positiva</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ URL::asset('contato')}}">Contato</a>
                                    </li>
                                </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    @yield('content')

    <!-- footer part start-->
    <section class="footer-area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 col-sm-8 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase btn_2">subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="copyright_part">
        <div class="container">
            <div class="row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved | This template is made with <i class="ti-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"> <i class="ti-twitter"></i> </a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="ti-skype"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ URL::asset('assets/js/jquery-1.12.1.min.js') }} "></script>
    <!-- popper js -->
    <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ URL::asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ URL::asset('assets/js/swiper.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ URL::asset('assets/js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ URL::asset('assets/js/slick.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
