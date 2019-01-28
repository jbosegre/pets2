<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 1/23/2019
 * Time: 3:40 PM
 */

//Require the autoload file

ini_set ("display_errors", 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function (){
   echo '<h1>My Pets</h1>';
   echo "<a href='order'>Order a Pet</a>";
});

$f3->route('GET /@pet', function ($f3, $params)
{
    print_r($params);
    $pet = $params['pet'];

    switch($pet) {

        case 'dog':
            echo "<p>Woof!</p>";
            break;

        case 'chicken':
            echo "<p>Cluck!</p>";
            break;

        case 'cat':
            echo "<p>Meow!</p>";
            break;

        case 'tiger':
            echo "<p>Rawr!</p>";
            break;

        case 'cow':
            echo "<p>Moo!</p>";
            break;

        default:
            $f3->error(404);
    }
});

//Run fat Free
$f3->run();

