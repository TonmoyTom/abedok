<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Major extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subject_id',
    ];

    public function universities():BelongsTo
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
