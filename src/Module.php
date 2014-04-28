<?php
namespace Cept\Blog;

class Module implements \Phalcon\Mvc\ModuleDefinitionInterface
{
    public function registerAutoloaders() {
        ;
    }
    
    public function registerServices($di) {
        //Registering the view component
        $di->set('view', function() {
            $view = new \Phalcon\Mvc\View();
            $view->setViewsDir(realpath(__DIR__.'/..//view/'));
            return $view;
        });
    }
}
