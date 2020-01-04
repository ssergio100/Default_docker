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
                  <p>Indivíduos com interesse em obter ganhos com trocas e experiências coletivas, têm no Coaching em Grupo a melhor opção para alavancar seus objetivos e metas.</p>
                  <br>
                   <p> O Coaching em Grupo permite a aplicação de ferramentas de coaching que favorecem aos indivíduos não somente atingir seus objetivos
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
