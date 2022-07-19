<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admission extends Model
{
    const ACTIVE=1;
    const INACTIVE=0;
    use HasFactory;
    protected $fillable=[
        'name',
        'status',
        'unit_id',
        'university_id',
        'group_id',
        'application_start',
        'application_end',
        'exam_time',
        'application_fee',
        'min_gpa',
        'min_gpa_total',
        'seat',
        'qouta_id',
        'file'
    ];
    public function university(): BelongsTo
    {
        return $this->belongsTo(University::class);
    }
    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
      public function group():BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
    public function userAdmission() :HasMany
    {
        return $this->hasMany(UserAdmission::class,'admission_id');
    }
    public function  payments()
    {
        return $this->hasMany(Payment::class, 'admission_id');
    }
    public function excelUpload()
    {
        return $this->hasMany(ExcelUpload::class, 'admission_id');
    }

    public function admissionQuotas(){
        return $this->belongsToMany(Quota::class , 'admission_quota');
    }

}
