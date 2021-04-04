$(document).ready(function(){
$('a').on('click', function(e){
  $('html,body').stop().animate({ scrollTop: $('#order').offset().top }, 1000);
  e.preventDefault();
});

$('form').submit(function(e) {
$("form button").attr('disabled',true);
});
});

