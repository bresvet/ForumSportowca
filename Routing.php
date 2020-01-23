<?php

require_once 'Controllers/SectionPageController.php';
require_once 'Controllers/LoggingController.php';

class Routing
{
    private $routes = [];

    public function __construct()
    {
        $this->routes =
            [
            'SectionPage' => [
                'controller' => 'SectionPageController',
                'action' => 'displaySections'
            ],
                'index' => [
                    'controller' => 'LoggingController',
                    'action' => 'login'
                ]
            ];
    }

public function runAll()
{
$page = isset($_GET['page']) ? $_GET['page'] : 'index';

if (isset($this->routes[$page]))
{
$controller = $this->routes[$page]['controller'];
$action = $this->routes[$page]['action'];
$object = new $controller;
$object->$action();
}
}
}