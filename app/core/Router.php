<?php
class Router {
    private $routes = [];

    public function add($method, $path, $controller, $action) {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function get($path, $controller, $action) {
        $this->add('GET', $path, $controller, $action);
    }

    public function post($path, $controller, $action) {
        $this->add('POST', $path, $controller, $action);
    }

    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $this->matchPath($route['path'], $path)) {
                $controller = new $route['controller']();
                $action = $route['action'];
                $controller->$action();
                return;
            }
        }

        // 404 Not Found
        header("HTTP/1.0 404 Not Found");
        echo '404 Not Found';
    }

    private function matchPath($routePath, $requestPath) {
        // Convert route parameters to regex pattern
        $pattern = preg_replace('/\{([^}]+)\}/', '([^/]+)', $routePath);
        $pattern = '@^' . $pattern . '$@D';
        
        return preg_match($pattern, $requestPath);
    }
}