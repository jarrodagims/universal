(function($) {
  $(document).ready(function() {
    $(".sidebar-link").click(function(e) {
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

    $(".slideshow").cycle({
      timeout: 8000,
      fx: "fade",
      slides: "> div",
      pauseOnHover: "true",
      pager: ".slide-nav",
      pagerTemplate: ""
      // autoHeight: "container"
    });

    (function() {
      var deskFunctions = function() {
        //make dropdown hoverable
        $(".dropdown-toggle").attr("data-toggle", "hover");

        $(".slideshow-blog").cycle("destroy");
      };

      var mobileFunctions = function() {
        //make dropdown clickable
        $(".dropdown-toggle").attr("data-toggle", "dropdown");

        $(".slideshow-blog").cycle({
          timeout: 8000,
          fx: "fade",
          slides: "> div",
          pauseOnHover: "true",
          next: "#slide-blog-nav",
          pagerTemplate: ""
          // autoHeight: "container"
        });
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
