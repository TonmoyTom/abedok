<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use HasFactory ;

    protected $fillable = [
        'name',
        'status'
    ];


    public function jobs():HasMany
    {
        return $this->hasMany(Job::class, 'grade_id');
    }

    public function userFavouriteGrade():HasMany
    {
        return $this->hasMany(UserFavouriteGrade::class, 'grade_id');
    }

}
