<?php

namespace App\Imports;

use App\Inventory;
use Maatwebsite\Excel\Concerns\ToModel;

class InventoryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Inventory([
          'stock_num' => $row[0],
          'vin' => $row[1],
          'year' => $row[2],
          'make' => $row[3],
          'model' => $row[4],
          'trim' => $row[5],
          'kms' => $row[6],
          'title' => $row[7],
          'color' => $row[8],
          'trans' => $row[9],
          'dis' => $row[10],
          'dok' => $row[11],
          'page' => $row[12],
          'ad_num' => $row[13],
          'price' => $row[14],
        ]);
    }
}
