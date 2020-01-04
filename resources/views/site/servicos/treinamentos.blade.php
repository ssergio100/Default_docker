@extends('site.template.template')


@section('content')

<!-- ================ section start ================= -->

@include('site.template.breadcrumb')

<section class="blog_area section_padding">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 mb-5 mb-lg-0">
              <div class="single_service_text">
                  <h2><?php echo $service?></h2>
                  <p><strong>No caminho do seu Florescer.</strong></p>
                  <br>
                  <p>Palestras e Treinamentos especialmente elaborados para o autoconhecimento, desenvolvimento humano e despertar. Para nós da DNA Happiness é uma felicidade participar e ver o seu florescimento.
                </p>
                
                  <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
              </div>
          </div>
          {{-- <div class="col-md-4">
                @include('site.template.menuTreinamentos')
            </div> --}}
      </div>
  </div>
</section>

<!-- ================ section end ================= -->
@endsection
