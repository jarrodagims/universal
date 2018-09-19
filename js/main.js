// @codekit-prepend "plugins.js";

(function($) {
  $(document).ready(function() {

      $('#slideshow').cycle({
          fx:      'scrollHorz',
          timeout:  0,
          next:    '#next'
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

  });

})(jQuery);
