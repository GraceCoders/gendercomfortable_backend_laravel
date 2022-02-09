<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'option1',
        'option2',
        'option3',
        'option4','status'

    ];

    public function course()
    {
        return $this->belongs('Question');
    }
}
