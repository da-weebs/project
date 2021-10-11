<?php

namespace App\Http\Livewire;

use App\Models\Courses;
use App\Models\Student;
use Livewire\Component;




class Students extends Component
{
    public $byCourse = null;
    public $perPage = 10;
    public $orderBy = 'studname';
    public $sortBy = 'asc';
    public $search;

    public function render()
    {
        return view('livewire.students',[
            'courses'=>Courses::orderBy('course_name','asc')->get(),
            // 'students'=>Student::orderBy('studname','asc')->paginate()
            'students'=>Student::when($this->byCourse, function($query){
                $query->where('courses_id', $this->byCourse);
                })
                ->search(trim($this->search))
                ->orderBy($this->orderBy, $this->sortBy)
                ->paginate($this->perPage)
        ]);
    }


}
