function checkEmpty(element, alert, position) {
  if (!element.val() || element.val().length == 0) {
    if (position == "n") {
      element.nextAll(".input-item-error:first").html(alert);
    } else {
      element.parent().next(".input-item-error").html(alert);
    }
    return false;
  } else {
    if (position == "n") {
      element.nextAll(".input-item-error:first").html("&nbsp;");
    } else {
      element.parent().next(".input-item-error").html("&nbsp;");
    }
    return true;
  }
}

function showStarRate(rate) {
  let num = (Math.round((rate * 10) / 5) * 5) / 10;
  let phannguyen = Math.floor(num);
  let phandu = num - phannguyen;
  let htmlString = "";
  if (phandu == 0) {
    for (let i = 1; i <= phannguyen; i++) {
      htmlString += `<i class="bi bi-star-fill"></i>`;
    }
    for (let i = phannguyen + 1; i <= 5; i++) {
      htmlString += `<i class="bi bi-star"></i>`;
    }
  } else {
    for (let i = 1; i <= phannguyen; i++) {
      htmlString += `<i class="bi bi-star-fill"></i>`;
    }
    htmlString += `<i class="bi bi-star-half"></i>`;
    for (let i = phannguyen + 2; i <= 5; i++) {
      htmlString += `<i class="bi bi-star"></i>`;
    }
  }
  return htmlString;
}
