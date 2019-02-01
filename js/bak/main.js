// @codekit-prepend "plugins.js";

(function($) {
  $(document).ready(function() {
    $(".sidebar-link").click(function(event) {
      var target = $(this).data("target");

      event.preventDefault();
      $("html, body").animate(
        {
          scrollTop: $(this)
            .data("target")
            .offset().top
        },
        300
      );
    });

    $(".check-list li").each(function() {
      $(this).wrapInner("<span></span>");
    });

    $(".slideshow").cycle({
      timeout: 8000,
      fx: "fade",
      slides: "> div",
      pauseOnHover: "true",
      pager: ".cycle-pager, .slide-menu",
      pagerTemplate: "",
      paused: "true"
      // autoHeight: 'container'
    });

    function adjustSlide() {
      /*jshint validthis: true */
      var slide = $(".internal-slideshow");
      var contW = $(".slideshow-container").width();
      var contH = $(".slideshow-container").height();
      var w = slide.outerWidth();
      var h = slide.outerHeight();
      slide.css("marginLeft", (contW - w) / 2);
    }

    $(".internal-slideshow").cycle({
      timeout: 8000,
      fx: "carousel",
      slides: "> div",
      pauseOnHover: "true",
      pager: ".cycle-pager",
      carouselVisible: 1,
      next: "#next3",
      prev: "#prev3",
      caption: ".cycle-caption",
      captionPlugin: "caption2",
      captionTemplate: "<h2>{{cycleTitle}}</h2>"
      // paused: true
      // autoHeight: 'container'
    });

    $(".waypoint").each(function() {
      var self = $(this);

      $(this).waypoint({
        handler: function() {
          self.addClass("active");
        },
        offset: "50%"
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
        adjustSlide();

        if ($(window).width() > 992) {
          deskFunctions();
        } else if ($(window).width() < 992) {
          mobileFunctions();
        }
      }

      resize();
    })();
  });
})(jQuery);
