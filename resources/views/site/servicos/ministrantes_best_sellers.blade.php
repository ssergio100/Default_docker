@extends('site.template.template')


@section('content')

<!-- ================ section start ================= -->

@include('site.template.breadcrumb')

<section class="section_padding">
  <div class="container">
      <div class="row">
          <div class="col-lg-7 mb-5 mb-lg-0">
              <div class="single_service_text">
                  <h2><?php echo $service?></h2>
                  <p>Indivíduos comprometidos com sua saúde, qualidade de vida e bem estar naturalmente buscam manter e investir no 
                    Coaching de Saúde para alcançar objetivos e metas elevados, como também a promoção de um estilo de vida 
                    com hábitos saudáveis a longo prazo e mudanças extraordinárias fisicamente, emocionalmente e espiritualmente.
                  </p>
                  <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
              </div>
          </div>
  
          <div class="col-md-5 mt-sm-30">
						<h3 class="mb-20">Best Sellers do PHD PAULO VIEIRA</h3>
						<div class="">
							<ul class="unordered-list">
								<li>O poder da Ação – ministrante autorizada Febracis</li>
								<li>O poder da Autorresponsabilidade – ministrante autorizada Febracis</li>
								<li>Poder e Alta Performance – ministrante autorizada Febracis</li>
								<li>Foco na Prática – ministrante autorizada Febracis</li>
								<li>Decifre e Influencie Pessoas – ministrante autorizada Febracis</li>
								<li>Jeito de Viver em Família – ministrante autorizada Febracis</li>
								<li>Decifre seu Talento (Coaching Vocacional)- ministrante autorizada Febracis</li>
							</ul>
						</div>
		
            @include('site.template.newsLatter')
          </div>
         
         <!-- <ul>
         <li>O poder da Ação – ministrante autorizada Febracis</li>
         <li>O poder da Autorresponsabilidade – ministrante autorizada Febracis</li>
         <li>Poder e Alta Performance – ministrante autorizada Febracis</li>
         <li>Foco na Prática – ministrante autorizada Febracis</li>
         <li>Decifre e Influencie Pessoas – ministrante autorizada Febracis</li>
         <li>Jeito de Viver em Família – ministrante autorizada Febracis</li>
         <li>Decifre seu Talento (Coaching Vocacional)- ministrante autorizada Febracis</li>
         </ul> -->
      </div>
  </div>
</section>

<!-- ================ section end ================= -->
@endsection
