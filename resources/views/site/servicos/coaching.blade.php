@extends('site.template.template')


@section('content')

<!-- ================ section start ================= -->

@include('site.template.breadcrumb')

<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="single_service_text">
                    <h2><?php echo $service?></h2>
                   <p><strong> Coaching Integral Sistêmico</strong></p>
                   <br>
                   <p> O Coaching Integral Sistêmico trabalha o lado emocional do cérebro, 
                    através de ferramentas que são capazes de refazer crenças e limitações
                     emocionais. Contribuindo ainda com mudanças significativas em todas as
                      áreas da vida, de forma integral e sistêmica.</p> 
                    <br>
                    <p>“Define-se Integral, porque neste método utilizam-se os dois hemisférios
                     cerebrais: o esquerdo responsável pela parte cognitiva e racional; e
                      o direito, pelas emoções, crenças e intuição.” Febracis</p>

                        <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
                        
                </div>
            </div>
            <div class="col-md-4">
                @include('site.template.menuCoaching')
            </div>
        </div>
    </div>
</section>

<!-- ================ section end ================= -->
@endsection
