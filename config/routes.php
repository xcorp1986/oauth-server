<?php
\Cake\Routing\Router::plugin('OAuth', ['path' => '/oauth'], function(\Cake\Routing\RouteBuilder $routes) {
    $routes->connect(
        '/',
        [
            'controller' => 'OAuth',
            'action' => 'oauth'
        ]
    );
    $routes->connect(
        '/authorize',
        [
            'controller' => 'OAuth',
            'action' => 'authorize'
        ]
    );
    $routes->connect(
        '/access_token',
        [
            'controller' => 'OAuth',
            'action' => 'accessToken'
        ]
    );
});