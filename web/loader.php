 <?php 
	require_once '../vendor/autoload.php';

	$loader1 = new Twig_Loader_Filesystem('../templates');
	$loader2 = new Twig_Loader_Filesystem('../templates/home');
	$loader3 = new Twig_Loader_Filesystem('../templates/profile');

	$loader = new Twig_Loader_Chain(array($loader1,$loader2,$loader3));

	$twig = new Twig_Environment($loader);



