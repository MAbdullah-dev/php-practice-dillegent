<?php

namespace router;

use Auth;
use Guest;
use Middleware;

require_once './middleware/Auth.php';
require_once './middleware/Guest.php';
require_once './middleware/Middleware.php';

class Routers
{
    protected $routes = [];

    /**
     * Add a route to the router.
     *
     * @param string $method HTTP method (GET, POST, etc.)
     * @param string $url URL pattern for the route
     * @param string $controller Path to the controller file
     * @return $this
     */
    public function add($method, $url, $controller)
    {
        $this->routes[] = [
            'url' => $url,
            'controller' => $controller,
            'method' => strtoupper($method),
            'middleware' => null
        ];

        return $this;
    }

    /**
     * Define a GET route.
     *
     * @param string $url URL pattern for the route
     * @param string $controller Path to the controller file
     * @return $this
     */
    public function get($url, $controller)
    {
        return $this->add('GET', $url, $controller);
    }

    /**
     * Define a POST route.
     *
     * @param string $url URL pattern for the route
     * @param string $controller Path to the controller file
     * @return $this
     */
    public function post($url, $controller)
    {
        return $this->add('POST', $url, $controller);
    }

    /**
     * Define a PUT route.
     *
     * @param string $url URL pattern for the route
     * @param string $controller Path to the controller file
     * @return $this
     */
    public function put($url, $controller)
    {
        return $this->add('PUT', $url, $controller);
    }

    /**
     * Define a DELETE route.
     *
     * @param string $url URL pattern for the route
     * @param string $controller Path to the controller file
     * @return $this
     */
    public function delete($url, $controller)
    {
        return $this->add('DELETE', $url, $controller);
    }

    /**
     * Define a PATCH route.
     *
     * @param string $url URL pattern for the route
     * @param string $controller Path to the controller file
     * @return $this
     */
    public function patch($url, $controller)
    {
        return $this->add('PATCH', $url, $controller);
    }

    /**
     * Apply middleware to the most recently added route.
     *
     * @param string $key Middleware key
     * @return $this
     */
    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this;
    }

    /**
     * Resolve the route based on the URL and HTTP method.
     *
     * @param string $url Requested URL
     * @param string $method HTTP method
     */
    public function route($url, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['url'] === $url && $route['method'] === strtoupper($method)) {
                Middleware::resolve($route['middleware']);

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
