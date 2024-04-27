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
  
  /**对于滑动的上一个和下一个按钮，我假设你使用的是相同的类名进行操作**/
    $('#pra').click(function() {
      $("#slider-carousel").trigger('prev.owl.carousel');
    });
  
    // 你的其他事件处理器代码...
  });
  
  /**訂單按鈕**/
  const checkbox = document.getElementById('box1');
  const label1 = document.getElementById('label1');
  
  // 添加点击事件监听器
  checkbox.addEventListener('click', function () {
    // 检查当前按钮文本
    if (checkbox.checked) {
      label1.textContent = '已付款';
    } else {
      label1.textContent = '未付款';
    }
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
  document.addEventListener("DOMContentLoaded", function () {
    var part3 = document.getElementById('card0');
  
    part3.addEventListener('click', function () {
      // 导航到新页面
      window.location.href = '../lisa/rewrite.php#contact';
  
      // 页面加载后延迟执行滚动到指定区域
      window.addEventListener('load', function () {
        setTimeout(function () {
          var targetElement = document.querySelector('#contact');
          if (targetElement) {
            targetElement.scrollIntoView();
          }
        }, 1000); // 延迟 1 秒执行滚动操作
      });
    });
  });