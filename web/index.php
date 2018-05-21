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
	
	
	$base = [ 'title' => 'Base'];
	
	$cusClass = ['img6' => 'img-responsive col-lg-'];

	$home = [
		'title' => 'Servico',
		'logo' => '/Servico/web/img/logo.png',
		'browse-pic' => '/Servico/web/img/browse/',	
	];
		
	echo $twig->render('home.html', [
		'nav' => $nav,
		'styles' => $styles,
		'scripts' => $scripts,
		'base' => $base,
		'home' => $home
	]);
