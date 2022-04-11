<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class Student extends Model
{
    use HasFactory, HasApiTokens, Notifiable;
    
    // protected $table = "users";
    
    protected $fillable = [
        'name',
        'surname',
        'password',
        'email',
        'career',
    ];

    
    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $cast = [
        'email_verified_at' => 'datetime'
    ];

    public function setPasswordAttribute ($password) {
        $this->attributes['password'] = Hash::make($password);
    }

    public function reports() {
        return $this->hasMany(Report::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}