<?php

namespace App\Http\Controllers;
use App\Imports\YourImportClass;
use Illuminate\Http\Request;
use App\Imports\ExcelImport;
use Excel;
class ExcelImportController extends Controller
{
    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        // Get the uploaded file
        $file = $request->file('file');
        // Process the Excel file
        Excel::import(new YourImportClass, $file);

        return redirect()->back()->with('success', 'Excel file imported successfully!');
    }

    public function index (){
        $titulo='importação de arquivo excel';
        return view('excel-import',compact('titulo'));
    }
}