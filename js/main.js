// @codekit-prepend "plugins.js";

(function($) {
  $(document).ready(function() {

      $('.expander').click(function (event) {
          event.preventDefault();
          $($(this).data("target")).slideToggle();
          $(this).toggleClass('expanded');
      });

      $('.slideshow').cycle({
          timeout: 8000,
          fx: 'fade',
          slides: '> div',
          pauseOnHover: 'true',
          pager: '.cycle-pager, .slide-menu',
          // autoHeight: 'container'
      });

      $('.internal-slideshow').cycle({
          timeout: 8000,
          fx: 'carousel',
          slides: '> div',
          pauseOnHover: 'true',
          pager: '.cycle-pager',
          carouselVisible: 1,
          next: '#next3',
          prev: '#prev3'
          // paused: true
          // autoHeight: 'container'
      });


      (function() {
          var deskFunctions = function() {


              //make dropdown hoverable
              // $('.dropdown-toggle').attr('data-toggle', 'hover');

              $('.waypoint').each(function(){
                  var self = $(this);

                  $(this).waypoint({
                      handler: function(){
                          self.addClass('active');
                      },
                      offset: '50%'
                  });
              });

              $('.slide-menu').appendTo($('.circle-list'));

          };

          var mobileFunctions = function() {
              //make dropdown clickable
              // $('.dropdown-toggle').attr('data-toggle', 'dropdown');
              $('.slide-menu').insertBefore($('.slideshow'));
          };

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
                  deskFunctions();
              }

              else if ($(window).width() < 992) {
                  mobileFunctions();
              }
          }

          resize();

      })();

  });

    //builds the links for the slider navigation
    $(document).on('cycle-bootstrap', function( e, opts, API ) {
        API.buildPagerLink = function(opts, slideOpts, slide) {
            var pagerLink;
            var pagers = opts.API.getComponent( 'pager' );

            (function() {
                var pager = $(pagers[0]);
                var markup = $('<li></li>');
                pagerLink = $( markup ).appendTo( pager );
                pagerLink.on( opts.pagerEvent, function(e) {
                    e.preventDefault();
                    opts.API.page( pager, e.currentTarget);
                });
            })();
        }
    });


})(jQuery);
