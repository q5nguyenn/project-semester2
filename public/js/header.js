$(document).ready(function () {
	$('#category-toggle').click(function () {
		$('#category-menu').toggle(300);
	});
	$('#user-toggle').click(function () {
		$('#user-menu').toggle(300);
	});
	$(document).click(function (event) {
		var targetElement = $(event.target);
		if (!targetElement.closest('#category').length) {
			$('#category-menu').hide(300);
			$('.department-item').hide(300);
		}
		if (!targetElement.closest('#user').length) {
			$('#user-menu').hide(300);
		}
	});

	$('#category-menu div').click(function (e) {
		e.preventDefault();
		let id = $(this).data('id');
		$('.department-item').hide(300);
		$(`[data-parent=${id}]`).show(300);
	});

	
	$('header').css('height', $('#nav-bar').height());
});
