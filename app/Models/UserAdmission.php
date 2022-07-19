<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAdmission extends Model
{
    use HasFactory ;
    protected $fillable=['user_id','admission_id','status' , 'roll' , 'admission_status' , 'send_by_status'];


    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function admission() :BelongsTo
    {
        return $this->belongsTo(Admission::class);
    }
     public function admissionStatus() : HasMany
    {
        return $this->hasMany(AdmissionStatus::class , 'user_admission_id');
    }

    public function users(){
        return $this->belongsToMany(User::class , 'marchent_admission');
    }
}
