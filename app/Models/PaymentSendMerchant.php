<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentSendMerchant extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',
        'merchant_id',
    ];

    public function payments(){
        return $this->belongsTo(Payment::class, 'payment_id');
    }
    public function merchants(){
        return $this->belongsTo(User::class , 'merchant_id');
    }
}
