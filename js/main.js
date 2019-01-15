// @codekit-prepend "plugins.js";

(function($) {
  $(document).ready(function() {
    $(".expander").click(function(event) {
      event.preventDefault();
      $($(this).data("target")).slideToggle();
      $(this).toggleClass("expanded");
    });

    $(".expander").wrapInner("<span></span>");

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

    //waypoint activate animations in a staggered fashion
    $(".waypoint-stagger").each(function() {
      var goldenSection = 1 / 1.61803398875; /* ( 1 / phi ) */
      var ms_i_1 = 1 / goldenSection;

      $(this).waypoint({
        handler: function() {
          $.each($(".waypoint-stagger .flex-row .flex-col"), function(
            index,
            object
          ) {
            var $object = $(object);

            setTimeout(function() {
              $object.addClass("active");
            }, 120 * (index + 1) * ms_i_1);
          });
          //disable after activating once
          this.destroy();
        },
        offset: "2000"
      });
    });

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
