<?php
class Router {
    private $routes = [];

    public function get($url, $action) {
        $this->routes['GET'][$url] = $action;
    }

    public function post($url, $action) {
        $this->routes['POST'][$url] = $action;
    }

   
    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $url = $_GET['url'] ?? 'home/index';   // default → home/index
        $url = rtrim($url, '/');

      
        if (isset($this->routes[$method][$url])) {
            list($controller, $methodName) = explode('@', $this->routes[$method][$url]);
            $controllerFile = "../app/controllers/{$controller}.php";

            if (file_exists($controllerFile)) {
                require_once $controllerFile;
                $obj = new $controller();
                $obj->$methodName();
                return;
            }
        }

        $parts = explode('/', $url);
        $controllerName = ucfirst($parts[0]) . 'Controller';
        $methodName = $parts[1] ?? 'index';
        $parameter = $parts[2] ?? null;

        $controllerFile = "../app/controllers/{$controllerName}.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();

            if (method_exists($controller, $methodName)) {
                if ($parameter !== null) {
                    $controller->$methodName($parameter);
                } else {
                    $controller->$methodName();
                }
            } else {
                echo "❌ Method not found: <b>$methodName</b>";
            }
        } else {
            echo "❌ Controller not found: <b>$controllerName</b>";
        }
    }
}
