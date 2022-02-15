<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CompanyCourse extends Model
{
    use  HasFactory;
    protected $table = 'company_course';
    protected $fillable = [
        'user_id',
        'course_id',
        'no_of_seat',
        'status',
        'payment'
        ];

        public function lessons()
        {
            return $this->hasMany(Lesson::class,'course_id','course_id');
        }
        public function question()
        {
            return $this->hasMany(Question::class,'course_id','course_id');
        }
}
