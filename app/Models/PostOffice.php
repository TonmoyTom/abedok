<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostOffice extends Model
{
    use HasFactory ;
    protected $fillable=['name','upazila_id'];

    public function upazila(): BelongsTo
    {
        return $this->belongsTo(Upazila::class);
    }
}
