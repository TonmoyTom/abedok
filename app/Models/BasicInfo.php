<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BasicInfo extends Model
{
    const ISLAM=1;
    const HINDU=2;
    const BUDDHIST=3;
    const CHISTIAN=4;
    const OTHER=5;
    const MALE=1;
    const FEMALE=2;
    const MARRIED=1;
    const UNMARRIED =2;
    const DIVORCE =3;
    use HasFactory;
    protected $fillable=[
        'user_id',
        'full_name',
        'father_name',
        'mother_name',
        'birth_date',
        'gender',
        'height',
        'religion',
        'marital_status',
        'nid',
        'mobile',
        'email',
        'quota_id',
        'passport_number'
    ];
    public function quota() : BelongsTo
    {
       return $this->belongsTo(Quota::class,'quota_id');
    }
}
