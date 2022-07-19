<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upazila extends Model
{
    use HasFactory ;
    protected $fillable=['name','district_id'];

    public function district(): BelongsTo
    {
         return $this->belongsTo(District::class);
    }
    public function postOffice():HasMany
    {
        return $this->hasMany(PostOffice::class);
    }
    
}
