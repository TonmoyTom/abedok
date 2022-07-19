<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use HasFactory ;

    public $timestamps = false;
    protected $fillable=['user_id','name','institute_name','duration','result'];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
