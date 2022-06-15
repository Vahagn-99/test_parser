<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadCSVFileRequest;
use App\Imports\ProductsImport;

class ProductController extends Controller
{
    public function uploadCSV(UploadCSVFileRequest $request)
    {
        $message = 'false';
        if ($request->isMethodPost()) {
            $file = $request->file;
            \Excel::import(ProductsImport::class, $file);
            $message = 'The CSV file is uploaded!';
        }
        return redirect()
            ->back()
            ->with('status', $message);
    }
}
