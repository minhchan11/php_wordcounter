<?php
  //set up modules
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/RepeatCounter.php";

  //Initialize app and template
  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
));

//Get input route
$app->get("/", function() use ($app){
  return $app['twig']->render('input.html.twig'));
});


});

  return $app;

?>
