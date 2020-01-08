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
                  <p>Palestras e Treinamentos especialmente elaborados para o autoconhecimento, desenvolvimento humano e despertar. Para nós da DNA Happiness é uma felicidade participar e ver o seu florescimento.
                </p>
                
                  <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
              </div>
          </div>
          <div class="col-md-5 mt-sm-30">
						<h3 class="mb-20">Alguns temas</h3>
						<div class="">
							<ul class="unordered-list">
								<li>O poder do Amor</li>
								<li>O poder do Perdão</li>
								<li>O poder da Felicidade</li>
								<li>O poder da Compaixão</li>
								<li>A escolha por uma vida extraordinária!</li>
								<li>Eu sou a minha cura</li>
								<li>Como ser um profissional extraordinário</li>
							</ul>
            </div>
            @include('site.template.newsLatter')
      </div>
  </div>
</div>

</section>
<!-- ================ section end ================= -->
@endsection
