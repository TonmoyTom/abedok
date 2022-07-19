<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory ;

    protected $fillable = [
        'name',
        'image',
        'status'

    ];

    public function jobs():HasMany
    {
        return $this->hasMany(Job::class, 'department_id');
    }
    public function userFavouriteJobs(){
        return $this->hasMany(UserFavouriteDepartment::class, 'department_id');
    }
}
