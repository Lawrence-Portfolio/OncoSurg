$(document).ready(function() {
   var newsSlider = tns ({
      container: '#prof-materials-slider',
      navContainer: '#prof-materials-thumbs',
      controlsContainer: '#prof-materials-controls',
      prevButton: '#prev-btn',
      nextButton: '#next-btn',
      controlsText: ['<i class="far fa-chevron-left"></i>', '<i class="far fa-chevron-right"></i>'],
      mouseDrag: true,
      gutter: 30,
      responsive: {
         992: {
            items: 3
         },
         768: {
            items: 2
         },
         0: {
            items: 1
         }
      }
   });
})