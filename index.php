<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 1/7/2019
 * Time: 11:26 AM
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

//Run fat Free
$f3->run();

