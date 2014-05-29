<?php
namespace Cept\Blog\Controller;

class ErrorController extends \Phalcon\Mvc\Controller
{
    /**
     * 404 Page
     */
    public function notFoundAction()
    {        
        $this->response->setStatusCode(404, 'Page not found');
    }
}
