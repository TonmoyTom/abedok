<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quota extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    public function jobs():BelongsToMany
    {
        return $this->belongsToMany(Job::class, 'job_quota');
    }
    public function basicInfo(): HasMany
    {
        return $this->hasMany(BasicInfo::class, 'quota_id');
    }

    public function admissions()
    {
        return $this->belongsToMany(Admission::class , 'admission_quota');
    }



}
