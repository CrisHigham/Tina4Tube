<?php

Tina4\Get::add("/", function(){
    echo "I am home";

});


/**
 * Route to Greet a user
 */
Tina4\Get::add("/user/{name}", function($name, Tina4\Response $response, Tina4\Request $request){
    $result = "Enter " . $name;
    // Build your business logic

    // Send to Model

    // Do other funky stuff

    // Prepare your data

    // Send it off to a template
    return $response($result, HTTP_OK,TEXT_HTML);
});


