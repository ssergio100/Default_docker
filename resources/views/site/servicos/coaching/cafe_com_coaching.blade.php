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
                  <p>Deseja realizar o seu ciclo de coaching com a DNA Happiness, oferecemos as melhores ferramentas do mercado, para que seus sonhos sejam transformados em objetivos e metas, e VOCÊ conquiste realização plena com resultados extraordinários!</p>
                  
                  <br>
                    <p>Aceite nosso convite e venha realizar uma sessão experimental. </p>
                    <br>
                   <p>Agende agora mesmo, nosso Café com Coaching.
                    Esperamos você e o encontro com a sua melhor versão!
                    
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
