<?php

use Cake\Routing\Route\DashedRoute;

$routes->plugin(
    'contact-manager',
    ['path' => '/contact-manager'],
    function ($routes) {
        
        $routes->setRouteClass(DashedRoute::class);

        $routes->get('/contacts', ['controller' => 'Contacts']);
        $routes->get('/contacts/{id}', ['controller' => 'Contacts', 'action' => 'view']);
        $routes->put('/contacts/{id}', ['controller' => 'Contacts', 'action' => 'update']);
    }
);