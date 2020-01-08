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
                   <p><strong> Coaching Integral Sistêmico</strong></p>
                   <br>
                   <p> O Coaching Integral Sistêmico trabalha o lado emocional do cérebro, 
                    através de ferramentas que são capazes de refazer crenças e limitações
                     emocionais. Contribuindo ainda com mudanças significativas em todas as
                      áreas da vida, de forma integral e sistêmica.</p> 
                    <br>
                    <p><strong>“Define-se Integral, porque neste método utilizam-se os dois hemisférios
                     cerebrais: o esquerdo responsável pela parte cognitiva e racional; e
                      o direito, pelas emoções, crenças e intuição.”</strong><small> Febracis</small></p>
                      <br>
                      <br>
                    <p><strong>Você gostaria de alcançar uma performance extraordinária em sua vida?</strong></p>
                    <br>
                    <p><strong>Você quer conhecer mais sobre o ciclo de coaching?</strong></p>
                    <br>
                    <p><strong>Você deseja ter autorresponsabilidade com a sua vida?</strong></p>
                    <br>

<p>O Coaching Integral Sistêmico propõe a realização de um ciclo de 1 sessões com a programação detalhada com resultados na prática, onde o Coach através de perguntas leva o coachee a um processo de autoconhecimento e ampliação da consciência, para que ele encontre as respostas e caminhos para tomadas de ação conscientes em sua vida.</p>
<br>
<p>Através do ciclo de coaching, o coachee (cliente) identifica o seu ESTADO ATUAL, define o ESTADO DESEJADO, reduz impedimentos e potencializa suas competências, e a partir de uma clareza maior do “olhar pra dentro” + “olhar pra fora”, desenha seus OBJETIVOS E METAS no PLANO DE AÇÃO focado para um RESULTADO SUSTENTÁVEL E ABUNDANTE em todas as áreas da vida (Espiritual, Parentes, Conjugal, Filhos, Social, Saúde, Servir, Intelectual, Financeiro, Profissional e Emocional).</p>


                        <a href="{{ URL::asset('contato') }}" class="btn_2">Entrar em contato</a>
                        
                </div>
            </div>
            <div class="col-md-4">
                @include('site.template.menuCoaching')
                @include('site.template.newsLatter')
               
            </div>
        </div>
    </div>
</section>

<!-- ================ section end ================= -->
@endsection
