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
				$('#login-panel').css('display','none')
				$('#register-panel').css('display','block');
				break;
			case 'login':
				$('#login-panel').css('display','block')
				$('#register-panel').css('display','none');
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
