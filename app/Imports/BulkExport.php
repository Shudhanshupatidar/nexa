<?php
namespace App\Imports;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BulkExport implements FromCollection,WithHeadings
{
	/**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function collection()
    {
        return collect(User::all());
    }

    public function headings():array{
        return[
            'Name',
            'Age',
            'Gender',
            'Address',
            'Ward No',
            'Mobile',
            'Male in Family',
            'Female in Family',
            'Child in Family',
            'Ayushman Card',
            'Suffering From Disease',
            'Disease'
        ];
    }   
}