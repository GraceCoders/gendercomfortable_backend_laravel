<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PurchaseCourse extends Model
{
    use  HasFactory;
    protected $table = 'purchase_course';
    protected $fillable = [
        'user_id',
        'course_id',
        'no_of_seat',
        'status',
        'amount','transaction_id','purchase_key'
        ];

        public function course()
        {
            return $this->belongsTo(Course::class,'course_id','id');
        }
        public function lessons()
        {
            return $this->hasMany(Lesson::class);
        }
        public function question()
        {
            return $this->hasMany(Question::class,'course_id','course_id');
        }
}
