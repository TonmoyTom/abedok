<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_payment_id',
        'user_id',
    ];
    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function payments(){
        return $this->belongsTo(Payment::class, 'user_payment_id');
    }
}
