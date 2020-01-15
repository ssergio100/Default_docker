$(document).ready(function () {
    $('select').niceSelect();

    jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });

});

var imNotARobot = function() {
    $('.btn-envia-mensagem').show()
  };

// newsletter
function newsletter(el) {
    let btn = $(el).clone()
    let input = $('input[name="email"]')
    $(el).remove()

    $('#form-newsletter').append('<span id="temp">Aguarde...</span>')
    let data = $('#form-newsletter').serialize()

    $.ajax({
        type: "post",
        url: "/newsletter",
        data: data,
        dataType: "json",
        beforeSend: function () {

        },
        success: function (response) {
            btn.appendTo('#form-newsletter')
            $('#temp').remove()

            if (!response.success) {
                input.focus();
                message(response.message, 'Ops!')
                return
            }
            message(response.message, null, 'success')
            input.val('')
        },
        error: function () {
            message('Ocorreu um erro na requisição.', 'Ops!')
        }
    });
}

// contato
function contato(el) {
    let btn = $(el).clone()
    $(el).remove()

    $('.div-btn-contato').append('<span id="temp">Aguarde...</span>')

    let data = $('#form-contato').serialize()

    $.ajax({
        type: "post",
        url: "/contato",
        data: data,
        dataType: "json",
        beforeSend: function () {

        },
        success: function (response) {
          
            if (!response.success) {
                if (response.target) {
                    var targets = response.target
                    var arr_targets = targets.split(",");

                    $.each(arr_targets, function (index, value) {
                        $('#' + value).focus();
                    });
                }
               

                message(response.message, 'Ops!', 'warning')
                return
            }
            $('#form-contato')[0].reset();
            $('#produto').val('');
            $('#produto').niceSelect('update');
            message(response.message,'Sucesso!', 'success')
        },
        error: function () {
            message('Ocorreu um erro na requisição.', 'Ops!', 'error')
        },
        complete:function(){
            btn.appendTo('.div-btn-contato')
            $('#temp').remove()
        }
    });
}


function message(text, title, icon) {
    Swal.fire({
        icon: icon,
        title: title,
        text: text,
    })
}
