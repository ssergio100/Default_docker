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
                  <p><strong>O Executive Coaching, irá capacitá-lo para aplicar ferramentas capazes de atingir os seus objetivos de negócio, com aumento mensurável dos lucros e alta performance da equipe.</strong></p>
                  <br>
                   <p> Aqui é onde os resultados acontecem de fato!
                    Tome consciência dos seus limites e transforme-os em forças capazes de solucionar os desafios estratégicos da sua empresa, expandindo o seu potencial executivo, suas relações corporativas e a carreira profissional.</p>
                    <br>
                    <p>Se você tem objetivos ousados em sua carreira e negócio, faça a escolha pelo Executive Coaching!</p>
                    <br>
                    <p><strong>Artigo da Revista VOCÊ/SA – sobre a transformação dos executivos em suas carreiras, após o coaching</strong></p>
                    <br>
                    Pesquisa feita com 10 executivos que passaram por processo de Coaching, apontou que 100% aperfeiçoaram a capacidade de ouvir, 80% melhoraram a flexibilidade, 90% melhoraram a produtividade, 80% se mostraram mais abertos às mudanças organizacionais e 70% deles conseguiram melhorar o ambiente e os relacionamentos no trabalho. (Pontifícia Universidade Católica de Campinas – PUC Campinas)
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
                  <p><strong>O Executive Coaching, irá capacitá-lo para aplicar ferramentas capazes de atingir os seus objetivos de negócio, com aumento mensurável dos lucros e alta performance da equipe.</strong></p>
                  <br>
                   <p> Aqui é onde os resultados acontecem de fato!
                    Tome consciência dos seus limites e transforme-os em forças capazes de solucionar os desafios estratégicos da sua empresa, expandindo o seu potencial executivo, suas relações corporativas e a carreira profissional.</p>
                    <br>
                    <p>Se você tem objetivos ousados em sua carreira e negócio, faça a escolha pelo Executive Coaching!</p>
                    <br>
                    <p><strong>Artigo da Revista VOCÊ/SA – sobre a transformação dos executivos em suas carreiras, após o coaching</strong></p>
                    <br>
                    Pesquisa feita com 10 executivos que passaram por processo de Coaching, apontou que 100% aperfeiçoaram a capacidade de ouvir, 80% melhoraram a flexibilidade, 90% melhoraram a produtividade, 80% se mostraram mais abertos às mudanças organizacionais e 70% deles conseguiram melhorar o ambiente e os relacionamentos no trabalho. (Pontifícia Universidade Católica de Campinas – PUC Campinas)
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
                      <h6>Até quando você irá adiar os seus objetivos e
                        uma vida plena e feliz?                        
                        </h6>
                  </div>
                  <div class="single_project_details_widget">
                      <span class="ti-location-pin"></span>
                      <h5>Local</h5>
                      <p>Excritório</p>
                      <p>Recebemos você em mabiente discreto e confortável.</p>
                  </div>
              </div>
              
          </div>
      </div>
  </div>
</section>
<!-- ================ section end ================= -->
@endsection
