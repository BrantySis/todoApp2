<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    /** @use HasFactory<\Database\Factories\ClassesFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    public function sections()
    {
        return $this->hasMany(Section::class); // A class can have many sections
    }
}
