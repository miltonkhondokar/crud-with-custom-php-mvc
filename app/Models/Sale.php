<?php

namespace App\Models;

use App\Base\Model;

class Sale extends Model
{

    protected string $tableName = 'tbl_sales_tracker';

    public function getRecords(): array
    {
        return $this->fetchAllRows("SELECT * FROM {$this->tableName}");
    }

    public function insertRecord($data): bool|string
    {
        return $this->insertGeneral($this->tableName, $data);
    }

    public function report_filter($data): array
    {
        $from_date = $_POST['from_date'];
        $to_date = $_POST['to_date'];
        $entry_by = $_POST['entry_by'];
        $sql = "";
        if( (!empty($from_date) && !empty($to_date)) && (empty($entry_by))){
            $_SESSION['from_date'] = $_POST['from_date'];
            $_SESSION['to_date'] = $_POST['to_date'];
            $_SESSION['entry_by'] = '';
            $sql = "SELECT * FROM {$this->tableName} WHERE entry_at BETWEEN '{$from_date}' AND '{$to_date}'";
        }
        else if( (empty($from_date) && empty($to_date)) && (!empty($entry_by))){
            $_SESSION['from_date'] = '';
            $_SESSION['to_date'] = '';
            $_SESSION['entry_by'] = $_POST['entry_by'];
            $sql = "SELECT * FROM {$this->tableName} WHERE entry_by = $entry_by";
        }
        else if( (!empty($from_date) && !empty($to_date)) && (!empty($entry_by))){
            $_SESSION['from_date'] = $_POST['from_date'];
            $_SESSION['to_date'] = $_POST['to_date'];
            $_SESSION['entry_by'] =  $_POST['entry_by'];
            $sql = "SELECT * FROM {$this->tableName} WHERE entry_at BETWEEN '{$from_date}' AND '{$to_date}' AND entry_by = $entry_by";
        }
        $query = $this->execute($sql)->fetchAll(\PDO::FETCH_ASSOC);
        return $query;
    }
}