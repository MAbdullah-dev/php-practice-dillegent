<?php
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

// dd($_SERVER);

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
// dd($url);

// if ($url == "/dilgent-tecnogies-internee/laracast/") {
//     require 'controller/index.php';
// } 
// else if ($url == "/dilgent-tecnogies-internee/laracast/about") {
//     require "./controller/about.php";
// }
// else if ($url == "/dilgent-tecnogies-internee/laracast/contact") {
//     require 'controller/contact.php';
// }

$routes=[
    '/dilgent-tecnogies-internee/laracast/'=>'controller/index.php',
    '/dilgent-tecnogies-internee/laracast/about'=>'./controller/about.php',
    '/dilgent-tecnogies-internee/laracast/contact'=>'controller/contact.php'
];
function abort($code=404){
    http_response_code($code);
    require "views/{$code}.php";
}
function RoutetoController($url,$routes){
    if (array_key_exists($url,$routes)) {
        require $routes[$url];
    }
    else{
      abort();
    }
}
RoutetoController($url,$routes)
?>

<?php
//  require "./partials/head.php";
  ?>
  <!-- <nav class="bg-gray-800"> -->
    <!-- Navigation code -->
  <!-- </nav> -->
