<?php

namespace Config;

final class Config
{

    public const GlobalRules = [
        "require_login" => true
    ];

    public const Categories = [
        "Exploiting",
        "Programming"
    ];

    public const Forums = [
        "Exploiting" => [
            [
                "id" => 1,
                "title" => "Roblox",
                "description" => "great description for this forum",
            ],
            [
                "id" => 2,
                "title" => "Roblox 2",
                "description" => "great description for this forum",
            ],
        ],
        "Programming" => [
            [
                "id" => 3,
                "title" => "PHP",
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