<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use HasFactory ;
    protected $fillable=[
        'user_id',
        'type',
        'company_name',
        'location',
        'designation',
        'salary',
        'currently_working',
        'start_date',
        'end_date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function jobs():HasMany
    {
        return $this->hasMany(Job::class, 'experience_id');
    }
}
