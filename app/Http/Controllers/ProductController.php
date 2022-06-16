<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Excel;
use App\Imports\ProductsImport;
use App\Http\Requests\UploadCSVFileRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('index', ['products' => Product::latest()->paginate(13)]);
    }

    public function uploadCSV(UploadCSVFileRequest $request)
    {
        $message = 'false';
        if ($request->isMethodPost()) {
            // get the CSV file from validated request;
            $file = $request->file('csv_import');
            // call csv import method // App\Imports\ProductsImport
            (new ProductsImport())->import($file, null, Excel::CSV);
            $message = 'The CSV file is uploaded!';
        }

        // dd($message);
        return redirect()
            ->route('scv_all')
            ->with('status', $message);
    }

    public function show(Product $product)
    {
        if (!is_null($product)) {
            return view('show', [
                'product' => $product,
            ]);
        }
        abort(404, 'not found');
    }
}
