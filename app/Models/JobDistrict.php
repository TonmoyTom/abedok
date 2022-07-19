<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDistrict extends Model
{
    use HasFactory;

    protected $fillable =[
        'district_id',
        'job_id'
    ];

    public function  districts(){
        return $this->belongsTo(District::class , 'district_id');
    }

    public function  jobs(){
        return $this->belongsTo(Job::class , 'job_id');
    }
}
