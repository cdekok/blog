<?php
return [
    'routes' => [
        "/posts" => [
            'module'     => '\\Cept\\Blog',
            'controller' => '\\Cept\Blog\Controller\\PostController',
            'action'     => 'index',
        ]
    ]
];