<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $fillable = [
        'id',
        'description',
        'teacher',
        'title',
        'token',
        'image',
    ];

    public function students(){
        return $this->hasMany(Student::class, 'user_id', 'id');
    }
}
