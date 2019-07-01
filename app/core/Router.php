<?php
namespace App\core;

class Router
{
	protected $routes = [
        'GET'   => [],
        'POST'  => []
    ];


    /**
    * All the routes come from routes.php load here
    *
    * @param string 
    * @return instance of Router
    **/
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }


    /**
    * Get the URI from the user GET request and controller based on the request
    * and assign the controller to the routes array
    *
    * @param $uri string 
    * @param $controller string 
    * @return string controller end point 
    **/
    public function get($uri, $controller)
    {
        return $this->routes['GET'][$uri] = $controller;   
    }


    /**
    * Get the URI from the user POST request and controller based on the request
    * and assign the controller to the routes array
    *
    * @param $uri string 
    * @param $controller string 
    * @return string controller end point 
    **/
    public function post($uri, $controller)
    {
        return $this->routes['POST'][$uri] = $controller;   
    }


    /**
    * Get the URI from the user request and specify that GET or POST request.
    * Check if the user requested URI is in the routes array
    * return controller name and the method name to the callAction() as arguments
    *
    * @param $uri string 
    * @param $requestType string 
    * @return string   
    **/
    public function direct($uri, $requestType)
    {
    	if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                //use splat operator to send function arguments not array
                ...explode('@', $this->routes[$requestType][$uri])
            );    		
    	}

    	throw new Exception("No route defined for this URI");
    }


    /**
    * Receive controller and a method as an action
    *
    * @param $controller class 
    * @param $action method 
    * @return controller's specific method   
    **/
    protected function callAction($controller, $action)
    {
        $controller = "App\\controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception("{$controller} does not respond to the {$action} actoin");
        }

        return $controller->$action();
    }

}