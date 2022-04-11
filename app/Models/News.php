<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model {
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'description',
        'image',
        'num_of_reactions',
        'num_of_comments'
    ];

    public function admins() {
        return $this->belongsTo(Admin::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
