<?php

namespace database;

use JetBrains\PhpStorm\NoReturn;

final class Db
{
    private static \mysqli $mysqli;

    public function __construct(array $dbInfo)
    {
        try
        {
            self::$mysqli = @new \mysqli(...$dbInfo);
        }
        catch (\mysqli_sql_exception $exception)
        {
            error_log($exception->getMessage());
            die("Internal Server Error");
        }
    }

    public static function Query(string $query, array $params = []) : \mysqli_result | false
    {
        $stmt = self::$mysqli->prepare($query);

        return ($stmt->execute($params))
            ?  $stmt->get_result()
            : false;
    }

    public function __destruct()
    {
        self::$mysqli->close();
    }
}