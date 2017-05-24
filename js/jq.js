$(document).ready(function(){
  $(".confirmar").click(function(){
      return confirm('¿Seguro?');
  });

  $('.portrait').hover(function() {
        $(this).addClass('transition');

    }, function() {
        $(this).removeClass('transition');
    });
});
