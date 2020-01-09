

function newsletter(el){
    let btn = $(el).clone()
    $(el).remove()

    $('#form-newsletter').append('<span id="temp">Aguarde...</span>')
   
    let data = $('#form-newsletter').serialize()
  
    $.ajax({
       type: "post",
       url: "/contato/newsletter",
       data:data,
       dataType: "json",
       beforeSend:function(){
            $('.btn-newsletter').text('Aguarde...').addClass('disable')
       },
       success: function (response) {
          if(!response.success) {
              console.log(btn)
            
              message(response.message, 'Ops!')
              return
          }
          message(response.message, null, 'success')
          $('#temp').remove()
          btn.appendTo('#form-newsletter')
       }
    
    });
}


function message(text, title = 'Sucesso!', icon = 'error') {
    Swal.fire({
        icon: icon,
        title: title,
        text: text,
      })
}