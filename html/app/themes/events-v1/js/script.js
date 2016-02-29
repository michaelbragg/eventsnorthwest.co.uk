/* Author: Steven W. Hassall */

(function( $ ){

// background resize

if (!('backgroundSize' in document.body.style || 'MozBackgroundSize' in document.body.style)) {
    $(document).ready(function() {
        var background = $('body'), fallbackimage, fallbackpattern, overflowX, overflowY;

        background.prepend('<img src="images/Events-TempBG_Awards.jpg" id="fallbackimage">');
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

})( jQuery );

// drop down menu
(function($){

    //cache nav
    var nav = $("#navigation");

    //add indicator and hovers to submenu parents
    nav.find("li").each(function() {
      if ($(this).find("ul").length > 0) {
        //show subnav on hover
        $(this).mouseenter(function() {
          $(this).find("ul").stop(true, true).slideDown();
        });
        //hide submenus on exit
        $(this).mouseleave(function() {
          $(this).find("ul").stop(true, true).slideUp();
        });
      }
    });

})(jQuery);


//show / hide content
// toggles the slickbox on clicking the noted link
(function($) {
    $('.hiddenContent').hide();
    $('.showContent').click(function() {
        $('.hiddenContent').slideDown(400);
        return false;
    });
    $('.hideContent').click(function() {
        $('.hiddenContent').slideUp(400);
        return false;
    });
})( jQuery );


/*  Toggle Hidden - michaelbragg */


(function($){
$('.js-toggle__button').click(function() {
  console.log('Click');
  $(this).parents('.toggle').find('.js-toggle__hidden').toggleClass('visuallyhidden');
});

})( jQuery );


// Accordion
(function($) {

  var allPanels = $('.accordion > li > ul').hide();
  var h3Panels = $('.accordion > li > h3');

  $('.accordion > li > h3 > a').click(function() {
      $this = $(this);
      $target =  $this.parent().next();
      $targetParent = $this.parent();

      if(!$target.hasClass('active')){
         allPanels.removeClass('active').slideUp();
         h3Panels.removeClass('active');
         $target.addClass('active').slideDown();
         $targetParent.addClass('active');
      }

    return false;
  });

})(jQuery);

/*  --  Issue with following code - so placed last to stop it interfering with above  */

// gallery script
(function($) {
    var pictures = [],
        $pointer = $( '#pointer' ),
        $thumbnails = $( '#thumbnails' ),
        $title = $( '#title' ),
        $pause = $( '#pause' ),
        $flash = $( '#flash' );
    // jScrollPane
    $thumbnails.find( 'ul' ).width( function() {
        var totalWidth = 0;
        $( this ).find( 'li' ).each( function() {
            totalWidth += $( this ).outerWidth( true );
        });
        return totalWidth;
    });
    $thumbnails.jScrollPane();
    var jScrollPaneApi = $thumbnails.data( 'jsp' );
    $( window ).bind( 'resize', function() {
        jScrollPaneApi.reinitialise();
    });

    // Vegas Background

    $thumbnails.find( 'a' ).each( function() {
        pictures.push({
            src: $( this ).attr( 'href' ),
            title: $( this ).find( 'img' ).attr( 'title' ),
            valign: $( this ).find( 'img' ).data( 'valign' )
        });
    })

    $.vegas( 'slideshow', {
        backgrounds: pictures,
        delay: 8000,
    valign:top
     })( 'overlay' );

    $( 'body' ).bind( 'vegasload', function( e, img ) {
        var src = $( img ).attr( 'src' ),
            idx = $( 'a[href="' + src + '"]' ).parent( 'li' ).index();

        $title.fadeOut( function() {
            $( this ).find( 'h1' ).text( pictures[ idx ].title );
            $( this ).fadeIn();
        });

        $flash.show().fadeOut( 1000 );

        var pointerPosition = $thumbnails.find( 'li' ).eq( idx ).position().left;

        $pointer.animate({
            left: pointerPosition
        }, 500, 'easeInOutBack' );

        if ( ( pointerPosition > $thumbnails.width() || pointerPosition < jScrollPaneApi.getContentPositionX() ) && !$thumbnails.is( ':hover' ) ) {
            jScrollPaneApi.scrollToX( pointerPosition, true );
        }

        $pointer.click( function() {
            $thumbnails.find( 'a' ).eq( idx ).click()
        });
    });

    // Photograph

    $thumbnails.find( 'a' ).click( function() {
        $pause.show();
        $pointer.hide();

        $thumbnails.animate( { bottom: '-144px' });
        $title.animate( { bottom: '-90px' });

        var idx = $( this ).parent( 'li' ).index();
        $.vegas( 'slideshow', { step: idx } )( 'pause' );

        return false;
    });

    $pause.click( function() {
        $pause.hide();
        $pointer.show();

        $title.animate( { bottom:'0px' });
        $thumbnails.animate( { bottom:'0px' });

        $.vegas( 'slideshow' );

        return false;
    });
})(jQuery);
