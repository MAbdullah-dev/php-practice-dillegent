<?php

namespace router;

class Routers    
{
    protected $routes = [];


    public function add($method,$url, $controller)
    {
        $this->routes[] = [
            'url' => $url,
            'controller' => $controller,
            'method' => $method
        ];
    }
    public function get($url, $controller)
    {
        $this->add('GET',$url,$controller);
    }

    public function post($url, $controller)
    {
        $this->add('POST',$url,$controller);
    }

    public function put($url, $controller)
    {
        $this->add('PUT',$url,$controller);
    }

    public function DELETE($url, $controller)
    {
        $this->add('DELETE',$url,$controller);
    }

    public function patch($url, $controller)
    {
        $this->add('PATCH',$url,$controller);
    }

    public function route($url, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['url'] === $url && $route['method'] === strtoupper($method)) {
                if (file_exists($route['controller'])) {
                    return require $route['controller'];
                } else {
                    http_response_code(404);
                    echo "Controller file not found: " . $route['controller'];
                    return;
                }
            }
        }

        // If no route matched, send a 404 response
        http_response_code(404);
        echo '404 Not Found';
    }
}
