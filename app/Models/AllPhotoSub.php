<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AllPhotoSub extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'certificate_photos_sub',
        'photos_name',
        'status'
    ];

    public function users():BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}
