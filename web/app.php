<?php

require_once __DIR__.'/../vendor/autoload.php';

use Silex\Application;

class PortfolioApplication extends Application {
	use Application\TwigTrait;
}


$app->register(new Silex\Provider\TwigServiceProvider(), array(
	'twig.path' => __DIR__.'/views',
));

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$app = new Application();
$app['debug'] = true;

$app->get('/', function(){
	return $app->rener('index.php.twig');
});
$app->run();