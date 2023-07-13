<?php
session_start([
   "name" => "silver.forums"
]);

spl_autoload_register(
    fn($className) => require $className . ".php"
);

new \database\Db(Config\Config::DbConfig);