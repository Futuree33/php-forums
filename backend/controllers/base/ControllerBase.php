<?php

namespace Controllers\Base;

use Config\Config;
use JetBrains\PhpStorm\NoReturn;

abstract class ControllerBase
{

    #[NoReturn]
    protected function Exit(string $path = "./") : void
    {
        header("location: " . $path);
        exit();
    }
}