@extends('site.template.template')
   
@section('content')
 <!-- ================ contact section start ================= -->
 <section class="contact-section section_padding">
    <div class="container">


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Entre em contato</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" method="POST" action="" id="form-contato" novalidate="novalidate">
          @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" required name="assunto" id="assunto" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assunto'" placeholder = 'Assunto'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" required name="mensagem" id="mensagem" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sua mensagem'" placeholder = 'Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="nome" required id="nome" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" placeholder = 'Nome'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="sobrenome" id="sobrenome" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sobrenome'" placeholder = 'Sobrenome'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" required name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu e-mail'" placeholder = 'Seu e-mail'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control telefone" name="celular" id="celular" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tel. Celular'" placeholder = 'Tel. Celular'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control telefone" name="telefone" id="telefone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tel. Comercial'" placeholder = 'Tel. Comercial'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <select class="wide" id="produto" name="produto" required>
                      <option value=''>selecione</option>
                      <option value="Coaching"><strong>Coaching</strong></option>
                      <option value="Life Coaching">--Life Coaching</option>
                      <option value="Business Coaching">--Business Coaching</option>
                      <option value="Executive Coaching">--Executive Coaching</option>
                      <option value="Coaching Vocacional">--Coaching Vocacional</option>
                      <option value="Coaching de Saúde">--Coaching de Saúde</option>
                      <option value="Coaching em Grupo">--Coaching em Grupo</option>
                      <option value="Coaching para Atletas">--Coaching para Atletas</option>
                      <option value="Coaching Assessment">--Coaching Assessment</option>
                      <option value="Café com coaching">--Café com coaching</option>

                      <option value="Treinamentos">Treinamentos</option>

                      <option value="Ministrantes Best Sellers">Ministrantes Best Sellers</option>

                      <option value="Comunicação Positiva"><strong>Comunicação Positiva</strong></option>
                      <option value="Consultoria Empresarial">--Consultoria Empresarial</option>
                      <option value="Facilitadora de Treinamento">--Facilitadora de Treinamento</option>
                      <option value="Endomarketing e Comunicação Interna">--Endomarketing e Comunicação Interna</option>
                      <option value="Felicidade Interna Bruta - FIB">--Felicidade Interna Bruta - FIB</option>
                      </select>
                </div>

              </div>
              <div class="col-sm-6">
                <div class="form-group mt-3">
                <div class="g-recaptcha" data-callback="imNotARobot" data-sitekey="6LeksM8UAAAAAG-VyxtSJz-fbv5SZ8oV1ZAxbyId"></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group mt-3 div-btn-contato">
                <button class="genric-btn primary-border btn-block btn-envia-mensagem" style="display:none" onclick="contato(this)">Enviar Mensagem</a>
                </div>
              </div>

            </div>
            <!-- <div class="form-group mt-3 div-btn-contato">
            <button class="genric-btn primary-border btn-block" onclick="contato(this)">Enviar Mensagem</a>
            </div> -->
           
          </form>
        </div>
        <div class="col-lg-4">
          {{-- <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div> --}}
          {{-- <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div> --}}
          <div class="media contact-info">
            <span class="contact-info__icon"><a href="mailto:{{$responsavel_contato}}"><i class="ti-email"></i></a></span>
            <div class="media-body">
              <h3>{{$responsavel_contato}}</h3>
              <p>Envie um email a qualquer hora!</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><a href="https://api.whatsapp.com/send?phone=55{{$whatsapp}}&text=ol%C3%A1"><i class="fab fa-whatsapp"></i></a></span>
            <div class="media-body">
              <h3>{{$whatsapp}}</h3>
              <p>Também estamos no Whatsapp ;)</p>
            </div>
          </div>
        </div>
      </div>
    
  </section>
  <!-- ================ contact section end ================= -->
@endsection
