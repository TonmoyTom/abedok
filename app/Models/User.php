<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
  use HasApiTokens;
  use HasFactory;
  use HasProfilePhoto;
  use Notifiable;
  use TwoFactorAuthenticatable;
  use HasRoles;

  public $guard_name = 'sanctum';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  const ADMIN=0;
  const USER=1;
  protected $fillable = [
    'name',
    'photo',
    'birth_date',
    'gender',
    'email',
    'phone',
    'website',
    'telegram',
    'password',
    'otp',
    'balance',
    'type',
    'status',
    'profile_strength',
    'expiry_otp',
    'fb_id',
    'gmail_id',
    'service_fee',
    'profit',
    'commission', 'notify_type',
	'notify_fav_type',
	'notify_hired_type',
    'notify_unemployed_type'

  ];


  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
    'two_factor_recovery_codes',
    'two_factor_secret',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  protected $dates = ['expiry_otp'];



  /**
   * The accessors to append to the model's array form.
   *
   * @var array
   */
  protected $appends = [
    'profile_photo_url',
    'permission'
  ];

  protected $with =[
    'permissions',
     'roles'
  ];

  public function getPermissionAttribute()
{
    return $this->getAllPermissions();
}


  public function allphoto():HasOne
  {
      return $this->hasOne(AllPhoto::class, 'user_id');
  }

  public function allphotosub():HasMany
  {
      return $this->hasMany(AllPhotoSub::class, 'user_id');
  }



  public function higherGraduates(){
      return $this->hasMany(HigherGraduate::class, 'user_id');
  }
  public function userAdmission() :HasMany
  {
    return $this->hasMany(UserAdmission::class,'user_id');
  }
public function basicInfo():HasOne
  {
    return $this->hasOne(BasicInfo::class);
  }
  public function experience():HasMany
  {
    return $this->hasMany(Experience::class);
  }
   public function skill():HasMany
  {
    return $this->hasMany(Skill::class);
  }
  public function address():HasMany
  {
    return $this->hasMany(Address::class);
  }

  public function graduates():HasMany
  {
    return $this->hasMany(Graduate::class , 'user_id');
  }

  public function appliedJobs():HasMany
  {
    return $this->hasMany(AppliedJob::class, 'user_id');
  }

  public function userFavouriteJobs(){
      return $this->hasMany(UserFavouriteDepartment::class, 'user_id');
  }

    public function userFavouriteGrade(){
        return $this->hasMany(UserFavouriteGrade::class, 'user_id');
    }

    public function userFavouriteUniversities(){
        return $this->hasMany(UserFavouriteUniversity::class, 'user_id');
    }

    public function  payments(){
      return $this->hasMany(Payment::class , 'user_id');
    }

    public function workerPayments(){
      return $this->hasMany(WorkerPayment::class , 'user_id');
    }


    public function appliedMarchentJobs(){
        return $this->belongsToMany(AppliedJob::class , 'marchent_job');
    }


    public function appliedMarchentAdmission(){
        return $this->belongsToMany(UserAdmission::class , 'marchent_admission' , );
    }

    public function providers()
    {
        return $this->hasMany(Provider::class,'user_id','id');
    }

    public function merchantUser(){
        return $this->hasMany(User::class , 'user_id');
    }

    public function paymentSendmerchant(){
        return $this->hasMany(PaymentSendMerchant::class , 'merchant_id');
    }

}
