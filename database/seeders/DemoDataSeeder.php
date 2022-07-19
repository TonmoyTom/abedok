<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\BasicInfo;
use App\Models\CourseDuration;
use App\Models\District;
use App\Models\Experience;
use App\Models\Graduate;
use App\Models\HigherGraduate;
use App\Models\Major;
use App\Models\PassingYear;
use App\Models\Policy;
use App\Models\PostOffice;
use App\Models\Skill;
use App\Models\Subject;
use App\Models\Term;
use App\Models\Upazila;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DemoDataSeeder extends Seeder
{
    public function run(): void
    {
        $this->createDemoUsers();
        $this->createDemoDistricts();
    }

    private function createDemoUsers()
    {
        User::create([
            'name'              => 'User',
            'email'             => 'user@gmail.com',
            'email_verified_at' => now(),
            'phone'             => '12312312312',
            'password'          => Hash::make('123123123'),
            'otp'               => random_int(100000, 999999),
            'expiry_otp'        =>2022-02-03,
            'remember_token'    => Str::random(10),
        ])->assignRole('User');
        BasicInfo::create([
            'user_id'=>2,
            'mobile'=>'413543545',
            'email'=>'user@gmail.com',
            'nid'=>'546464684684',
            'full_name'=>'TEST USER',
            'father_name'=>'TEST FATHER',
            'mother_name'=>'TEST MOTHER',
            'birth_date' =>'1996-03-02 07:14:06',
            'gender'    =>1,
            'height'    =>72,
            'religion'  =>1,
            'marital_status'=>1,
            'quota_id'=>1
        ]);
        Address::create([
            'user_id'=>2,
            'care_of'=>'Halishohor',
            'details'=>'A -Block, Halishohor',
            'district_id'=>43,
            'upazila_id'=>1,
            'post_office_id'=>1,
            'postal_code'=>4103,
            'type'=>3]);
        Upazila::create(['name'=>'Agrabad','district_id'=>43]);
        PostOffice::create(['name'=>'Halishohor','upazila_id'=>1]);
        Skill::create([
            'user_id'=>2,
            'name'=>'HTML',
            'institute_name'=>'BITM',
            'duration'=>'3 months',
            'result'=>'Passed'
        ]);
        Experience::create([
            'user_id'=>2,
            'type'=>1,
            'company_name'=>'Spinner Tech',
            'location'  =>'Chittagong',
            'designation'   =>'Web Developer',
            'salary'    =>'15000',
            'currently_working'=>2,
            'start_date'=>'2022-03-02 07:14:06',
            'end_date'=>'1996-09-02 07:14:06',
        ]);
        Subject::create(['name'=>'Computer Science and Engineering']);
        Major::create(['name'=>'Software','subject_id'=>1]);
        PassingYear::create(['name'=>'2022']);
        CourseDuration::create(['name'=>'4 years']);
        HigherGraduate::create([
            'user_id'=>2,
            'name'=>'Bachelor Of Science',
            'subject_id'=>1,
            'universities_id'=>1,
            'roll_no'=>'1603274951',
            'registration_no'=>'1547674545',
            'result'=>'3.5',
            'type'=>0,
            'major_id'=>1,
            'passing_year_id'=>18,
            'course_duration_id'=>1
        ]);
         HigherGraduate::create([
            'user_id'=>2,
            'name'=>'Masters Of Science',
            'subject_id'=>1,
            'universities_id'=>1,
            'type'=>1,
            'roll_no'=>'1603274951',
            'registration_no'=>'1547674545',
            'result'=>'3.5',
            'major_id'=>1,
            'passing_year_id'=>20,
            'course_duration_id'=>1
        ]);
        Graduate::create([
            'user_id'=>2,
            'name'=>'JSC',
            'examination_id'=>1,
            'roll_no'=>'454554',
            'registration_no'=>'4644586841',
            'result'=>'5.00',
            'passing_year_id'=>12,
            'board_id'=>1
        ]);
          Graduate::create([
            'user_id'=>2,
            'name'=>'SSC',
            'examination_id'=>2,
            'roll_no'=>'454554',
            'registration_no'=>'4644586841',
            'result'=>'5.00',
            'passing_year_id'=>15,
            'board_id'=>1,
            'group_id'  =>1
        ]);
         Graduate::create([
            'user_id'=>2,
            'name'=>'HSC',
            'examination_id'=>3,
            'roll_no'=>'454554',
            'registration_no'=>'4644586841',
            'result'=>'5.00',
            'passing_year_id'=>16,
            'board_id'=>1,
            'group_id'  => 1
        ]);

    }
    private function createDemoDistricts()
    {

        Policy::create(['details'=>'This is a Demo Policy, Please Update']);
        Term::create(['details'=>'This is a Demo Term, Please Update']);
    }
}
