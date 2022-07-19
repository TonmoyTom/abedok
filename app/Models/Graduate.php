<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Graduate extends Model
{
    use HasFactory ;

    protected $fillable = [
        'name' ,
        'user_id',
        'examination_id' ,
        'board_id' ,
        'roll_no' ,
        'registration_no' ,
        'result' ,
        'passing_year_id',
        'group_id'
    ];

    public function users():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function examination():BelongsTo
    {
        return $this->belongsTo(Examination::class, 'examination_id');
    }

    public function board():BelongsTo
    {
        return $this->belongsTo(Board::class, 'board_id');
    }

    public function passingYear():BelongsTo
    {
        return $this->belongsTo(PassingYear::class, 'passing_year_id');
    }

    public function group():BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}
