$(document).ready(function () {
  $('#category-menu > li').hover(
    let id = $(this).data('id');
    $('.department-item').hide();
    $(`[data-parent=${id}]`).show(500);
  });
  $('header').css('height', $('#nav-bar').height());
  );

  $('header').css('height', $('#nav-bar').height());

  // Debounce
  function debounce(func, wait, immediate) {
    var timeout;
    return function executedFunction() {
      var context = this;
      var args = arguments;
      var later = function () {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  }
});
