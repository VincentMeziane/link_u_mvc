<?php
include 'View/View.php';
include 'Model/Model.php';
include 'Controller/Controller.php';
class Dispatcher {
   
    public function dispatch(){
        $controller = $_GET['page'] ?? 'tickets';
        $controller = ucfirst($controller)."Controller";
        $action = $_GET['action'] ?? 'list';
        $action = $action."Action";

        require_once 'Controller/'.$controller.'.php';

        $my_controller = new $controller();
        $my_controller->$action();
        }
    }
