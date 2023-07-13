<?php

namespace database;

final class Db
{

    private static \mysqli $mysqli;

    public function __construct(private readonly array $DbConfig)
    {
        $this->Connect();
    }

    private function Connect() : void
    {
        mysqli_report(MYSQLI_REPORT_OFF);
        $mysqli = @new \mysqli(...$this->DbConfig);

        if ($mysqli->connect_error)
            die("Internal Server Error");

        self::$mysqli = $mysqli;
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