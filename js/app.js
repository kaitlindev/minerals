/* Smooth Vertical or Horizontal Page Scrolling with jQuery
 * Author: Mary Lou
 * Date: 06.02.2010
 * Source: Codrops - http://tympanus.net/codrops/2010/06/02/smooth-vertical-or-horizontal-page-scrolling-with-jquery/
 * Reference: http://gsgd.co.uk/sandbox/jquery/easing/
 * Used: Down arrow in hero section.
 */

 $(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
