<?php

/**
 * Route to get the details of a superhero
 * @secure
 */
Tina4\Get::add("/superhero/{id}", function($id, Tina4\Response $response, \Tina4\Request $request){

    // Go to get something from the database
    $superHero = (new SuperHeroHelper())->getSuperHero($id);

    $result = "I am " . $superHero["firstName"] . " ". $superHero["lastName"];

    return $response(\Tina4\renderTemplate("superhero.twig",["superhero" => $superHero]), HTTP_OK, TEXT_HTML);
});