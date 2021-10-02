<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'questions_exams', 'exam_id', 'question_id');
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }
}
