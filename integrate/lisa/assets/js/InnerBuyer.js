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
  
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  const labels = document.querySelectorAll('label[name^="box"]');
  
  // 檢查會話存儲中是否有付款狀態，如果有，則根據其值設置複選框的狀態和標籤的內容
  if (sessionStorage.getItem('paymentStatus') === 'paid') {
      checkboxes.forEach(checkbox => {
          checkbox.checked = true;
      });
      labels.forEach(label => {
          label.textContent = '已付款';
      });
  }
  
  // 複選框點擊事件監聽器
  checkboxes.forEach((checkbox, index) => {
      checkbox.addEventListener('change', function () {
          const isChecked = this.checked ? 1 : 0;
          const label = labels[index]; // 獲取相應的標籤元素
          const orderId = label.getAttribute('name'); // 獲取訂單ID
  
          // 發送AJAX請求
          const xhr = new XMLHttpRequest();
          xhr.open('POST', 'updatestatus.php');
          xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          xhr.onload = function () {
              if (xhr.status === 200) {
                  // 更新成功後的操作
                  console.log('更新成功');
                  // 更新按鈕文本
                  label.textContent = isChecked ? '已付款' : '未付款';
                  // 將狀態值存儲到會話存儲中
                  sessionStorage.setItem('paymentStatus', isChecked ? 'paid' : 'unpaid');
              } else {
                  // 處理錯誤
                  console.error('更新失敗');
              }
          };
          xhr.send('status=' + isChecked + '&order_id=' + orderId); // 發送狀態值和訂單ID
      });
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