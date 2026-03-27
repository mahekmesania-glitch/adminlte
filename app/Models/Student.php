<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable = ['name', 'age', 'gender', 'religion', 'teacher_id'];

    public function idCard()
{
    return $this->hasOne(IDCard::class);
}
// It Means student has one IDCard

public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

     public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
//belongsTo(Teacher::class) → means this student belongs to a teacher.


