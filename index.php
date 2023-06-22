<?php
    require "./vendor/autoload.php";
    // new \App\cliente();
    // new \App\compra();
    $router = new \Bramus\Router\Router();

    $router->get('/metodo', function() {
        echo "esto es un get";
    });
    
    $router->post('/metodo', function() {
        new \App\cliente();
        });

    // $router->put('/metodo', function() {
    //     echo "esto es un put";
    // });

    // $router->delete('/metodo', function(){
    //     echo "esot es un delete";
    // });

    // $router->patch('/metodo', function(){
    //     echo "esot es un patch";
    // });

    $router->run();
