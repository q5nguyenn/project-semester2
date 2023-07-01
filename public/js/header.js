$(document).ready(function () {
  $('#category-menu > li').hover(
    function (e) {
      let id = $(this).data('id');
      $('.department-item').hide();
      $(`[data-parent=${id}]`).show(500);
    }),
    $('header').css('height', $('#nav-bar').height());
  });

<<<<<<< HEAD
  $("#category-menu div").click(function (e) {
    e.preventDefault();
    let id = $(this).data("id");
    $(".department-item").hide(300);
    $(`[data-parent=${id}]`).show(300);
  });


  $("header").css("height", $("#nav-bar").height());

});
=======
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
>>>>>>> 78fb69b1ea3b12b0c8c69fe11c34f1c04666abec
