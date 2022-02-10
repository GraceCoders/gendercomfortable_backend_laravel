<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'right_answer',
        'coures_id',
        'option1',
        'option2',
        'option3',
        'option4',
        'status'
    ];

    public function course()
    {
        return $this->belongs('Course');
    }
}
