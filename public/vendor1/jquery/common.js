$(document).ready(function(){
  $('#check').click(function(){
    if($('#password').attr('type') == 'password'){
      $('#password').prop('type', 'text');
      $(this).find('span').attr('class','fas fa-unlock')
    }else{
      $('#password').prop('type', 'password');
      $(this).find('span').attr('class','fas fa-lock')
    }
  });
});
$(window).load(function() {
    $(".loader").fadeOut(3000);
});