<?php
namespace App\Imports;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class BulkImport implements ToModel,WithHeadingRow
{
	/**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      //  dd($row);
        return new User([
            'name' => $row['name'],
            'age' => $row['age'],
            'gender' => $row['gender'],
            'address' => $row['address'],
            'ward_no' => $row['ward_no'],
            'mobile' => $row['mobile_no'],
            'male_in_family' => $row['male_in_family'],
            'female_in_family' => $row['female_in_family'],
            'child_in_family' => $row['children_in_family'],
            'ayushman_card' => $row['ayushman_card'],
            'suffering_from_disease' => $row['suffering_from_any_disease'],
            'disease' => $row['disease_name']
        ]);
    }
}