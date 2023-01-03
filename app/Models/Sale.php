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

    public function insertRecord($data): array
    {
        return $this->insertGeneral($this->tableName, $data);
    }
}