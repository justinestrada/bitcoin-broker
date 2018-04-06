/* Require jQuery */
if (!jQuery) { throw new Error("WP Theme requires jQuery") }
jQuery(function ($) {
  $('[data-toggle="tooltip"]').tooltip()
});
/* ==================================
* Start of General Site Wide JavaScript
================================== */
/* Loops through each widget panel element and changes the headings and toggles to be unique. */
jQuery(document).ready(function($){
  var i = 0;
  $('.widget-group .panel').each(function() {
    $(this).find('.panel-heading').attr('id', 'heading' + i);
    $(this).find('.panel-collapse').attr('id', 'toggle' + i);
    $(this).find('.panel-collapse').attr('aria-labelledby', 'heading' + i);
    $(this).find('.panel-title a').attr('href', '#toggle' + i);
    $(this).find('.panel-title a').attr('aria-controls', 'toggle' + i);
    i++;
  });
});
/* Toggle Off Accordion Icon CLick */
jQuery('.panel-title a').click(function(){
  var faIcon = jQuery(this).find('.rotate-this');
  if (faIcon.hasClass('rotate-up180') ){
    faIcon.removeClass('rotate-up180').addClass('rotate-0');
  } else {
    faIcon.removeClass('rotate-0').addClass('rotate-up180');
  }
});
function vidRescale(e){
  /* aspectRatio = 16:9 */
  var aspectRatioW = 16;
  var aspectRatioH = 9;
  jQuery(e).attr('width', '100%');
  var w = jQuery(e).width();
  var h = (w*aspectRatioH)/aspectRatioW;
  jQuery(e).height(h);
}
/* Function Calls */
jQuery( window ).on('load resize', function(){
  vidRescale('.responsive-video, .single-post-feat-img-wrapper iframe');
});


var isWatchLivePopupVisible = setInterval(function() {
    if ( jQuery( '#watch-live' ).css('display') == 'block' ) {
      vidRescale('#watch-live .responsive-video');
      clearInterval( isWatchLivePopupVisible );
      // console.log( 'inside' );
    }
    // console.log( 'outside' );
}, 250);

/* ==================================
* End of General Site Wide JavaScript
================================== */
