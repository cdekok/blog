<?php
namespace \Cept\Blog;

class Module implements \Phalcon\Mvc\ModuleDefinitionInterface
{
    public function registerAutoloaders() {
        ;
    }
    
    public function registerServices($di) {
        //Registering a dispatcher
        $di->set('dispatcher', function() {
            $dispatcher = new Dispatcher();
            $dispatcher->setDefaultNamespace(__NAMESPACE__."\Controllers");
            return $dispatcher;
        });

        //Registering the view component
        $di->set('view', function() {
            $view = new View();
            $view->setViewsDir(realpath(__DIR__.'/..//view/'));
            return $view;
        });
    }
}
