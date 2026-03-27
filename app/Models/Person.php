<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['name'];

    // One-to-one relationship: one person has one passport
    public function passport()
    {
        return $this->hasOne(Passport::class);
    }
}
