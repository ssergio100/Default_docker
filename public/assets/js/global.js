$(document).ready(function() {
    $('select').niceSelect();
  });

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
            btn.appendTo('.div-btn-contato')
            $('#temp').remove()

            if (!response.success) {
  
                if(response.target) {
                    var targets = response.target
                    var arr_targets = targets.split(",");

                    $.each(arr_targets, function (index, value) { 
                        $('input[name="'+value+'"]').focus();
                        console.log('input[name="'+value+'"]')
                    });
                }

                message(response.message, 'Ops!')
                return
            }

           
            message(response.message, null, 'success')
            input.val('')
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


