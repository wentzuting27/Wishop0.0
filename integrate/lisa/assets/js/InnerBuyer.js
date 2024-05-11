/**商品滑動**/
$(document).ready(function() {
    $("#slider-carousel, #slider-carouse2, #slider-carouse3, #slider-carouse4").each(function() {
      var owl = $(this);
      owl.owlCarousel({
        items: 3,
        itemsDesktop: [1000, 4],
        itemsDesktopSmall: [900, 2],
        itemsTablet: [600, 1],
        itemsMobile: false,
        pagination: false
      });
    });
  
    // 你的其他事件处理器代码...
  });