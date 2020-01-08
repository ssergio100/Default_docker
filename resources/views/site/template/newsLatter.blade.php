<aside class="single_sidebar_widget newsletter_widget">
    <h4 class="widget_title">Newsletter</h4>
    <p> <small> Você pode confiar em nós. Enviaremos somente promoções e novidades</small></p>
    <form method="POST" action="/profile" id="form-newsletter">
    @csrf
       <div class="form-group">
          <input type="email" name="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder="Enter email" required="">
       </div>
       <button class="button btn-newsletter rounded-0 primary-bg text-white w-100 btn_4" type="submit">Subscribe</button>
    </form>
 </aside>