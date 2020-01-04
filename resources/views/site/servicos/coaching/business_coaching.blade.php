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
            @include('site.template.menuCoaching')
          </div>
      </div>
  </div>
</section>

<!-- ================ section end ================= -->
@endsection
