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
                  <p>Quer conhecer o mapeamento e análise do seu perfil comportamental ou de sua equipe com 99% de precisão, conheça seus valores humanos e tudo sobre o seu comportamento, obtendo ganhos em suas relações e resultados.</p>
                  <br>
                   <p> Conquiste mais resultados através do Mapeamento e Análise do seu Perfil Comportamental, com devolutiva por um coach. Tenha sua vida transformada entendendo mais sobre você e como interage com o mundo, com ganhos extraordinários em todos os pilares.</p>
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
