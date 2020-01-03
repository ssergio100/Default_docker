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
                  <p><strong>O Executive Coaching, irá capacitá-lo para aplicar ferramentas capazes de atingir os seus objetivos de negócio, com aumento mensurável dos lucros e alta performance da equipe.</strong></p>
                  <br>
                   <p> Aqui é onde os resultados acontecem de fato!
                    Tome consciência dos seus limites e transforme-os em forças capazes de solucionar os desafios estratégicos da sua empresa, expandindo o seu potencial executivo, suas relações corporativas e a carreira profissional.</p>
                    <br>
                    <p>Se você tem objetivos ousados em sua carreira e negócio, faça a escolha pelo Executive Coaching!</p>
                    <br>
                    <p><strong>Artigo da Revista VOCÊ/SA – sobre a transformação dos executivos em suas carreiras, após o coaching</strong></p>
                    <br>
                    Pesquisa feita com 10 executivos que passaram por processo de Coaching, apontou que 100% aperfeiçoaram a capacidade de ouvir, 80% melhoraram a flexibilidade, 90% melhoraram a produtividade, 80% se mostraram mais abertos às mudanças organizacionais e 70% deles conseguiram melhorar o ambiente e os relacionamentos no trabalho. (Pontifícia Universidade Católica de Campinas – PUC Campinas)
                    </p>
                  <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- ================ section end ================= -->
@endsection
