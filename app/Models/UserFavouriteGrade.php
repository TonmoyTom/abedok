<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserFavouriteGrade extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'grade_id'
    ];
    public function users() :BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id');
    }
    public function grade():BelongsTo
    {
        return $this->belongsTo(Grade::class , 'grade_id');
    }
}
