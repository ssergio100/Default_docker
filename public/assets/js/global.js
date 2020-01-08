$('#form-newsletter').submit(function(e){
    let data = $(this).serialize()
    e.preventDefault()
    $.ajax({
       type: "post",
       url: "/newsletter",
       data:data,
       dataType: "json",
       success: function (response) {
          
       }
    });
})