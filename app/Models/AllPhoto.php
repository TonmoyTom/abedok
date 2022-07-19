<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class AllPhoto extends Model
{
    use HasFactory ;

    protected $fillable = [
        'user_id',
        'pp_photos',
        'signature_photos',
        'nid_photos',
        'passport_photos',
        'birth_certificate_photos',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}
