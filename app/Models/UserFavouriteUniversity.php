<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserFavouriteUniversity extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'university_id'
    ];
    public function users() :BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id');
    }
    public function universities():BelongsTo
    {
        return $this->belongsTo(University::class , 'university_id');
    }
}
