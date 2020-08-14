$('.inicio').on('click', function () {
  $('.div-contact').css("display", "none");
  $('.div-service').css("display", "none");
  $('.div-about').css("display", "none");
  $('.div-sucess').css("display", "none");
  $('.div-home').css("display", "block");
});

$('.sobre').on('click', function () {
  $('.div-home').css("display", "none");
  $('.div-contact').css("display", "none");
  $('.div-service').css("display", "none");
  $('.div-sucess').css("display", "none");
  $('.div-about').css("display", "block");
});

$('.servicos').on('click', function () {
  $('.div-home').css("display", "none");
  $('.div-contact').css("display", "none");
  $('.div-about').css("display", "none");
  $('.div-sucess').css("display", "none");
  $('.div-service').css("display", "block");
});

$('.contato').on('click', function () {
  $('.div-home').css("display", "none");
  $('.div-about').css("display", "none");
  $('.div-service').css("display", "none");
  $('.div-sucess').css("display", "none");
  $('.div-contact').css("display", "block");
});

var behavior = function (val) {
  return val.replace(/\D/g, '').length === 11 ? '(00)00000-0000' : '(00)0000-00009';
}
// options = {
  // onKeyPress: function (val, e, field, options) {
      // field.mask(behavior.apply({}, arguments), options);
  // }
// };

$('#telefone').mask(behavior);

$('.enviar-mensagem').on('click', function () {
  var nome = $('#nome').val();
  var telefone = $('#telefone').val();
  var email = $('#email').val();
  var mensagem = $('#mensagem').val();
  
  if (nome == '') {
      alert('O nome precisa ser preenchido!');
  } else if (telefone == '') {
      alert('O telefone precisa ser preenchido!');
  } else if (email == '') {
      alert('O email precisa ser preenchido');
  } else if (mensagem == '') {
      alert('Preencha a sua mensagem');
  }else{
      $.ajax({
          url: '/enviar_mensagem',
          dataType: 'json',
          method: 'POST',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              'nome': nome,
              'telefone': telefone,
              'email': email,
              'mensagem': mensagem
          },
          success: function (data) {
            
          },
          error: function () {
              return;
          }
      });
      $('.div-contact').css("display", "none");
      $('.div-sucess').css("display", "block");
  }
});

