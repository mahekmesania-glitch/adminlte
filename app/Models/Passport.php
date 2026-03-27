<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $fillable = ['person_id', 'file_path'];

    // Passport belongs to one person
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
