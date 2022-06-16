<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use App\Imports\ProductCreateInterface;
use App\Jobs\UploadFileJob;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements
    ToCollection,
    WithHeadingRow,
    ProductCreateInterface
{
    use Importable;
    /*
     rules for validate from CSV file
    @var rules
    */
    protected $rules = [
        'code' => ['nullable', 'string', 'max:255'],
        'denomination' => ['nullable', 'string', 'max:255'],
        'level_1' => ['nullable', 'string', 'max:255'],
        'level_2' => ['nullable', 'string', 'max:255'],
        'level_3' => ['nullable', 'string', 'max:255'],
        'price' => ['nullable', 'numeric', 'max:255'],
        'price_sp' => ['nullable', 'numeric', 'numeric'],
        'total' => ['nullable', 'string', 'numeric'],
        'property_fields' => ['nullable', 'string'],
        'joint_purchases' => ['nullable', 'string'],
        'unit' => ['nullable', 'string', 'max:122'],
        'image' => ['nullable', 'string'],
        'show_main' => ['nullable', 'string'],
        'description' => ['nullable', 'string'],
    ];

    public function collection(Collection $rows): void
    {
        // get data only if validated
        $this->toValidate($rows, $this->rules);
        foreach ($rows as $row) {
            // loop every field from CSV file and pass to toCreateProduct method for create new product
            $this->toCreateProduct($row);
        }
    }

    public function toCreateProduct(Collection $row = null): void
    {
        Product::create([
            'code' => $row['kod'] ?? null,
            'denomination' => $row['naimenovanie'] ?? null,
            'level_1' => $row['uroven1'] ?? null,
            'level_2' => $row['uroven2'] ?? null,
            'level_3' => $row['uroven3'] ?? null,
            'price' => $row['cena'] ?? null,
            'price_sp' => $row['cenasp'] ?? null,
            'total' => $row['kolicestvo'] ?? null,
            'property_fields' => $row['polya_svoistv'] ?? null,
            'joint_purchases' => $row['sovmestnye_pokupki'] ?? null,
            'unit' => $row['edinica_izmereniya'] ?? null,
            'image' => $row['kartinka'] ?? null,
            'show_main' => $row['vyvodit_na_glavnoi'] ?? null,
            'description' => $row['opisanie'] ?? null,
        ]);
    }

    public function toValidate(Collection $data, $rules): void
    {
        Validator::make($data->toArray(), $rules)->validate();
    }
}
