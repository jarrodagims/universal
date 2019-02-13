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

    //disable logs
    $.fn.cycle.log = $.noop;

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
    function stickyExample() {
      var $stickyElement = $(".sticky");

      if ($stickyElement.length) {
        sticky = new Waypoint.Sticky({
          element: $stickyElement[0]
        });
      }
    }

    stickyExample();

    //main floor plan slideshow
    $(".slideshow").cycle({
      timeout: 0,
      fx: "fade",
      slides: "> div",
      pauseOnHover: "true",
      // pager: ".slide-nav",
      next: ".slide-next",
      pagerTemplate: ""
      // autoHeight: "container"
    });

    //connect main slideshow to carousel
    var slideshows = $(".same-slideshow").on("cycle-next cycle-prev", function(
      e,
      opts
    ) {
      // advance the other slideshow
      slideshows.not(this).cycle("goto", opts.currSlide);
    });

    //cycle main slideshow when clicking list item
    $("body").on("click", "ul.slide-nav li", function() {
      var strIndex = $(this).attr("data-hard-index");
      $(".slideshow").cycle("goto", strIndex);
    });

    (function() {
      var deskFunctions = function() {
        //make dropdown hoverable
        $(".dropdown-toggle").attr("data-toggle", "hover");

        if ($(".slideshow-blog").cycle()) {
          $(".slideshow-blog").cycle("destroy");
        }

        $(".slide-nav").cycle({
          timeout: 0,
          fx: "carousel",
          slides: "> li",
          next: ".slide-nav-next",
          carouselVisible: 5,
          carouselFluid: true,
          allowWrap: true
        });
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
          pagerTemplate: "",
          autoHeight: "container"
        });

        $(".slide-nav").cycle({
          timeout: 0,
          fx: "carousel",
          slides: "> li",
          next: ".slide-nav-next",
          carouselVisible: 3,
          carouselFluid: true
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
