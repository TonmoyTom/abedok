<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class PassingYear extends Model
{
    use HasFactory ;

    protected $fillable = [
        'name',
    ];

    public function graduate():HasMany
    {
        return $this->hasMany(Graduate::class, 'passing_year_id');
    }
}
