<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCheck extends Model
{
    use HasFactory;

    protected $fillable =[
        'job_id',
        'min_age_check',
        'max_age_check',
        'distric_check',
        'quota_check',
        'skill_check',
        'experience_check'
    ];

    public function job(){
        return $this->belongsTo(Job::class , 'job_id');
    }
}
