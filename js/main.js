// @codekit-prepend "plugins.js";

(function($) {
  $(document).ready(function() {
    // $(".expander").click(function(event) {
    //   event.preventDefault();
    //   $($(this).data("target")).slideToggle();
    //   $(this).toggleClass("expanded");
    // });

    // $(".expander").wrapInner("<span></span>");

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

    var hoverMenu = function() {
      var arr = [];

      $.each($("ul.menu-secondary > li"), function(index, value) {
        arr.push($(this));
      });

      $.each($("ul.menu li"), function(index, value) {
        $(this).hover(function() {
          $("ul.menu-secondary > li").removeClass("active");
          $("ul.menu li").removeClass("active");

          $(this).addClass("active");

          arr[index].addClass("active");
        });
      });
    };

    (function() {
      var deskFunctions = function() {
        //make dropdown hoverable
        $(".dropdown-toggle").attr("data-toggle", "hover");

        hoverMenu();
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
