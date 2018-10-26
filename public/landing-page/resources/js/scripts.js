(function($) {
  "use strict";
  //Allows bootstrap carousels to display 3 items per page rather than just one
  $(".carousel.carousel-multi .item").each(function() {
    if ($(window).width() >= 992) {
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(":first");
      }
      next
        .children(":first-child")
        .clone()
        .attr("aria-hidden", "true")
        .appendTo($(this));

      if (next.next().length > 0) {
        next
          .next()
          .children(":first-child")
          .clone()
          .attr("aria-hidden", "true")
          .appendTo($(this));
      } else {
        $(this)
          .siblings(":first")
          .children(":first-child")
          .clone()
          .appendTo($(this));
      }
    } else {
      $(".left .carousel-control").addClass("carousel-control-prev");
      $(".right .carousel-control").addClass("carousel-control-next");
    }
  });
})(jQuery);
