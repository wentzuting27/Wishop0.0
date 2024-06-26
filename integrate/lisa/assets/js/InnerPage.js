/**商品滑動**/
$(document).ready(function () {
  $("#slider-carousel, #slider-carouse2, #slider-carouse3, #slider-carouse4").each(function () {
    var owl = $(this);
    owl.owlCarousel({
      items: 3,
      itemsDesktop: [1000, 2],
      itemsDesktopSmall: [900, 2],
      itemsTablet: [800, 1],
      itemsMobile: false,
      pagination: false
    });
  });
});

// 获取按钮元素
const btnOne = document.getElementById('one');
const text = document.getElementById('one1');



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


document.addEventListener('DOMContentLoaded', function() {
  var buttons = document.querySelectorAll('.sparkle-button');

  buttons.forEach(function(button) {
      button.addEventListener('click', function() {
          buttons.forEach(function(btn) {
              btn.classList.remove('active');
              btn.style.backgroundColor = '#B0A5C6';
          });

          this.classList.add('active');
          this.style.backgroundColor = '#E9C9D6';
      });
  });
});



