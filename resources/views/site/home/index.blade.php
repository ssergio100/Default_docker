

@extends('site.template.template')
   
@section('content')

     <!-- banner part start-->

     <section class="banner_part">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-7 col-xl-6">
                     <div class="banner_text">
                         <div class="banner_text_iner">
                             <h1>Lead from <br> Front in Business <br> Innovation.</h1>
                             <p>Male bring land dominion over can yielding his moveth under of depend brought him is.
                                 Multiply which firmament deep make.</p>
                             <a href="#" class="btn_1">learn more </a>
                             <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube video_popup">
                                 <span><img src="{{ URL::asset('assets/img/icon/play.svg') }}" alt=""></span> Intro Video</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="hero-app-1 custom-animation"><img src="{{ URL::asset('assets/img/animate_icon/icon_1.png') }}" alt=""></div>
         <div class="hero-app-2 custom-animation2"><img src="{{ URL::asset('assets/img/animate_icon/icon_2.png') }}" alt=""></div>
         <div class="hero-app-5 custom-animation4"><img src="{{ URL::asset('assets/img/animate_icon/icon_5.png') }}" alt=""></div>
         <div class="hero-app-7 custom-animation2"><img src="{{ URL::asset('assets/img/animate_icon/icon_7.png') }}" alt=""></div>
         <div class="hero-app-8 custom-animation"><img src="{{ URL::asset('assets/img/animate_icon/icon_8.png') }}" alt=""></div>
     </section>
     <!-- banner part start-->
     
     <!-- about part start-->
     <section class="about_part">
         <div class="container">
             <div class="row align-items-center justify-content-end">
                 <div class="col-md-6 col-lg-6 col-xl-5">
                     <div class="about_img">
                         <img src="{{ URL::asset('assets/img/about_img_1.png') }}" alt="">
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-6 offset-xl-1 col-xl-6">
                     <div class="about_text">
                         <h2>We Have 24 Year
                             Expereince in consulting</h2>
                         <h4>First Abundantly night you are sea great fifth year</h4>
                         <p>Lights fly above bearing brought abundantly whose. Without one may i seed void wels great
                             face god were deep be first. Unto for third be in moveth. Bring land bearing un abundantly
                             firmament appear whales them years. Lights fly above bearing brought bold abundantly whose
                             without one may i seed. </p>
                         <a href="#" class="btn_2">read more</a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="hero-app-7 custom-animation"><img src="{{ URL::asset('assets/img/animate_icon/icon_1.png') }}" alt=""></div>
         <div class="hero-app-8 custom-animation2"><img src="{{ URL::asset('assets/img/animate_icon/icon_2.png') }}" alt=""></div>
         <div class="hero-app-6 custom-animation3"><img src="{{ URL::asset('assets/img/animate_icon/icon_3.png') }}" alt=""></div>
     </section>
     <!-- about part start-->
     
     <!-- service_part start-->
     <section class="service_part section_padding gray_bg">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 col-lg-8 col-xl-4">
                     <div class="single_service_text">
                         <h2>We Provide Best Services</h2>
                         <p>Male bring land dominion over can't yielding. His order moveth under of dry brought him is.
                             Multiply which firmament deep make. Male bring land. Dominion over can't yielding. His
                             moveth under of dry brought him is. Multiply which firmament deep make.</p>
                         <a href="#" class="btn_2">Load More</a>
                     </div>
                 </div>
                 <div class="col-sm-6 col-xl-4">
                     <div class="single_service_part">
                         <span class="single_service_icon"><i class="flaticon-growth"></i></span>
                         <h4>Business Opportunity</h4>
                         <p>Show wherein form yielding whala readeat gathered wherein moved. Behold may be winged created
                             that Won't theya are second god give </p>
                         <a href="#" class="btn_3">Learn More <i class="ti-arrow-right"></i></a>
                     </div>
                 </div>
                 <div class="col-sm-6 col-xl-4">
                     <div class="single_service_part single_service_part_2">
                         <span class="single_service_icon style_icon"><i class="flaticon-wallet"></i></span>
                         <h4>Commercial Approach</h4>
                         <p>Show wherein form yielding whala readeat gathered wherein moved. Behold may be winged created
                             that Won't theya are second god give </p>
                         <a href="#" class="btn_3 service_btn">Learn More <i class="ti-arrow-right"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- upcoming_event part start-->
     
     <!--::review_part start::-->
     <section class="review_part padding_top">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-xl-6">
                     <div class="section_tittle text-center">
                         <h2>Customer Are Saying</h2>
                         <p>Winged hath had face creepeth abundantly so shall </p>
                     </div>
                 </div>
             </div>
             <div class="row justify-content-center">
                 <div class="col-lg-6 col-xl-5">
                     <!-- THUMBNAILS -->
                     <div class="slider-nav-thumbnails">
                         <div class="slider-thumbnails">
                             <img src="{{ URL::asset('assets/img/client/client_1.png') }}" alt="slideimg" class="image">
                         </div>
                         <div class="slider-thumbnails">
                             <img src="{{ URL::asset('assets/img/client/client_2.png') }}" alt="slideimg" class="image">
                         </div>
                         <div class="slider-thumbnails">
                             <img src="{{ URL::asset('assets/img/client/client_1.png') }}" alt="slideimg" class="image">
                         </div>
                         <div class="slider-thumbnails">
                             <img src="{{ URL::asset('assets/img/client/client_1.png') }}" alt="slideimg" class="image">
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-10">
                     <!-- MAIN SLIDES -->
                     <div class="slider">
                         <div data-index="1">
                             <div class="client_review_text text-center">
                                 <img src="{{ URL::asset('assets/img/icon/quate.svg') }}" class="quate_icon" alt="quate">
                                 <p>Own midst. Behold sea created male he together of That Said fourth deep abundantly
                                     have light night beginning rule darkness seed darkness which land saying moveth.
                                     Fifth shall wont signs, can seasons green days gathered great</p>
                                 <h3>Daniel E Gilcritst</h3>
                                 <h5>Manager, Vision</h5>
                             </div>
                         </div>
                         <div data-index="2">
                             <div class="client_review_text text-center">
                                 <img src="{{ URL::asset('assets/img/icon/quate.svg') }}" class="quate_icon" alt="quate">
                                 <p>Own midst. Behold sea created male he together of That Said fourth deep abundantly
                                     have light night beginning rule darkness seed darkness which land saying moveth.
                                     Fifth shall wont signs, can seasons green days gathered great</p>
                                 <h3>Daniel E Gilcritst</h3>
                                 <h5>Manager, Vision</h5>
                             </div>
                         </div>
                         <div data-index="3">
                             <div class="client_review_text text-center">
                                 <img src="{{ URL::asset('assets/img/icon/quate.svg') }}" class="quate_icon" alt="quate">
                                 <p>Own midst. Behold sea created male he together of That Said fourth deep abundantly
                                     have light night beginning rule darkness seed darkness which land saying moveth.
                                     Fifth shall wont signs, can seasons green days gathered great</p>
                                 <h3>Daniel E Gilcritst</h3>
                                 <h5>Manager, Vision</h5>
                             </div>
                         </div>
                         <div data-index="4">
                             <div class="client_review_text text-center">
                                 <img src="{{ URL::asset('assets/img/icon/quate.svg') }}" class="quate_icon" alt="quate">
                                 <p>Own midst. Behold sea created male he together of That Said fourth deep abundantly
                                     have light night beginning rule darkness seed darkness which land saying moveth.
                                     Fifth shall wont signs, can seasons green days gathered great</p>
                                 <h3>Daniel E Gilcritst</h3>
                                 <h5>Manager, Vision</h5>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="hero-app-7 custom-animation4"><img src="{{ URL::asset('assets/img/animate_icon/icon_4.png') }}" alt=""></div>
             <div class="hero-app-3 custom-animation2"><img src="{{ URL::asset('assets/img/animate_icon/icon_8.png') }}" alt=""></div>
             <div class="hero-app-8 custom-animation"><img src="{{ URL::asset('assets/img/animate_icon/icon_3.png') }}" alt=""></div>
         </div>
     </section>
     <!--::blog_part end::-->
     
     <!-- portfolio_part start-->
     <section class="portfolio_part section_padding">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card-columns">
                         <div class="card">
                             <blockquote class="blockquote mb-0">
                                 <h2>Explore Our Best
                                     Practice Area</h2>
                                 <p>Male bring land. Dominion over can yielding his moveth under him is.
                                     Multiply which firmament</p>
                             </blockquote>
                         </div>
                         <div class="card">
                             <img src="{{ URL::asset('assets/img/gallery/gallery_item.png') }}" class="card-img-top" alt="...">
                             <div class="card-body">
                                 <a href="project_details.html">
                                     <h5 class="card-title">Startup Project</h5>
                                 </a>
                                 <p class="card-text">All days lights grass midst from unto</p>
                             </div>
                         </div>
                         <div class="card">
                             <img src="{{ URL::asset('assets/img/gallery/gallery_item_1.png') }}" class="card-img-top" alt="...">
                             <div class="card-body">
                                 <a href="project_details.html">
                                     <h5 class="card-title">Startup Project</h5>
                                 </a>
                                 <p class="card-text">All days lights grass midst from unto</p>
                             </div>
                         </div>
                         <div class="card">
                             <img src="{{ URL::asset('assets/img/gallery/gallery_item_2.png') }}" class="card-img-top" alt="...">
                             <div class="card-body">
                                 <a href="project_details.html">
                                     <h5 class="card-title">Startup Project</h5>
                                 </a>
                                 <p class="card-text">All days lights grass midst from unto</p>
                             </div>
                         </div>
                         <div class="card">
                             <img src="{{ URL::asset('assets/img/gallery/gallery_item_3.png') }}" class="card-img-top" alt="...">
                             <div class="card-body">
                                 <a href="project_details.html">
                                     <h5 class="card-title">Startup Project</h5>
                                 </a>
                                 <p class="card-text">All days lights grass midst from unto</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- portfolio_part part end-->
     
     <!-- our_service_part part start-->
     <section class="about_part our_service_part padding_top">
         <div class="container">
             <div class="row align-items-center justify-content-end">
                 <div class="col-md-6 col-xl-5">
                     <div class="about_img">
                         <img src="{{ URL::asset('assets/img/about_img_2.png') }}" alt="">
                     </div>
                 </div>
                 <div class="col-md-6 offset-xl-1 col-xl-6">
                     <div class="about_text">
                         <h2>We Providing high quality
                                 adviser service</h2>
                         <h4>First Abundantly night you are sea great fifth year</h4>
                         <p>Lights fly above bearing brought abundantly whose. Without one may i seed void wels great
                             face god were deep be first. Unto for third be in moveth. Bring land bearing un abundantly
                             firmament appear whales them years. Lights fly above bearing brought bold abundantly whose
                             without one may i seed. </p>
                         <a href="#" class="btn_2">read more</a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="hero-app-1 custom-animation"><img src="{{ URL::asset('assets/img/animate_icon/icon_1.png') }}" alt=""></div>
         <div class="hero-app-4 custom-animation2"><img src="{{ URL::asset('assets/img/animate_icon/icon_8.png') }}" alt=""></div>
         <div class="hero-app-8 custom-animation3"><img src="{{ URL::asset('assets/img/animate_icon/icon_9.png') }}" alt=""></div>
     </section>
     <!--::blog_part start::-->
     
     <!--::blog_part start::-->
     <section class="blog_part section_padding">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-xl-6">
                     <div class="section_tittle text-center">
                         <h2>Update From Blog</h2>
                         <p>Winged hath had face creepeth abundantly so shall fire apperar </p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-sm-6 col-lg-4 col-xl-4 d-none d-sm-block d-lg-none">
                     <div class="single-home-blog">
                         <div class="card">
                             <img src="{{ URL::asset('assets/img/blog/blog_3.png') }}" class="card-img-top" alt="blog">
                             <div class="card-body">
                                 <a href="blog.html">Technology</a> | <span> March 30, 2019</span>
                                 <a href="blog.html">
                                     <h5 class="card-title">Be there bring void give good from stars</h5>
                                 </a>
                                 <ul>
                                     <li> <span class="ti-comments"></span>2 Comments</li>
                                     <li> <span class="ti-heart"></span>0 Like</li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 col-lg-4 col-xl-4">
                     <div class="single-home-blog">
                         <div class="card">
                             <img src="{{ URL::asset('assets/img/blog/blog_1.png')}}" class="card-img-top" alt="blog">
                             <div class="card-body">
                                 <a href="blog.html">Technology</a> | <span> March 30, 2019</span>
                                 <a href="blog.html">
                                     <h5 class="card-title">He waters likeness their land set female for </h5>
                                 </a>
                                 <ul>
                                     <li> <span class="ti-comments"></span>2 Comments</li>
                                     <li> <span class="ti-heart"></span>0 Like</li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 col-lg-4 col-xl-4">
                     <div class="single-home-blog">
                         <div class="card">
                             <img src="{{ URL::asset('assets/img/blog/blog_2.png') }}" class="card-img-top" alt="blog">
                             <div class="card-body">
                                 <a href="blog.html">Technology</a> | <span> March 30, 2019</span>
                                 <a href="blog.html">
                                     <h5 class="card-title">Be there bring void give good from stars</h5>
                                 </a>
                                 <ul>
                                     <li> <span class="ti-comments"></span>2 Comments</li>
                                     <li> <span class="ti-heart"></span>0 Like</li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 col-lg-4 col-xl-4">
                     <div class="single-home-blog">
                         <div class="card">
                             <img src="{{ URL::asset('assets/img/blog/blog_3.png') }}" class="card-img-top" alt="blog">
                             <div class="card-body">
                                 <a href="blog.html">Technology</a> | <span> March 30, 2019</span>
                                 <a href="blog.html">
                                     <h5 class="card-title">Third lights they're over moved days above</h5>
                                 </a>
                                 <ul>
                                     <li> <span class="ti-comments"></span>2 Comments</li>
                                     <li> <span class="ti-heart"></span>0 Like</li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--::blog_part end::-->

@endsection
