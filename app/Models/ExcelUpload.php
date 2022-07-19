<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExcelUpload extends Model
{
    use HasFactory;
    const PRELI_EXAM_LOCATION = 1;
    const PRELI_RESULT = 2;
    const WRITTEN_EXAM_LOCATION = 3;
    const WRITTEN_RESULT = 4;
    const VIVA_LOCATION = 5;
    const VIVA_RESULT = 6;


    protected $fillable = ['roll_number','admission_id', 'status' , 'lat' , 'long','type'];
 public function admission() : BelongsTo
 {
    return $this->belongsTo(Admission::class,'admission_id');
 }
    
}
