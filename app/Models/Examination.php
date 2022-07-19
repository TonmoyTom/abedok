<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Examination extends Model
{
    use HasFactory ;

    protected $fillable = [
        'name',
    ];

    public function graduate():HasMany
    {
        return $this->hasMany(Graduate::class, 'examination_id');
    }

    public function jobs():HasMany
    {
        return $this->hasMany(Job::class, 'examination_id');
    }
}
