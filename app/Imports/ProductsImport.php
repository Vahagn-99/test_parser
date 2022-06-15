<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        dd($row);
        return new Product([
            'code' => $row[''],
            'denomination' => $row[''],
            'level_1' => $row[''],
            'level_2' => $row[''],
            'level_3' => $row[''],
            'price' => $row[''],
            'price_sp' => $row[''],
            'total' => $row[''],
            'property_fields' => $row[''],
            'joint_purchases' => $row[''],
            'unit' => $row[''],
            'image' => $row[''],
            'show_main' => $row[''],
            'description' => $row[''],
        ]);
    }
}
