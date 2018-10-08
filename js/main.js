// @codekit-prepend "plugins.js";

(function($) {
  $(document).ready(function() {

      $('.expander').click(function (event) {
          event.preventDefault();
          $($(this).data("target")).slideToggle();
          $(this).toggleClass('expanded');
      });

      $('.waypoint').each(function(){
          var self = $(this);

          $(this).waypoint({
              handler: function(){
                  self.addClass('active');
              },
              offset: '50%'
          });
      });

      (function() {
          //Only do slideshow on small screens
          var timeout;
          window.addEventListener('resize', function ( event ) {
              if (timeout) {
                  window.cancelAnimationFrame(timeout);
              }
              timeout = window.requestAnimationFrame(function () {
                  resize();
              });
          }, false);

          function resize() {
              if ($(window).width() > 992) {
                  //make dropdown hoverable
                  $('.dropdown-toggle').attr('data-toggle', 'hover');
              }

              else if ($(window).width() < 992) {
                  //make dropdown clickable
                  $('.dropdown-toggle').attr('data-toggle', 'dropdown');
              }
          }

          resize();

      })();
  });


})(jQuery);
