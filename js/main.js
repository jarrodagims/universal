// @codekit-prepend "plugins.js";

(function($) {
  $(document).ready(function() {

      $('.waypoint').each(function(){
          var self = $(this);

          $(this).waypoint({
              handler: function(){
                  self.addClass('active');
              },
              offset: '50%'
          });
      });

      //waypoint activate animations in a staggered fashion
      $('.waypoint-stagger').each(function(){
          var goldenSection = 1 / 1.61803398875; /* ( 1 / phi ) */
          var ms_i_1 = 1 / goldenSection;

          $(this).waypoint({
              handler: function(){
                  var $objects = $('.waypoints');
                  $.each( $objects, function ( index, object ) {
                      setTimeout( function () {
                          $( object ).addClass( 'active' );
                      }, 120 * ( index + 1 ) * ms_i_1 );
                  });
              },
              offset: '50%'
          });
      });

      $('.expander').click(function (event) {
          event.preventDefault();
          $($(this).data("target")).slideToggle();
          $(this).toggleClass('expanded');
      });

      //make the three boxes clickable
      (function() {
          var $objects = $('.waypoints');
          $.each( $objects, function ( index, object ) {
              var $object = $( object );
              $object.on('click', function() {
                  var target = $(this).find('a').attr('href');
                  location.href = target;
              });
          });
      }());


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
                  //initialize the slider
                  $('.slideshow').cycle({
                      timeout: 8000,
                      fx: 'scrollHorz',
                      slides: '> div',
                      pauseOnHover: 'true',
                      pager: '.cycle-pager, .pager-links'
                  });
                  //move testimonial card around
                  $('.card').appendTo('.append-to-md');
                  //make dropdown hoverable
                  $('.dropdown-toggle').attr('data-toggle', 'hover');
              }

              else if ($(window).width() < 992) {
                  //remove slider
                  $('.slideshow').cycle('destroy');
                  //move testimonial card around
                  $('.card').appendTo('.append-to-sm');
                  //make dropdown clickable
                  $('.dropdown-toggle').attr('data-toggle', 'dropdown');
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
            pagers.each(function() {
                var pager = $(this);
                var text = $('h2', slide).text();
                var markup = $('<li><a href="#">' + text + '</a></li>');
                pagerLink = $( markup ).appendTo( pager );
                pagerLink.on( opts.pagerEvent, function(e) {
                    e.preventDefault();
                    opts.API.page( pager, e.currentTarget);
                });
            });
        }
    });



})(jQuery);
