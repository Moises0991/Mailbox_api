<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'description',
        'image',
        'status',
    ];

    public function students() {
        return $this->belongsTo(Student::class);
    }
}
