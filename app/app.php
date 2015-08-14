<?php
    require_once __DIR__."/../vendor/autoload.php";

    require_once __DIR__."/../src/RepeatCounter.php";


    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/results", function() use ($app) {
        $repeat_counter = new RepeatCounter;
        $search_word = $_GET['search_word'];
        $string_to_search = $_GET['string_to_search'];
        $results = $repeat_counter->countRepeats($search_word, $string_to_search);

        return $app['twig']->render('results.html.twig', array('search_word' => $search_word, 'string_to_search' => $string_to_search, 'results' => $results));
    });





    return $app;


 ?>
