<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->morphedByMany(Question::class, 'categoryable');
    }

    public function exams()
    {
        return $this->morphedByMany(Exam::class, 'categoryable');
    }
}
