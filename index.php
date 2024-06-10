
<?php
require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];


$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/blog' => 'controllers/blog.php'
];

if(array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
    echo '404 Not Found';

    die();
}

class Person {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHi() {
        echo "Hello my name is {$this->name} and I am {$this->age} years old.";
    }
}

$robin = new Person('Robin', '26');
$robin->sayHi();

$martin = new Person('Martin', '32');
$martin->sayHi();










