<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";

    protected $fillable =['studname','course','matric','email','phone','lecturername','cohort','sessionpsm'];

    public function scopeSearch($query, $term){
        $term = "%$term%";
        $query->where('studname','like',$term);
    }
}