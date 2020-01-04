@extends('site.template.template')


@section('content')

<!-- ================ section start ================= -->

@include('site.template.breadcrumb')

<section class="service_part section_padding gray_bg">
  <div class="container">
      <div class="row">
          <div class="col-sm-12 col-lg-12 col-xl-12">
              <div class="single_service_text">
                  <h2><?php echo $service?></h2>
                  <p>Quer conhecer o mapeamento e análise do seu perfil comportamental ou de sua equipe com 99% de precisão, conheça seus valores humanos e tudo sobre o seu comportamento, obtendo ganhos em suas relações e resultados.</p>
                  <br>
                   <p> Conquiste mais resultados através do Mapeamento e Análise do seu Perfil Comportamental, com devolutiva por um coach. Tenha sua vida transformada entendendo mais sobre você e como interage com o mundo, com ganhos extraordinários em todos os pilares.</p>
                    </p>
                  <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- ================ section end ================= -->
@endsection
