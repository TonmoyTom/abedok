<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class University extends Model
{
    use HasFactory;
    protected $fillable=['name','location','logo','status'];

    public function admission() : HasMany
    {
        return $this->hasMany(Admission::class);
    }

    public function subject():HasMany
    {
        return $this->hasMany(Subject::class, 'universitie_id');
    }

    public function userFavouriteUniversities(){
        return $this->hasMany(UserFavouriteUniversity::class, 'university_id');
    }
}
