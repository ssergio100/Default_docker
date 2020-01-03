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
                  <p>Indivíduos com interesse em obter ganhos com trocas e experiências coletivas, têm no Coaching em Grupo a melhor opção para alavancar seus objetivos e metas.</p>
                  <br>
                   <p> O Coaching em Grupo permite a aplicação de ferramentas de coaching que favorecem aos indivíduos não somente atingir seus objetivos
                    </p>
                  <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- ================ section end ================= -->
@endsection
