<?php
namespace Config;
final class Config
{
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
}