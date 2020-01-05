@extends('site.template.template')


@section('content')

<!-- ================ section start ================= -->

@include('site.template.breadcrumb')

<!--<section class="blog_area section_padding">
  <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
              <div class="single_service_text">
                  <h2><?php //echo $service?></h2>
                  <p><strong>Com o Business Coaching, você líder ou profissional terá eficiência, qualidade e engajamento para realização de seus objetivos e metas, alinhado as exigências e inovações do mercado.</strong></p>
                  <br> 
                  <p> Através de ferramentas voltadas para o pilar profissional, você terá mais resultados e alta performance em seus desafios no trabalho.</p>
                   <br> 
                    <p>Individual: contempla ciclo de 20h, com 2 horas semanais.</p>
                    <br>
                    <p>Grupos: contempla ciclo de 20h em grupo, divididos em 2 horas semanais, com 2 encontros individuais no período de realização.</p>
                    <br>
                    <p>Até quando você irá manter-se no degrau da zona de conforto?</p>
                    <br>
                    <p>Qual escolha você faz, seguir em frente e conquistar mais responsabilidades - contribuindo para o crescimento da empresa, ou parar onde está e não ver mudanças em sua atuação como profissional?<p>
                    </p>
                  <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
              </div>
          </div>
          <div class="col-md-4">
            {{-- @include('site.template.menuCoaching') --}}
          </div>
      </div>
  </div>
</section> -->

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
                  <p><strong>Com o Business Coaching, você líder ou profissional terá eficiência, qualidade e engajamento para realização de seus objetivos e metas, alinhado as exigências e inovações do mercado.</strong></p>
                  <br> 
                  <p> Através de ferramentas voltadas para o pilar profissional, você terá mais resultados e alta performance em seus desafios no trabalho.</p>
                   <br> 
                    <p>Individual: contempla ciclo de 20h, com 2 horas semanais.</p>
                    <br>
                    <p>Grupos: contempla ciclo de 20h em grupo, divididos em 2 horas semanais, com 2 encontros individuais no período de realização.</p>
                    <br>
                    <p>Até quando você irá manter-se no degrau da zona de conforto?</p>
                    <br>
                    <p>Qual escolha você faz, seguir em frente e conquistar mais responsabilidades - contribuindo para o crescimento da empresa, ou parar onde está e não ver mudanças em sua atuação como profissional?<p>
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
                      <h6>Quanto tempo você precisa para ser a sua melhor versão?</h6>
                  </div>
                  <div class="single_project_details_widget">
                      <span class="ti-check-box"></span>
                      <h5>Início</h5>
                      <p>Agora!</p>
                      <h6>Até quando você irá adiar sua alta performance no trabalho?</h6>
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