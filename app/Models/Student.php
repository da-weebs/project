<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";

    protected $fillable =['studname','courses_id','course','matric','email','phone','lecturername','cohort','sessionpsm'];

    public function courses()
    {
        //return $this->hasOne('App\Models\Student');
        return $this->hasOne(Courses::class, 'courses_id', 'id');
    }

    public function scopeSearch($query, $term){
        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('studname','like',$term)
                  ->orWhere('courses_id','like',$term);
        });
    }
}