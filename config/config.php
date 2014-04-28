<?php
return [
    'routes' => [
        "/posts" => [
            'module'     => '\Cept\Blog',
            'namespace'  => '\Cept\Blog\Controller',
            'controller' => 'Post',
            'action'     => 'index',
        ]
    ]
];