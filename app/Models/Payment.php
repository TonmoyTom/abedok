<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    const ABEDOK = 1;
    const BKASH = 2;
    const ROCKET = 3;
    const CARD = 4;
    const NAGAD = 5;

    protected $fillable =[
        'user_id',
        'job_id',
        'admission_id',
        'methods',
        'transation_number',
        'balance',
        'status',
        'payement_status',
    ];

    public  function  users(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public  function  jobs(){
        return $this->belongsTo(Job::class , 'job_id');
    }
    public  function  admission()
    {
        return $this->belongsTo(Admission::class, 'admission_id');
    }
    public function workerPayments(){
        return $this->hasMany(WorkerPayment::class , 'user_payment_id');
    }

    public function admissions(){
        return $this->belongsTo(Admission::class , 'admission_id');
    }

    public function merchantUsersSend(){
        return $this->belongsTo(User::class, 'merchant_id');
    }

    public function paymentSendmerchant(){
        return $this->hasMany(PaymentSendMerchant::class , 'payment_id');
    }

}
