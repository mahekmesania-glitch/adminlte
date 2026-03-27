<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name'];

    // One teacher has many students
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    // hasMany(Student::class) → means one teacher has many students.
}
