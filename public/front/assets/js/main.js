$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > $(".hero").height()) {
    $('.home-fixed-button').fadeIn();
  } 
  else{
  	$('.home-fixed-button').fadeOut();
  }
});