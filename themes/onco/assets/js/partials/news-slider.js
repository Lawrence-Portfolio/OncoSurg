$(document).ready(function() {
   var newsSlider = tns ({
      container: '#news-slider',
      navContainer: '#news-thumbs',
      controlsText: ['<i class="far fa-chevron-left"></i>', '<i class="far fa-chevron-right"></i>'],
      lazyload: true,
      mouseDrag: true,
      gutter: 30,
      responsive: {
         991: {
            items: 3
         },
         767: {
            items: 2
         },
         0: {
            items: 1
         }
      }
   });
})