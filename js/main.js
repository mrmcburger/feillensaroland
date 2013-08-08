$(function() {
	// INITIAL STATE
	$("#modalLogin").hide();

	// LOGIN
	$("#displayLogin").click(function() {
		$("#modalLogin").slideToggle();
		$("#displayLogin").toggleClass('open');
	});

	// PAGINATION LISTS
	$('.pag-objects').pajinate({
		items_per_page: 20
	});
});