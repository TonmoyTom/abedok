<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    const ACTIVE=0;
    const INACTIVE=1;
    const Graduate = 1;
    const HigherGraduaten = 1;

    use HasFactory ;

    protected $fillable = [
        'name' ,
        'max_age' ,
        'min_age' ,
        'sit' ,
        'post_id',
        'department_id' ,
        'examination_id' ,
        'subject_id' ,
        'grade_id' ,
        'quota_id',
        'district_id',
        'group_id',
        'fee',
        'description',
        'link',
        'skill',
        'experience',
        'experience_details',
        'status',
        'gender',
        'maritial_status',
        'religion',
        'type',
        'start_time',
        'end_time',
        'service_fee',
        'quota_status_check'

    ];


    protected $dates = [
        'start_time',
        'end_time',
    ];
    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class , 'department_id');
    }

    public function examination():BelongsTo
    {
        return $this->belongsTo(Examination::class , 'examination_id');
    }

    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class , 'subject_id');
    }

    public function grade():BelongsTo
    {
        return $this->belongsTo(Grade::class , 'grade_id');
    }

    public function district():BelongsTo
    {
        return $this->belongsTo(District::class , 'district_id');
    }
    // public function quota(){
    //     return $this->belongsTo(Quota::class , 'quota_id');
    // }

    public function skill(){
        return $this->belongsTo(Skill::class , 'skill_id');
    }

    public function experience(){
        return $this->belongsTo(Experience::class , 'experience_id');
    }
    public function groups(){
        return $this->belongsTo(Group::class , 'group_id');
    }

    public function appliedJobs():HasMany
    {
        return $this->hasMany(AppliedJob::class, 'job_id');
    }
    public function jobDistricts():HasMany
    {
        return $this->hasMany(JobDistrict::class, 'job_id');
    }

    public function  payments(){
        return $this->hasMany(Payment::class , 'job_id');
    }
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function nonAppliedJobStatus(){
        return $this->hasMany(NonAppliedJobStatus::class , 'job_id');
    }

    public function jobQuotas(){
        return $this->belongsToMany(Quota::class , 'job_quota' );
    }

    public function jobChecks(){
        return $this->hasOne(JobCheck::class, 'job_id');
    }


}
