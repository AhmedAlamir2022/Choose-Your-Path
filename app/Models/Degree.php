<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'student_id',
        'question_id',
        'score',
        'abuse',
        'date'
    ];

    public function Exams()
    {
        return $this->belongsTo(Exam::class, 'exam_id');
    }

    public function student()
    {
        return $this->belongsTo(Student11::class, 'student_id');
    }


}
