<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveAnswer extends Model
{
    use HasFactory;
    protected $table = 'save_answer';
    protected $fillable = [
        'user_id',
        'question_id',
        'course_id',
        'status',
        'answer'
        ];

}
