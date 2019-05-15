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
  });
})(jQuery);
