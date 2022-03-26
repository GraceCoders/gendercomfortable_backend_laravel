<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddRating extends Model
{
    use HasFactory;
    protected $table = 'rating';
    protected $fillable = [
        'company_id',
        'user_id',
        'feed_back',
        'star',
        'status'
    ];
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
