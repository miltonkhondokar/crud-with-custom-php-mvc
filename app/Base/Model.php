<?php

namespace App\Base;

use PDO;
use PDOException;

class Model
{
    public function __construct()
    {
        $this->dbConnection();
    }

    public function dbConnection():PDO|\Exception|PDOException
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            return new PDO("mysql:host=$servername;dbname=mi_shop", $username, $password);
        } catch(PDOException $e) {
            return $e;
        }
    }

    public function execute(string $sqlQuery): \PDOStatement|false
    {
        $stmt = $this->dbConnection()->query($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    public function fetchAllRows(string $sqlQuery): array
    {
        return $this->execute($sqlQuery)->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insertGeneral($tableName, $data): array
    {
        $fields =  implode(", ", array_keys($data));
        $values =  "'".implode("','", array_values($data))."'";
        $sqlQuery = "INSERT INTO {$tableName} ({$fields}) VALUES ({$values}) ";
        return $this->execute($sqlQuery)->fetchAll(\PDO::FETCH_ASSOC);
    }
}