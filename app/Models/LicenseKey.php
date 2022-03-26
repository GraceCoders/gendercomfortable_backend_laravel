<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class LicenseKey extends Model
{
    use  HasFactory;
    protected $table = 'employee_license';
    protected $fillable = [
        'user_id',
        'license_key',
        'ststus',
        ];
        public function user()
        {
            return $this->hasOne(User::class,'id','user_id');
        }
    }