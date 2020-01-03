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
                  <p>Decifre o seu talento, conheça quais são as suas habilidades, pontos fortes e como você pode fazer a melhor escolha para sua profissão - alinhando o seu propósito, com suas características e o que lhe faz feliz!</p>
                  <br>
                    <p>Cada vez mais os pais buscam realizar Coaching Vocacional para seus filhos, com o objetivo de proporcionar consciência sobre o que de fato os fazem felizes - e como isso poderia trazer ganhos financeiros extraordinários na escolha da profissão que mais se identificam. 
                    Profissionais também procuram o Coaching Vocacional com o objetivo de se prepararem para uma transição de carreira, ou ainda, buscarem agir estrategicamente com o desenvolvimento e ascensão de sua trajetória profissional.
                    O Coaching Vocacional abrange ferramentas dirigidas para a vida profissional do indivíduo, porém compõe em seu ciclo demais atividades que proporcionam ganhos mensuráveis e sustentáveis em todos os pilares da vida.</p>
                    </p>
                  <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- ================ section end ================= -->
@endsection
