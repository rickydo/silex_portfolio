<?php

require_once __DIR__.'/../vendor/autoload.php';

use Silex\Application;

class PortfolioApplication extends Application 
{
	use Application\TwigTrait;
}

$app = new PortfolioApplication();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());


$app->get('/', function() use ($app) {
	return $app->render('index.php.twig');
});
$app->run();