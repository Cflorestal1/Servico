<?php 
	include 'loader.php';

	$nav = ['Home','Explore','Log In'];
	$styles =[ 
		'path' => [
			'base'	=> '/Servico/web/css/',
			'home' => '/Servico/web/css/home/',
			'user'  => '/Servico/web/css/user/'
		], 
	
		'files' => [
			'base' => ['index.css','footer.css'],
			'home' => ['header-home.css','home.css','modal.css'],
			'user' => ['header-user.css','user.css']
		]
	];

	$scripts = [
		'path' => [
			'base' => '/Servico/web/js/',
			'home' => '/Servico/web/js/home/',
			'user' => '/Servico/web/js/user/'
		],
		
		'files' => [
			'base' => ['functions.js','index.js'],
			'home' => ['home.js','modal.js'],
			'user' => ['user.js']
		]
	];
	
	
	$login = [

		[
			'gclass' => 'form-group col-lg-12 col-md-12 col-sm-12',
			'label' => 'Username:',
			'for' => 'username',
			'type' => 'text',
			'name' => 'username',
			'class' => 'form-control',
			'required' => 'true'
		],
		[
			'gclass' => 'form-group col-lg-12 col-md-12 col-sm-12',
			'label' => 'Password:',
			'for' => 'password',
			'type' => 'text',
			'name' => 'password',
			'class' => 'form-control',
			'required' => 'true'
		]
	];

	$register = [
		[
			'gclass' => 'form-group col-lg-6 col-md-6 col-sm-12',
			'label'	=> 'First name:',
			'for' => 'first-name',
			'type' => 'text',
			'name' => 'first-name',
			'class' => 'form-control',
			'required' => 'true'
		],
		[
			'gclass' => 'form-group col-lg-6 col-md-6 col-sm-12',
			'label'	=> 'Last name:',
			'for' => 'last-name',
			'type' => 'text',
			'name' => 'last-name',
			'class' => 'form-control',
			'required' => 'true'

		],
		[
			'gclass' => 'form-group col-lg-6 col-md-6 col-sm-12',
			'label'	=> 'Email address:',
			'for' => 'email',
			'type' => 'email',
			'name' => 'email',
			'class' => 'form-control',
			'required' => 'true'

		],
		[
			'gclass' => 'form-group col-lg-6 col-md-6 col-sm-12',
			'label'	=> 'Username:',
			'for' => 'username',
			'type' => 'text',
			'name' => 'username',
			'class' => 'form-control',
			'required' => 'true'

		],
		[
			'gclass' => 'form-group col-lg-6 col-md-6 col-sm-12 offset-lg-12',
			'label'	=> 'Password:',
			'for' => 'password',
			'type' => 'text',
			'name' => 'password',
			'class' => 'form-control',
			'required' => 'true'

		],
		[
			'gclass' => 'form-group col-lg-6 col-md-6 col-sm-12',
			'label'	=> 'Retype password:',
			'for' => 'rpassword',
			'type' => 'text',
			'name' => 'rpassword',
			'class' => 'form-control',
			'required' => 'true'

		]	
	];
	
	$base = [ 'title' => 'Base'];
	
	$cusClass = ['img6' => 'img-responsive col-lg-'];

	$home = [
		'title' => 'Servico',
		'logo' => '/Servico/web/img/logo.png',
		'google-pic' => '/Servico/web/img/google-logo.png',
		'browse-pic' => '/Servico/web/img/browse/',
		'login' => $login,
		'register' => $register	
	];
		
	echo $twig->render('home.html', [
		'nav' => $nav,
		'styles' => $styles,
		'scripts' => $scripts,
		'base' => $base,
		'home' => $home
	]);
