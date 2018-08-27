// @codekit-prepend "plugins.js";

(function($) {
  $(document).ready(function() {
      $('.home-expander').click(function () {
          if ($(window).width() < 767) {
              $($(this).data("target")).slideToggle();
              $(this).toggleClass('expanded');
          }
      });

      $('.expander').click(function () {
          $($(this).data("target")).slideToggle();
          $(this).toggleClass('expanded');
      });

      $('#slideshow').cycle({
          fx:      'scrollHorz',
          timeout:  0,
          next:    '#next'
      });

      $.ajaxSetup({ cache: true });
      $.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
          FB.init({
              appId: '468686503635858',
              version: 'v2.7',
              accessToken:
          });
          FB.getLoginStatus(updateStatusCallback);
      });

      FB.api('/352272228167257', function(response) {
          console.log(response);
      });


  });
})(jQuery);
