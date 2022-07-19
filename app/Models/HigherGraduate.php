<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class HigherGraduate extends Model
{
    use HasFactory ;

    const HONOURS = 0;
    const MASTER = 1;

    protected $fillable = [
        'name' ,
        'subject_id' ,
        'universities_id' ,
        'roll_no' ,
        'registration_no' ,
        'result' ,
        'major_id' ,
        'passing_year_id',
        'course_duration_id',
        'type',
        'user_id'

    ];
    public function users():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function passingYear():BelongsTo
    {
        return $this->belongsTo(PassingYear::class, 'passing_year_id');
    }

    public function group():BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    public function major():BelongsTo
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function courseDuration():BelongsTo
    {
        return $this->belongsTo(CourseDuration::class, 'course_duration_id');
    }

    public function university():BelongsTo
    {
        return $this->belongsTo(University::class, 'universities_id');
    }

}
