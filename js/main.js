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

      var logo = $('#header-logo');
      var list = $('#menu-primary').children();
      var middle = list[Math.floor(list.length / 2)];

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

                  $('<li id="logo-container" class="menu-item"></li>').append($(logo)).insertBefore($(middle));

                  //make dropdown hoverable
                  $('.dropdown-toggle').attr('data-toggle', 'hover');
              }

              else if ($(window).width() < 992) {

                  $('.navbar-button').prepend($(logo));
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
