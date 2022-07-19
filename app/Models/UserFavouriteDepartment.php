<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserFavouriteDepartment extends Model
{
    use HasFactory;
    protected  $fillable =[
        'user_id',
        'department_id'
    ];
    public  function users():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function departments() : BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
