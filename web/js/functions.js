let fadeInModal = function(){
	console.log('Fading in modal');
	$('.modal').fadeIn();
	$('.modal-main').show();
}

let fadeOutModal = function(){
	console.log('Fading out modal');
	$('.modal-main').hide();
	$('.modal').fadeOut();
}
