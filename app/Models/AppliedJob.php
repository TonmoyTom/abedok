<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppliedJob extends Model
{
    use HasFactory ;

    protected $fillable = [
        'job_id',
        'user_id',
        'roll',
        'status',
        'send_by_status',
        'payment_status'
      ];

    public function jobs(){
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function appliedJobStatus() :HasMany
    {
        return $this->hasMany(AppliedJobStatus::class, 'applied_job_id');
    }

    public function users(){
        return $this->belongsToMany(User::class , 'marchent_job');
    }
}
