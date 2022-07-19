<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    const PRESENT=1;
    const PERMANENT=2;
    const SAME=3;
    use HasFactory ;
    protected $fillable=['user_id','care_of','details','district_id','upazila_id','post_office_id','postal_code','type'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function district() :BelongsTo
    {
        return $this->belongsTo(District::class);
    }
    public function upazila() :BelongsTo
    {
        return $this->belongsTo(Upazila::class);
    }
    public function postOffice() :BelongsTo
    {
        return $this->belongsTo(PostOffice::class);
    }
}
