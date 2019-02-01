// @codekit-prepend "plugins.js";

(function($) {
  $(document).ready(function() {
    $(".sidebar-link").click(function(event) {
      var target = $($(this)).data("target");

      event.preventDefault();
      $("html, body").animate(
        {
          scrollTop: $($(this))
            .data("target")
            .offset().top
        },
        300
      );
    });

    $(".waypoint").each(function() {
      var self = $(this);

      $(this).waypoint({
        handler: function() {
          self.addClass("active");
          //disable after activating once
          this.destroy();
        },
        offset: "50%"
      });
    });

    function stickyExample() {
      var $stickyElement = $(".sticky");

      if ($stickyElement.length) {
        sticky = new Waypoint.Sticky({
          element: $stickyElement[0],
          wrapper: '<div class="sticky-wrapper waypoint" />'
        });
      }
    }

    stickyExample();

    (function() {
      var deskFunctions = function() {
        //make dropdown hoverable
        $(".dropdown-toggle").attr("data-toggle", "hover");
      };

      var mobileFunctions = function() {
        //make dropdown clickable
        $(".dropdown-toggle").attr("data-toggle", "dropdown");
      };

      //Only do slideshow on small screens
      var timeout;
      window.addEventListener(
        "resize",
        function(event) {
          if (timeout) {
            window.cancelAnimationFrame(timeout);
          }
          timeout = window.requestAnimationFrame(function() {
            resize();
          });
        },
        false
      );

      function resize() {
        if ($(window).width() >= 992) {
          deskFunctions();
        } else if ($(window).width() < 992) {
          mobileFunctions();
        }
      }

      resize();
    })();
  });
})(jQuery);
