window.modals = function() {
$('.detail_card .document_image').click(function() {
	$('#modal-certificate-container').addClass('animate_modal');
	$('body').addClass('modal-active');
});

$('.detail_card--right .another_date').click(function() {
	$('#modal-another-date-container').addClass('animate_modal');
	$('body').addClass('modal-active');
});

$('.detail_card--right .pay_less').click(function() {
	$('#modal-another-price-container').addClass('animate_modal');
	$('body').addClass('modal-active');
});

$('.preview_img').click(function() {
	$('#modal_preview_picture').addClass('animate_modal');
	$('body').addClass('modal-active');
});

//Close function
$('.modal--background, .modal-close').click(function(){
	
	$('#modal-certificate-container').removeClass('animate_modal');
	$('#modal-success-container').removeClass('animate_modal');
	$('#modal-another-date-container').removeClass('animate_modal');
	$('#modal-another-price-container').removeClass('animate_modal');
	$('#modal_preview_picture').removeClass('animate_modal');
	$('body').removeClass('modal-active');
	$('body').removeClass('modal-success-active');
});

}

modals();