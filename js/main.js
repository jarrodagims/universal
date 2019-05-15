(function($) {
  $(document).ready(function() {
    $(".sidebar-link.contact-link").click(function(e) {
      e.preventDefault();

      $("html, body").animate(
        {
          scrollTop: $($(this).attr("href")).offset().top
        },
        500,
        "linear"
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

    //stick nav
    // function stickyExample() {
    //   var $stickyElement = $(".sticky");

    //   if ($stickyElement.length) {
    //     sticky = new Waypoint.Sticky({
    //       element: $stickyElement[0]
    //     });
    //   }
    // }

    // stickyExample();

    //cycle main slideshow when clicking list item

    (function() {
      var deskFunctions = function() {
        //make dropdown hoverable
        // $(".dropdown-toggle").attr("data-toggle", "hover");
        // $(".top-header").prependTo(".jumbo-container");
      };

      var mobileFunctions = function() {
        //make dropdown clickable
        // $(".dropdown-toggle").attr("data-toggle", "dropdown");
        // $(".top-header").prependTo(".sidebar-container");
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
