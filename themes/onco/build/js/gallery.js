$('.video-card').magnificPopup({
   delegate: 'a',
   type: 'iframe'
});
$('.video-gallery').each(function() {
   $(this).magnificPopup({
       delegate: 'a',
       type: 'iframe',
       gallery: {
           enabled:true
       }
   });
});
$('.photo-gallery').each(function() {
    $(this).magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled:true
        }
    });
 });