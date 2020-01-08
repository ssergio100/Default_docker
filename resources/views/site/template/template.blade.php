<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$titulo}}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesom/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body>
    <!--::header part start::-->

    <header class="main_menu <?php echo (isset($home)) ? 'home_menu' : '' ?>">

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
                                    <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::asset('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="sobre" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sobre a DNA
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="sobre">
                                            <a class="dropdown-item" href="{{ asset('sobre/idealizadora')}}">Idealizadora da DNA Happiness</a>
                                            <a class="dropdown-item" href="{{ asset('sobre/conheca')}}">Conheça a DNA Happiness</a>
                                            <a class="dropdown-item" href="{{ asset('sobre/nosso-dna')}}">Nosso DNA</a>
                                        </div>
                                    </li>
                                
                            
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="{{ URL::asset('sobre/servicos')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Serviços
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="servicos">
                                            <a class="dropdown-item" href="{{ URL::asset('servicos/coaching')}}">Coaching</a>
                                            <a class="dropdown-item" href="{{ URL::asset('servicos/treinamentos')}}">Treinamentos</a>
                                            <a class="dropdown-item" href="{{ URL::asset('servicos/ministrantes-best-sellers')}}">Ministrante Best Sellers</a>
                                            <a class="dropdown-item" href="{{ URL::asset('servicos/comunicacao-positiva')}}">Comunicação Positiva</a>
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
                {{-- <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
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
                </div> --}}
               
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
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
     
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ URL::asset('assets/js/jquery-1.12.1.min.js') }} "></script>
    <!-- <script src="{{ URL::asset('assets/js/jquery.nice-select.min.js') }} "></script> -->
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
    <script src="{{ URL::asset('assets/js/global.js') }}"></script>

</body>

</html>
