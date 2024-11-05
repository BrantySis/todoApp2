<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /** @use HasFactory<\Database\Factories\SectionFactory> */
    use HasFactory;

    protected $fillable = ['name', 'class_id']; // Fillable attributes

    public function class()
    {
        return $this->belongsTo(Classes::class); // A section belongs to a class
    }

    public function students()
    {
        return $this->hasMany(Student::class); // A section can have many students
    }
}
