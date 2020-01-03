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
      </div>
  </div>
</section>

<!-- ================ section end ================= -->
@endsection
