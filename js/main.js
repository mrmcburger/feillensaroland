$(function() {
	// INITIAL STATE
	$("#modalLogin").hide();

	// LOGIN
	$("#displayLogin").click(function() {
		$("#modalLogin").slideToggle();
		$("#displayLogin").toggleClass('open');
	});
});