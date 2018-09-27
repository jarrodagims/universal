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

      $('.slideshow').cycle({
          timeout: 8000,
          fx: 'scrollHorz',
          slides: '> div',
          pauseOnHover: 'true',
          pager: '.cycle-pager, .pager-links'
      });
  });

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
