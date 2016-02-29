/* Author: Steven W. Hassall

*/

if (!('backgroundSize' in document.body.style || 'MozBackgroundSize' in document.body.style)) {
    $(document).ready(function() {
        var background = $('body'), fallbackimage, fallbackpattern, overflowX, overflowY;
         
        background.prepend('<img src="images/grass.jpg" id="fallbackimage">');
        background.prepend('<div id="fallbackpattern"></div>');
         
        fallbackimage = $('#fallbackimage');
        fallbackpattern = $('#fallbackpattern');
         
        $(window).on("load resize", centerImage);
         
        function centerImage() {        
            overflowX = (fallbackpattern.width() - fallbackimage.width()) / 2;
            overflowY = (fallbackpattern.height() - fallbackimage.height()) / 2;                    
            fallbackimage.css('margin-left', overflowX+'px');
            fallbackimage.css('margin-top', overflowY+'px');
        }
         
    });
}



