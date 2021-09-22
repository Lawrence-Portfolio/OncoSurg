var w = $(document).width()
$(window).scroll(function(){
   var h = $(document).scrollTop()
   w = $(document).width()
   if(h > 400) {
      $('.scrollTop').addClass('show')
   } else if(h < 400) {
      $('.scrollTop').removeClass('show')
   }

   if(h > 100 && w > 991) {
      $('.header-floating').addClass('header-fixed')
   } else if (h < 100 && w > 991) {
      $('.header-floating').removeClass('header-fixed')
   }
   if (h > 173 && w > 575) {
      $('.header-floating').addClass('header-fixed')
   } else if (h < 173 && w > 575) {
      $('.header-floating').removeClass('header-fixed')
   }
   if (h > 315 && w < 575) {
      $('.header-floating').addClass('header-fixed')
   } else if (h < 315 && w < 575) {
      $('.header-floating').removeClass('header-fixed')
   }
});

$(document).ready(function() {
   $('input[data-phone="true"]').mask("+7 (999) 999-99-99");
})