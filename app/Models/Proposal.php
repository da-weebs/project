<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $table = "proposal_form";

    protected $fillable =['name','year','ic','matrix','email','mobileno','svname','project_title','problem_solution','objectives', 'scopes', 'software','hardware','method', 'network', 'security', 'project_type', 'project_area', 'project_idea', 'date'];
}
