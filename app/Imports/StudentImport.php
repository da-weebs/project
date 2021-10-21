<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'courses_id' => $row['courses_id'],
            'studname' => $row['studname'],
            'course' => $row['course'],
            'matric' => $row['matric'],
            'email' => $row['email'],
            'phone' => $row['phone'],
            'lecturername' => $row['lecturername'],
            'cohort' => $row['cohort'],
            'sessionpsm' => $row['psm'],
        ]);
    }
}
