// Instantiate Scrolls
var scroll = new SmoothScroll('a[href*="#"]:not([data-easing])');

if (document.querySelector('[data-easing]')) {
  var linear = new SmoothScroll('[data-easing="linear"]', {
    easing: 'linear'
  });

  var easeInQuad = new SmoothScroll('[data-easing="easeInQuad"]', {
    easing: 'easeInQuad'
  });
  var easeInCubic = new SmoothScroll('[data-easing="easeInCubic"]', {
    easing: 'easeInCubic'
  });
  var easeInQuart = new SmoothScroll('[data-easing="easeInQuart"]', {
    easing: 'easeInQuart'
  });
  var easeInQuint = new SmoothScroll('[data-easing="easeInQuint"]', {
    easing: 'easeInQuint'
  });

  var easeInOutQuad = new SmoothScroll('[data-easing="easeInOutQuad"]', {
    easing: 'easeInOutQuad'
  });
  var easeInOutCubic = new SmoothScroll('[data-easing="easeInOutCubic"]', {
    easing: 'easeInOutCubic'
  });
  var easeInOutQuart = new SmoothScroll('[data-easing="easeInOutQuart"]', {
    easing: 'easeInOutQuart'
  });
  var easeInOutQuint = new SmoothScroll('[data-easing="easeInOutQuint"]', {
    easing: 'easeInOutQuint'
  });

  var easeOutQuad = new SmoothScroll('[data-easing="easeOutQuad"]', {
    easing: 'easeOutQuad'
  });
  var easeOutCubic = new SmoothScroll('[data-easing="easeOutCubic"]', {
    easing: 'easeOutCubic'
  });
  var easeOutQuart = new SmoothScroll('[data-easing="easeOutQuart"]', {
    easing: 'easeOutQuart'
  });
  var easeOutQuint = new SmoothScroll('[data-easing="easeOutQuint"]', {
    easing: 'easeOutQuint'
  });
}

// // Log scroll events
// var logScrollEvent = function (event) {
// 	console.log('type:', event.type);
// 	console.log('anchor:', event.detail.anchor);
// 	console.log('toggle:', event.detail.toggle);
// };
// document.addEventListener('scrollStart', logScrollEvent, false);
// document.addEventListener('scrollStop', logScrollEvent, false);
// document.addEventListener('scrollCancel', logScrollEvent, false);