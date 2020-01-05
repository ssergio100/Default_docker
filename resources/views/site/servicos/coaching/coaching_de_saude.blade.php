@extends('site.template.template')


@section('content')

<!-- ================ section start ================= -->

@include('site.template.breadcrumb')

<section class="section_padding">
  <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
              <div class="single_service_text">
                  <h2><?php echo $service?></h2>
                  <p>Indivíduos comprometidos com sua saúde, qualidade de vida e bem estar naturalmente buscam manter e investir no 
                    Coaching de Saúde para alcançar objetivos e metas elevados, como também a promoção de um estilo de vida 
                    com hábitos saudáveis a longo prazo e mudanças extraordinárias fisicamente, emocionalmente e espiritualmente.
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
