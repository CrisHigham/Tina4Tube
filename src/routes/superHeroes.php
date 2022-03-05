<?php

/**
 * Route to get the details of a superhero
 */
Tina4\Get::add("/superhero/{id}", function($id, Tina4\Response $response, \Tina4\Request $request){

    // Go to get something from the database
    $superHero = (new SuperHeroHelper())->getSuperHero($id);

    $result = "I am " . $superHero["firstName"] . " ". $superHero["lastName"];

    return $response($result, HTTP_OK, TEXT_HTML);
});