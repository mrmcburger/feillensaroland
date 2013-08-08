$(function() {
	// INITIAL STATE
	$("#modalLogin").hide();

	// LOGIN
	$("#displayLogin").click(function() {
		$("#modalLogin").slideToggle();
		$("#displayLogin").toggleClass('open');
	});

	// PAGINATION LISTS
	var len = document.getElementById('modalGallery').getElementsByTagName('img').length,
		pageNumber = len / 20,
		pageNumberInt = Math.floor(pageNumber);

	$('.pag-objects').pajinate({
		items_per_page: 20,
		start_page: pageNumberInt
	});
});