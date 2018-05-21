$(function(){
	console.log('Running Modal Script');
	
	$('.close').on('click', function(){
		fadeOutModal();
	});

	$('#modal-btn').on('click',function(){
		fadeInModal();
	});
});
