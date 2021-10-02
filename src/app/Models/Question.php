<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function exams()
    {
        return $this->belongsToMany(Exam::class, 'questions_exams', 'question_id', 'exam_id');
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }
}
