<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'answers',
        'right_answer',
        'score',
        'exam_id'
    ];
    public function Exams()
    {
        return $this->belongsTo(Exam::class, 'exam_id');
    }

}
