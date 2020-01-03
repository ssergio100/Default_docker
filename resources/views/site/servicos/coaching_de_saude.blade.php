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
                  <p>Indivíduos comprometidos com sua saúde, qualidade de vida e bem estar naturalmente buscam manter e investir no 
                    Coaching de Saúde para alcançar objetivos e metas elevados, como também a promoção de um estilo de vida 
                    com hábitos saudáveis a longo prazo e mudanças extraordinárias fisicamente, emocionalmente e espiritualmente.
                  </p>
                  <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- ================ section end ================= -->
@endsection
