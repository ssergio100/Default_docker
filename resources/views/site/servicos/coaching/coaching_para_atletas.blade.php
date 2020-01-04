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
                  <p><strong>Quando se fala em alta performance, resultados extraordinários e desempenho com níveis  cada vez melhores e impactantes para atletas - o Coaching para Atletas (Esportivo) é a escolha certa!</strong></p>
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
