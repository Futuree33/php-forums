<?php

namespace Config;

final class Config
{

    public const GlobalRules = [
        "require_login" => true
    ];

    public const Categories = [
        "Exploiting",
    ];

    public const Forums = [
        "Exploiting" => [
            [
                "title" => "Roblox",
                "description" => "great description for this forum",
            ],
        ],
    ];

    public const DbConfig = [
        "localhost",
        "root",
        "",
        "silver.forum"
    ];

    public static function EnforceRules() : void
    {
        $rules = self::GlobalRules;

        if ($rules["require_login"] === true)
        {}


    }
}