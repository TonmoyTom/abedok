<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use HasFactory ;
    protected $fillable= ['name'];

    public function upazila(): HasMany
    {
        return $this->hasMany(Upazila::class);
    }
    public function jobDistricts():HasMany
    {
        return $this->hasMany(JobDistrict::class, 'district_id');
    }


}
