<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = ['name', 'section_id']; // Fillable attributes

    public function section()
    {
        return $this->belongsTo(Section::class); // A student belongs to a section
    }
}
