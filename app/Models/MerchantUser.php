<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchantUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'merchant_id'
    ];

    public function users(){
        return $this->belongsTo(User::class , 'user_id');
    }
    public function merchent(){
        return $this->belongsTo(User::class , 'merchant_id');
    }
}
