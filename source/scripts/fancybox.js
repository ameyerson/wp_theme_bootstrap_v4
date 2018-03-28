'use strict';

$(document).ready(function() {
    
    if ($('[data-fancybox="gallery"]').length > 0) {

        $( '[data-fancybox="images"]' ).fancybox({
          caption : function( instance, item ) {
            var caption = $(this).data('caption') || '';

            if ( item.type === 'image' ) {
              caption = (caption.length ? caption + '<br />' : '') + '<a href="' + item.src + '">Download image</a>' ;
            }

            return caption;
          }
        });
    }

});
