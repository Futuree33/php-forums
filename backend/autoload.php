<?php
session_start([
   "name" => "silver.forums"
]);

spl_autoload_register(
    fn($className) => require $className . ".php"
);

require "config.php";

new \database\Db(dbConfig);