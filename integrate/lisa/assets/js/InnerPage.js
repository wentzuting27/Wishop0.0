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

// 获取按钮元素
const btnOne = document.getElementById('one');
const text = document.getElementById('one1');

// 添加点击事件监听器
btnOne.addEventListener('click', function() {
  // 检查当前按钮文本
  if (text.textContent.trim() === '我要跟團') {
    // 如果当前文本是 '我要跟團'，则切换为 '取消跟團'
    text.textContent = '取消跟團';
  } else {
    // 否则，切换为 '我要跟團'
    text.textContent = '我要跟團';
  }

  // 取得模態框標題元素
  const modalTitle = document.getElementById('leaveLabel');
  // 修改模態框標題
  modalTitle.textContent = '請注意';

  // 取得模態框內容元素
  const modalContent = document.querySelector('#leave .modal-content');
  // 修改模態框內容
  modalContent.innerHTML = `
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="leaveLabel">請注意</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <h6 style="color:red;padding-left:10px">跟團後無法退團</h6>
            <div class="modal-footer">
              <button type="button" name="addgroup" class="btn btn-primary" id="one" data-bs-dismiss="modal">確定</button>
            </div>`
;
}); 

document.getElementById('pra').addEventListener('click', function () {
  var owl = document.getElementById("slider-carousel");
  $(owl).owlCarousel(); // 初始化 Owl Carousel
  $(owl).trigger('prev .owl-carousel'); // 觸發向前滑動
});

/**商品**/
 // 获取所有输入框元素
 const quantityInputs = document.querySelectorAll('[id^="quantityInput"]');

 // 添加事件监听器
 quantityInputs.forEach(input => {
     input.addEventListener('input', function() {
         // 获取输入框的值
         const value = parseInt(this.value);

         // 检查值是否大于0
         if (value <= 0 || isNaN(value)) {
             // 如果值小于等于0或者不是一个有效的数字，则将值设为0
             this.value = 0;
         }

         // 重新计算总价和每个商品的小计
         let totalPrice = 0;
         quantityInputs.forEach((quantityInput, index) => {
             // 获取对应商品的单价和数量
             const price = parseFloat(document.querySelectorAll('[data-th="Price"]')[index].textContent.replace('$', ''));
             const quantity = parseInt(quantityInput.value);

             // 计算小计
             const subtotal = quantity * price;

             // 更新对应商品的小计
             document.querySelectorAll('[data-th="Subtotal"]')[index].textContent = '$' + subtotal.toFixed(0);

             // 累加到总价中
             totalPrice += subtotal;
         });

         // 更新总价，保留两位小数
         document.getElementById('totalPrice').textContent = 'Total $' + totalPrice.toFixed(0);
        });
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
  
  
/**
 * 賣家
 * **/


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