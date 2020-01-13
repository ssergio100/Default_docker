@extends('site.template.template')
   
@section('content')
 <!-- ================ contact section start ================= -->
 <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Entre em contato</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Assunto'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sua mensagem'" placeholder = 'Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="nome" id="nome" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" placeholder = 'Nome'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="sobrenome" id="sobrenome" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sobrenome'" placeholder = 'Sobrenome'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu e-mail'" placeholder = 'Seu e-mail'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tel. Celular'" placeholder = 'Tel. Celular'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tel. Comercial'" placeholder = 'Tel. Comercial'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                
                    <select>
                  
                    <optgroup label="Coaching"  data-i="1"> 
                      <option value="">Life Coaching</option>
                      <option value="">Business Coaching</option>
                      <option value="">Executive Coaching</option>
                      <option value="">Coaching Vocacional</option>
                      <option value="">Coaching de Saúde</option>
                      <option value="">Coaching em Grupo</option>
                      <option value="">Coaching para Atletas</option>
                      <option value="">Coaching Assessment</option>
                      <option value="">Café com coaching</option>
                      </optgroup>
                      <optgroup label="Treinamentos" data-i="2">  
                          <option value="">Treinamentos</option>
                          </optgroup>
                    
                      <optgroup label="Ministrantes Best Sellers" data-i="3">
                        <option value="">Ministrantes Best Sellers</option>
                      </optgroup>
                      <optgroup label="Comunicação Positiva" data-i="4">Comunicação Positiva
                        <option value="">Consultoria Empresarial</option>
                        <option value="">Facilitadora de Treinamento</option>
                        <option value="">Endomarketing e Comunicação Interna</option>
                        <option value="">Felicidade Interna Bruta - FIB</option>
                      </optgroup>
                     
</select>
                </div>


               

              </div>
         
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4">Enviar Mensagem</button>
            </div>
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
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>ana@dnahappiness.com</h3>
              <p>Envie um email a qualquer hora!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
@endsection
