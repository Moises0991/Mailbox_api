<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_id',
        'student_id',
        // 'admin_id',
        'comment',
    ];

    public function news() {
        return $this->belongsTo(News::class);
    }

    public function students() {
        return $this->belongsTo(Student::class);
    }

    // public function admins() {
    //     return $this->belongsTo(Admin::class);
    // }
}
