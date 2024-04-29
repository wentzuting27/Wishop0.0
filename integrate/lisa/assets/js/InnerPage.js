/**商品滑動**/
$(document).ready(function () {
  $("#slider-carousel, #slider-carouse2, #slider-carouse3, #slider-carouse4").each(function () {
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
  $('#pra').click(function () {
    $("#slider-carousel").trigger('prev.owl.carousel');
  });

  // 你的其他事件处理器代码...
});

// 获取按钮元素
const btnOne = document.getElementById('one');
const text = document.getElementById('one1');



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
  input.addEventListener('input', function () {
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

const checkboxes = document.querySelectorAll('input[type="checkbox"]');
const labels = document.querySelectorAll('label[name^="box"]');
/**
// 检查会话存储中是否有状态值，如果有则根据其值设置复选框的状态
if (sessionStorage.getItem('paymentStatus') === 'paid') {
  checkbox.checked = true;
  label1.textContent = '已付款';
}

// 复选框点击事件监听器
checkbox.addEventListener('click', function () {
  // 更新标签文本
  label1.textContent = checkbox.checked ? '已付款' : '未付款';
  
  // 将状态值存储到会话存储中
  sessionStorage.setItem('paymentStatus', checkbox.checked ? 'paid' : 'unpaid');
});**/
checkboxes.forEach((checkbox, index) => {
  checkbox.addEventListener('click', function () {
      const isChecked = checkbox.checked ? 1 : 0;
      const label = labels[index]; // 获取相应的标签元素
      const orderId = label.getAttribute('name'); // 获取订单ID
      // 发送 AJAX 请求
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'updatestatus.php');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onload = function () {
          if (xhr.status === 200) {
              // 更新成功后的操作
              console.log('更新成功');
              // 更新按钮文本
              label.textContent = isChecked ? '已付款' : '未付款';
          } else {
              // 处理错误
              console.error('更新失败');
          }
      };
      xhr.send('status=' + isChecked + '&order_id=' + orderId); // 发送状态值和订单ID
  });
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