<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NonAppliedJobStatus extends Model
{
    const PRELI_EXAM_LOCATION=1;
    const PRELI_RESULT=2;
    const WRITTEN_EXAM_LOCATION=3;
    const WRITTEN_RESULT=4;
    const VIVA_LOCATION=5;
    const VIVA_RESULT=6;

    use HasFactory;
    protected $fillable=['job_id', 'roll_number', 'type', 'status', 'lat', 'long'];

    public function jobs() :  BelongsTo
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
