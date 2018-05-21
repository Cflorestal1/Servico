$(function(){
	
	console.log("Running main script");
	
	$('#btn-need, #btn-make').on('click',function(){
		populate('registration');
		fadeInModal();
	});
	
	
	$('.close').on('click',function(){
		fadeOutModal();
	});
	
	
	$('#login-btn').on('click', function(){
		console.log("Log in button clicked.");
		populate('login');
		fadeInModal();
	});
		
		
	
	function populate(data){
		console.log("populate function executed.");
		
		switch(data){
			case 'registration':
				$('#login-container').css('display','none')
				$('#registration-container').css('display','block');
				break;
			case 'login':
				$('#login-container').css('display','block')
				$('#registration-container').css('display','none');
				break;
			default:
				break;
		}
	}
	
	/*
	//to run script only on mobile devices
	
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
	}
	*/
	
});
