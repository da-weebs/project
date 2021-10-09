<?php

namespace App\Http\Livewire;
use App\Models\Student;
use Livewire\Component;




class Students extends Component
{
    public $byStudents = null;
    public $perPage = 10;
    public $orderBy = 'studname';
    public $sortBy = 'asc';
    public $search;

    public function render()
    {
        return view('livewire.students',[
            'students'=>Student::orderBy('studname','asc')->get(),
            'students'=>Student::when($this->byStudents, function($query){
                $query->where('id', $this->byStudents);
                })
                ->search(trim($this->search))
                ->orderBy($this->orderBy, $this->sortBy)
                ->paginate($this->perPage)
        ]);
    }
}
