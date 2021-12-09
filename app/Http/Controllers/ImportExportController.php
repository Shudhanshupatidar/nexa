<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\BulkExport;
use App\Imports\BulkImport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Datatables;

class ImportExportController extends Controller
{
    /**
     * 
     */
    public function importExportView(Request $request)
    {
 
            $data = User::take(120)->get(); 
            return view('welcome',compact('data'));
       
    }

    public function import()
    {
        Excel::import(new BulkImport, request()->file('file'));

        return back();
    }

    public function export()
    {
        return Excel::download(new BulkExport, 'invoices.xlsx');
        // return (new BulkExport)->download('invoices.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
}
