<?php
//use Symfony\Component\ClassLoader\ApcClassLoader;
use Symfony\Component\HttpFoundation\Request;

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';

// Use APC for autoloading to improve performance
// Change 'sf2' by the prefix you want in order to prevent key conflict with another application
/*
$loader = new ApcClassLoader('sf2', $loader);
$loader->register(true);
*/

require_once __DIR__.'/../app/AppKernel.php';
//require_once __DIR__.'/../app/AppCache.php';

$kernel = new AppKernel('prod', true);

//$kernel->loadClassCache();
//$kernel = new AppCache($kernel);
$request = Request::createFromGlobals();

//$date = new DateTime("2012-07-05 16:43:21", new DateTimeZone('Europe/Paris')); 
//echo "<br>";
//echo date("Y-m-d h:iA", $date->format('U')); 


/**
 * ti liga binolino!!!
 */

date_default_timezone_set('America/Los_Angeles');


//echo "<br>";
//echo date("Y-m-d h:iA", $date->format('U')); 
//var_dump($request);
//die("foi!");

$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
//echo "<br>";
//echo date("Y-m-d h:iA", $date->format('U'));