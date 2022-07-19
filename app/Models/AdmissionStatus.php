<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdmissionStatus extends Model
{
    use HasFactory;
    const PASS = 1;
    const FAIL = 0;
    const WAITING = 3;
    const PENDING = 0;
    const APPLIED = 0;
    const PAID = 1;
    const PRELI_LOCATION = 2;
    const PRELI_RESULT = 3;
    const WRITTEN_LOCATION = 4;
    const WRITTEN_RESULT = 5;
    const VIVA_LOCATION = 6;
    const VIVA_RESULT = 7;
    const CONGRATS = 8;
    protected $fillable=[
        'user_admission_id',
        'short_name',
        'description',
        'status',
        'lat',
        'long',
        'type',
        'file'];

    public function admissionUser() :BelongsTo
    {
        return $this->belongsTo(UserAdmission::class , 'user_admission_id');
    }
}
