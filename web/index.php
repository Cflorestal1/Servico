<?php 
	include 'loader.php';

	$nav = ['Home','Explore','Log In'];
	$styles = ['index','home','header','footer','modal'];
	$scripts = ['index','home'];
	

	
	$home = [
		'title' => 'Homepage'	
	];
		
	echo $twig->render('home.html', [
		'nav' => $nav,
		'styles' => $styles,
		'scripts' => $scripts,
		'home' => $home
	]);
