(function($) {
  "use strict";

  // Control buttons
  $("#myCarousel .carousel-control-next").click(function() {
    $("#myCarousel").carousel("next");
    return false;
  });
  $("#myCarousel .carousel-control-prev").click(function() {
    $(" #myCarousel").carousel("prev");
    return false;
  });

  // On carousel scroll
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $("#myCarousel .carousel-item").length;
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(" #myCarousel .carousel-item")
            .eq(i)
            .appendTo(" #myCarousel .carousel-inner");
        } else {
          $("#myCarousel .carousel-item")
            .eq(0)
            .appendTo("#myCarousel .carousel-inner");
        }
      }
    }
  });
})(jQuery);
