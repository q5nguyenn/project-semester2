function checkEmpty(element, alert, position) {
	if (!element.val() || element.val().length == 0) {
		if (position == 'n') {
			element.nextAll('.input-item-error:first').html(alert);
		} else {
			element.parent().next('.input-item-error').html(alert);
		}
		return false;
	} else {
		if (position == 'n') {
			element.nextAll('.input-item-error:first').html('&nbsp;');
		} else {
			element.parent().next('.input-item-error').html('&nbsp;');
		}
		return true;
	}
}