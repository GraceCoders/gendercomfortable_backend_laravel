<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'price_per_seat',
        'certificate',
        'thumbnail'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function question()
    {
        return $this->hasMany(Question::class);
    }
public function course(){
    $id = Auth::id();
    $course = Course::where('user_id',$id)->where('status',0)->count();
    $draft = Course::where('user_id',$id)->where('status',1)->count();
    $data['publish'] = $course;
    $data['draft'] = $draft;
    return $data;
}
public function purchase_course(){
    return $this->hasOne(PurchaseCourse::class);
}

}
