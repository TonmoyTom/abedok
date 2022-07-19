<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory ;

    protected $fillable = [
        'name',
        'group_id',
        'type'
    ];

    public function group():BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function majors(){
        return $this->hasMany(Major::class, 'subject_id');
    }


    public function jobs():HasMany
    {
        return $this->hasMany(Job::class, 'subject_id');
    }
}
