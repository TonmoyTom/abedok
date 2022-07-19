<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Board extends Model
{
    use HasFactory ;

    protected $fillable = [
        'name',
    ];

    public function graduate():HasMany
    {
        return $this->hasMany(Graduate::class, 'board_id');
    }
    public function admission():HasMany
    {
        return $this->hasMany(Admission::class, 'board_id');
    }
}
