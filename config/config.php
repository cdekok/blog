<?php
return [
    'routes' => [
        'blog-post' => [            
            'route' => '/posts',
            'params' => [
                'module'     => 'cept-user',
                'namespace'  => '\Cept\Blog\Controller',
                'controller' => 'Post',
                'action'     => 'index',
            ]
        ]
    ],        
];