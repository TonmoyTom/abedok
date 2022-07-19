<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory ;

    protected $fillable = [
        'name',
    ];

    public function admission() : HasMany
    {
        return $this->hasMany(Admission::class , 'group_id');
    }

    public function graduate():HasMany
    {
        return $this->hasMany(Graduate::class, 'passing_year_id');
    }
    public function subjects():HasMany
    {
        return $this->hasMany(Subject::class, 'group_id');
    }
    public function job(): HasMany
    {
        return $this->hasMany(Job::class, 'group_id');
    }
}
