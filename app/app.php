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

  //Post output route
  $app->post("/output", function() use ($app){
    $wordCounter = new RepeatCounter();
    $sentence = $_POST['sentence'];
    $word = $_POST['word'];
    $lowerCase = $wordCounter->toLower($sentence);
    $split = $wordCounter->splitString($lowerCase);
    $result = $wordCounter->wordCount($split,$word);

    return $app['twig']->render('output.html.twig', array('sentence'=>$sentence, 'word'=>$word,'result' => $result));
  });

  return $app;

?>
