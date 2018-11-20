// @codekit-prepend "plugins.js";

(function($) {
  $(document).ready(function() {

      $('.expander').click(function (event) {
          event.preventDefault();
          $($(this).data("target")).slideToggle();
          $(this).toggleClass('expanded');
      });

      $('.check-list li').each((function() {
          $(this).wrapInner('<span></span>');
      }));

      var drawCircles = function() {
          var $circle = $('.gradient-circle'),
              roundRadius = $circle.find('circle').attr('r'),
              roundPercent = $circle.data('percent'),
              roundCircum = 2 * roundRadius * Math.PI,
              roundDraw = roundPercent * roundCircum / 100
          $circle.css('stroke-dasharray', roundDraw  + ' 999');
      };

      var drawSwish = function() {
          var $circle = $('.icon-swish'),
              roundRadius = $circle.find('circle').attr('r'),
              roundPercent = $circle.data('percent'),
              roundCircum = 2 * roundRadius * Math.PI,
              roundDraw = roundPercent * roundCircum / 100
          $circle.css('stroke-dasharray', roundDraw  + ' 999');
      };


      $('.slideshow').cycle({
          timeout: 8000,
          fx: 'fade',
          slides: '> div',
          pauseOnHover: 'true',
          pager: '.cycle-pager, .slide-menu',
          pagerTemplate: '',
          paused: 'true'
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
          prev: '#prev3',
          caption: '.cycle-caption',
          captionPlugin: 'caption2',
          captionTemplate: '<h2>{{cycleTitle}}</h2>'
          // paused: true
          // autoHeight: 'container'
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

      $('.circle-waypoint').each(function(){
          var self = $(this);

          $(this).waypoint({
              handler: function(){
                  self.addClass('active');
                  drawCircles();
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
                  setTimeout( function () {
                      console.log('test');
                      $( '.center' ).addClass( 'active' );
                      setTimeout( function () {
                          $( '.inner' ).addClass( 'active' );
                          setTimeout( function () {
                              $( '.outer' ).addClass( 'active' );
                          }, 200 * ( 1 ) * ms_i_1 );
                      }, 200 * ( 2 ) * ms_i_1 );
                  }, 200 * ( 3 ) * ms_i_1 );
              },
              offset: '50%'
          });
      });


      (function() {
          var deskFunctions = function() {
              //make dropdown hoverable
              $('.dropdown-toggle').attr('data-toggle', 'hover');

              $('.slide-menu').appendTo($('.circle-list'));
          };

          var mobileFunctions = function() {

              //make dropdown clickable
              $('.dropdown-toggle').attr('data-toggle', 'dropdown');
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

    // builds the links for the slider navigation
    // $(document).on('cycle-bootstrap', function( e, opts, API ) {
    //     API.buildPagerLink = function(opts, slideOpts, slide) {
    //         var pagerLink;
    //         var pagers = opts.API.getComponent( 'pager' );
    //
    //         (function() {
    //             var pager = $(pagers[0]);
    //             var markup = $('<li></li>');
    //             pagerLink = $( markup ).appendTo( pager );
    //             pagerLink.on( opts.pagerEvent, function(e) {
    //                 e.preventDefault();
    //                 opts.API.page( pager, e.currentTarget);
    //             });
    //         })();
    //     }
    // });





})(jQuery);
