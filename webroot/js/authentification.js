$(document).ready(function() {
	
	$('.navbar button.registration').popover({
		'title': 'Inscription',
		'placement': 'bottom',
		'html': true,
		'content': $('.navbar .registration_popover').html()
	});
	
});