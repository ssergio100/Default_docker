@extends('site.template.template')

@section('content')
   <!--::breadcrumb part start::-->
   @include('site.template.breadcrumb')
<!--::breadcrumb part start::-->
<!-- ================ idealizador ================= -->
<section class="about_part">
    <div class="container">
        <div class="row align-items-center justify-content-end">
            <div class="col-md-6 col-lg-6 col-xl-5">
                <div class="about_img">
                    <img src="{{ URL::asset('assets/img/about_img_1.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-6 offset-xl-1 col-xl-6">
                <div class="about_text">
                    <h2>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Ana Costa</font>
                        </font>
                    </h2>
                    <h4>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Apaixonada por gente, por criar conexões
                                sustentáveis, impactar e transformar pessoas positivamente através de suas palestras,
                                treinamentos empresariais e ciclos de coaching.</font>
                        </font>
                    </h4>
            
                       
                                <ul>
                                        <li>+20 anos de atuação em Comunicação e Marketing</li>
                                        <li>Consultora Empresarial para florescimento do potencial humano</li>
                                        <li>Facilitadora de Treinamento e Engajamento</li>
                                        <li>Facilitadora de Felicidade Interna Bruta</li>
                                        <li>Especialista em Liderança e Gestão de Pessoas</li>
                                        <li>Master Coach e Analista Comportamental</li>
                                        <li>Ministrante Oficial dos Best sellers do PHD Paulo Vieira</li>
                                        <li>Incentivadora de transformação pessoal, para vivência do Método CIS e demais imersões de autoconhecimento e cura.</li>
                                    </ul>

                 

                </div>
            </div>
        </div>
    </div>
    <div class="hero-app-7 custom-animation"><img src="img/animate_icon/icon_1.png" alt=""></div>
    <div class="hero-app-8 custom-animation2"><img src="img/animate_icon/icon_2.png" alt=""></div>
    <div class="hero-app-6 custom-animation3"><img src="img/animate_icon/icon_3.png" alt=""></div>
</section>
<script>

</script>
@endsection
