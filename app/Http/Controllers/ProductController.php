<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Excel;
use App\Imports\ProductsImport;
use App\Http\Requests\UploadCSVFileRequest;

class ProductController extends Controller
{
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
        return redirect()
            ->back()
            ->with('status', $message);
    }
}
