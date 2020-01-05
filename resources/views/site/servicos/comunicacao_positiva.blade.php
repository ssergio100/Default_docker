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
                  <p>Texto</p>
                  <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
              </div>
          </div>
          <div class="col-md-4">
            @include('site.template.menuComunicacaoPositiva')
            @include('site.template.newsLatter')
        </div>
      </div>
  </div>
</section>

<!-- ================ section end ================= -->
@endsection
