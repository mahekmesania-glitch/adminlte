<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IDCard extends Model
{
    protected $fillable = ['card_number', 'student_id']; // ✅ Allow these fields
    
    public function student()
{
    return $this->belongsTo(Student::class);
}
// This IDCard Belongs to one student.
}
