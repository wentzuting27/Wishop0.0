//商品
$(document).ready(function() {
  var owl = $("#slider-carousel");
  owl.owlCarousel({
    items: 3,
    itemsDesktop: [1000, 4],
    itemsDesktopSmall: [900, 2],
    itemsTablet: [600, 1],
    itemsMobile: false,
    pagination: false
  });
});
//商品
$(document).ready(function() {
  var owl = $("#slider-carouse2");
  owl.owlCarousel({
    items: 3,
    itemsDesktop: [1000, 4],
    itemsDesktopSmall: [900, 2],
    itemsTablet: [600, 1],
    itemsMobile: false,
    pagination: false
  });
});
//商品
$(document).ready(function() {
  var owl = $("#slider-carouse3");
  owl.owlCarousel({
    items: 3,
    itemsDesktop: [1000, 4],
    itemsDesktopSmall: [900, 2],
    itemsTablet: [600, 1],
    itemsMobile: false,
    pagination: false
  });
});
//商品
$(document).ready(function() {
  var owl = $("#slider-carouse4");
  owl.owlCarousel({
    items: 3,
    itemsDesktop: [1000, 4],
    itemsDesktopSmall: [900, 2],
    itemsTablet: [600, 1],
    itemsMobile: false,
    pagination: false
  });
});

window.addEventListener('load', function() {
  var listContainer = document.getElementById('list-container');
  var screenHeight = window.innerHeight;
  var targetHeight = 900; // 设定目标高度

  window.addEventListener('scroll', function() {
    var currentHeight = window.scrollY;
    if (currentHeight <= targetHeight && screenHeight <= targetHeight) {
      listContainer.style.display = 'block';
    } else {
      listContainer.style.display = 'none';
    }
  });
});


document.getElementById('pra').addEventListener('click', function() {
  var owl = document.querySelector(
    "#slider-carousel");
      owl.owlCarousel(); // 初始化 Owl Carousel
      owl.trigger('prev.owl.wrapper.outer'); // 触发向前滑动
});

// 取得按鈕元素
const btnOne = document.getElementById('one');

// 添加点击事件监听器
btnOne.addEventListener('click', function() {
  // 检查当前按钮文本
  if (btnOne.textContent === '我要跟團') {
    // 如果当前文本是 '我要跟團'，则切换为 '取消跟團'
    btnOne.textContent = '取消跟團';
  } else {
    // 否则，切换为 '我要跟團'
    btnOne.textContent = '我要跟團';
  }
});


//對帳表
var textElement = document.getElementById('scrollingText');
var textContent = textElement.textContent.trim();




  
  


