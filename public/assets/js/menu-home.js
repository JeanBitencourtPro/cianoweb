$('.inicio').on('click', function () {
  $('.div-contact').css("display", "none");
  $('.div-service').css("display", "none");
  $('.div-about').css("display", "none");
  $('.div-home').css("display", "block");
});

$('.sobre').on('click', function () {
  $('.div-home').css("display", "none");
  $('.div-contact').css("display", "none");
  $('.div-service').css("display", "none");
  $('.div-about').css("display", "block");
});

$('.servicos').on('click', function () {
  $('.div-home').css("display", "none");
  $('.div-contact').css("display", "none");
  $('.div-about').css("display", "none");
  $('.div-service').css("display", "block");
});

$('.contato').on('click', function () {
  $('.div-home').css("display", "none");
  $('.div-about').css("display", "none");
  $('.div-service').css("display", "none");
  $('.div-contact').css("display", "block");
});

var behavior = function (val) {
  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
options = {
  onKeyPress: function (val, e, field, options) {
      field.mask(behavior.apply({}, arguments), options);
  }
};

$('#telefone').mask(behavior, options);