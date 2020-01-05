@extends('site.template.template')


@section('content')

<!-- ================ section start ================= -->

@include('site.template.breadcrumb')

<!-- <section class="blog_area section_padding">
  <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
              <div class="single_service_text">
                  <h2><?php //echo $service?></h2>
                  <p><strong>Através do Life Coaching, você toma a decisão de investir em mudanças extraordinárias em 3 áreas da sua vida, para que tenha ganhos sustentáveis e resultados transformadores.</strong></p>
                  <br>

                   <p> Você está preparado para viver uma vida extraordinária?</p>
                   <br>
                    
                    <p> O ciclo de Life Coaching dura 90 dias, sendo que as sessões são realizadas semanalmente ou quinzenalmente considerando questões particulares do coachee. </p>
                    <br>
                    <p>Apoiado nas ferramentas do Coaching Integral Sistêmico, você agirá com determinação e autorresponsabilidade rumo a sua melhor versão, com ganhos significativos e mensuráveis em sua vida, seu trabalho e em todos os demais pilares
                    </p>
                  <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
</div>
</div>
<div class="col-md-4">
    {{-- @include('site.template.menuCoaching') --}}
</div>
</div>
</div>
</section> 
-->
<section class="project_details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-sm-12">
                <div class="project_details_img">
                <img src="{{asset('assets/img/single_project.png')}}" alt="single_project">
                </div>
            </div>
            <div class="col-lg-7 col-sm-8">
                <div class="project_details_content">
                    <h3><?php echo $service?></h3>
                    <p><strong>Através do Life Coaching, você toma a decisão de investir em mudanças extraordinárias em
                            3 áreas da sua vida, para que tenha ganhos sustentáveis e resultados
                            transformadores.</strong></p>
                    <br>
                    <p> Você está preparado para viver uma vida extraordinária?</p>
                    <br>
                    <p> O ciclo de Life Coaching dura 90 dias, sendo que as sessões são realizadas semanalmente ou
                        quinzenalmente considerando questões particulares do coachee. </p>
                    <br>
                    <p>Apoiado nas ferramentas do Coaching Integral Sistêmico, você agirá com determinação e
                        autorresponsabilidade rumo a sua melhor versão, com ganhos significativos e mensuráveis em sua
                        vida, seu trabalho e em todos os demais pilares
                    </p>
                    <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
                    <a href="{{ URL::asset('servicos/coaching') }}" class="genric-btn warning circle large">Voltar</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4">
                <div class="project_details_widget">
                    <div class="single_project_details_widget">
                        <span class="ti-time"></span>
                        <h5>Carga horária</h5>
                        <p>20 horas</p>
                        <h6>Você escolhe o melhor horário.</h6>
                    </div>
                    <div class="single_project_details_widget">
                        <span class="ti-check-box"></span>
                        <h5>Início</h5>
                        <p>Agora!</p>
                        <h6>Até quando você irá adiar os seus objetivos e
                          uma vida plena e feliz?
                          </h6>
                    </div>
                    <div class="single_project_details_widget">
                        <span class="ti-location-pin"></span>
                        <h5>Local</h5>
                        <p>Excritório</p>
                        <p>Recebemos você em ambiente discreto e confortável.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- ================ section end ================= -->
@endsection
