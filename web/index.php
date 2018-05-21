<?php 
	include 'loader.php';

	$nav = ['Home','Explore','Log In'];
	$styles = ['index','home','header','footer','modal'];
	$scripts = ['index','home','modal','functions'];
	
	
	$base = [ 'title' => 'Base'];
	
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
