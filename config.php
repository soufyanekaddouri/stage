<?php namespace Eyeonline\Soufyane\Stage;

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'database.php';

/**
 * Created by PhpStorm.
 * User: stackingcoder
 * Date: 9/21/16
 * Time: 10:50 AM
 */

define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASSWORD', "root");
define('DB_DATABASE', "stage");
define('DB_DRIVER', "mysql");

$database = new Database(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE, DB_DRIVER);
