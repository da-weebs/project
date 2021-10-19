<?php

namespace App\Imports;

use App\Models\Proposal;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProposalImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Proposal([
            'name' => $row['name'],
            'year' => $row['year'],
            'ic' => $row['ic'],
            'matrix' => $row['matrix'],
            'email' => $row['email'],
            'mobileno' => $row['mobileno'],
            'svname' => $row['svname'],
            'project_title' => $row['project_title'],
            'problem_solution' => $row['problem_solution'],
            'objectives' => $row['objectives'],
            'scopes' => $row['scopes'],
            'software' => $row['software'],
            'hardware' => $row['hardware'],
            'method' => $row['method'],
            'network' => $row['network'],
            'security' => $row['security'],
            'project_type' => $row['project_type'],
            'project_area' => $row['project_area'],
            'project_idea' => $row['project_idea'],
            'date' => $row['date'],
        ]);
    }
}
