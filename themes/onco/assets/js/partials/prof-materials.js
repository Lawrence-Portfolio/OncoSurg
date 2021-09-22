$(document).ready(function() {
   var newsSlider = tns ({
      container: '#prof-materials-slider',
      navContainer: '#prof-materials-thumbs',
      controlsText: ['<i class="far fa-chevron-left"></i>', '<i class="far fa-chevron-right"></i>'],
      lazyload: true,
      mouseDrag: true,
      gutter: 10,
      responsive: {
         1200: {
            items: 2
         },
         0: {
            items: 1
         }
      }
   });
})