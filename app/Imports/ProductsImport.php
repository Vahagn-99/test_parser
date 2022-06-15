<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    protected $data = [];
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        foreach ($row as $key => $item) {
            $this->data += [
                'code' => $row['kod'],
                'denomination' => $row['naimenovanie'],
                'level_1' => $row['uroven1'],
                'level_2' => $row['uroven2'],
                'level_3' => $row['uroven3'],
                'price' => $row['cena'],
                'price_sp' => $row['cenasp'],
                'total' => $row['kolicestvo'],
                'property_fields' => $row['polya_svoistv'],
                'joint_purchases' => $row['sovmestnye_pokupki'],
                'unit' => $row['edinica_izmereniya'],
                'image' => $row['kartinka'],
                'show_main' => $row['vyvodit_na_glavnoi'],
                'description' => $row['opisanie'],
            ];
        }
        dd($data);
        $product = Product::create($data);
        return $product;
    }
}
