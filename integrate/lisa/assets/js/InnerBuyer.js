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


  
  /**切換頁面**/
  document.addEventListener("DOMContentLoaded", function () {
    var part2 = document.getElementById('card1');
  
    part2.addEventListener('click', function () {
      // 导航到新页面
      window.location.href = '../lisa/discussion.php#blog';
  
      // 页面加载后延迟执行滚动到指定区域
      window.addEventListener('load', function () {
        setTimeout(function () {
          var targetElement = document.querySelector('#blog');
          if (targetElement) {
            targetElement.scrollIntoView();
          }
        }, 1000); // 延迟 1 秒执行滚动操作
      });
    });
  });