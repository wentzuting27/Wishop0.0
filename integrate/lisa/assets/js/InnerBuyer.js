/**商品滑動**/
$(document).ready(function() {
    $("#slider-carousel, #slider-carouse2, #slider-carouse3, #slider-carouse4").each(function() {
      var owl = $(this);
      owl.owlCarousel({
        items: 3.5,
        itemsDesktop: [1020, 2],
        itemsDesktopSmall: [900, 2],
        itemsTablet: [800, 1],
        itemsMobile: false,
        pagination: false,
        loop: true, // 启用循环
      autoplay: false, // 禁用自动播放
      mouseDrag: true, // 启用鼠标拖动
      touchDrag: true, // 启用触摸拖动
      });
    });
  
    // 你的其他事件处理器代码...
  });

// 獲取所有 checkbox 元素
var checkboxes = document.querySelectorAll('input[type="checkbox"]');

checkboxes.forEach(function (checkbox) {
  var label = document.querySelector('label[for="' + checkbox.id + '"]');
  var isChecked = localStorage.getItem("checkbox" + checkbox.dataset.orderId);

  if (isChecked === "true") {
    checkbox.checked = true;
    label.textContent = "已付款"; // 修改 label 的內容
  }

  if (label.textContent === "已付款") {
    checkbox.checked = true;
  }

  checkbox.addEventListener("click", function () {
    var orderId = checkbox.dataset.orderId;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "update_payment_state.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // 在此處處理後端 PHP 回應
        console.log(xhr.responseText);
      }
    };

    if (checkbox.checked) {
      localStorage.setItem("checkbox" + orderId, "true");
      label.textContent = "已付款"; // 修改 label 的內容
      xhr.send("order_id=" + orderId + "&payment_state=2");
    } else {
      localStorage.removeItem("checkbox" + orderId);
      label.textContent = "未付款"; // 修改 label 的內容
      xhr.send("order_id=" + orderId + "&payment_state=1");
    }
  });
});

   //改團體資訊
function displaySelectedImage(event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      const selectedImage = document.getElementById('selectedImage');
      selectedImage.src = e.target.result;
      selectedImage.style.display = 'block';
    }
    reader.readAsDataURL(file);
  }
}