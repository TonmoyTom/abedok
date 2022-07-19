<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use App\Models\Group;
use App\Models\Post;
use App\Models\Quota;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CoreDataSeeder extends Seeder
{
    public function run()
    {
        $this->createDefaultSettings();
        $this->createDefaultRolePermissions();
        // $this->createDefaultUsers();
    }

    private function createDefaultSettings()
    {
        CompanySetting::create([
            'name'                 => 'Project',
            'mobile1'              => '01xxxxxxxxx',
            'email'                => 'info@gmail.com',
        ]);
    }

    private function createDefaultRolePermissions()
    {

        $permissions = [
            ['name' => 'user.access'],
            ['name' => 'user.create'],
            ['name' => 'user.edit'],
            ['name' => 'user.view'],
            ['name' => 'user.delete'],

            ['name' => 'profile.access'],
            ['name' => 'profile.edit'],

            ['name' => 'settings.access'],
            ['name' => 'settings.edit'],

            ['name' => 'role_permission.access'],
            ['name' => 'role_permission.create'],
            ['name' => 'role_permission.edit'],
            ['name' => 'role_permission.view'],
            ['name' => 'role_permission.delete'],

            ['name' => 'term.access'],
            ['name' => 'term.create'],
            ['name' => 'term.edit'],
            ['name' => 'term.view'],
            ['name' => 'term.delete'],

            ['name' => 'policy.access'],
            ['name' => 'policy.create'],
            ['name' => 'policy.edit'],
            ['name' => 'policy.view'],
            ['name' => 'policy.delete'],

            ['name' => 'grade.access'],
            ['name' => 'grade.create'],
            ['name' => 'grade.edit'],
            ['name' => 'grade.view'],
            ['name' => 'grade.delete'],

            ['name' => 'examination.access'],
            ['name' => 'examination.create'],
            ['name' => 'examination.edit'],
            ['name' => 'examination.view'],
            ['name' => 'examination.delete'],

            ['name' => 'group.access'],
            ['name' => 'group.create'],
            ['name' => 'group.edit'],
            ['name' => 'group.view'],
            ['name' => 'group.delete'],

            ['name' => 'board.access'],
            ['name' => 'board.create'],
            ['name' => 'board.edit'],
            ['name' => 'board.view'],
            ['name' => 'board.delete'],

            ['name' => 'passing_year.access'],
            ['name' => 'passing_year.create'],
            ['name' => 'passing_year.edit'],
            ['name' => 'passing_year.view'],
            ['name' => 'passing_year.delete'],

            ['name' => 'graduate.access'],
            ['name' => 'graduate.create'],
            ['name' => 'graduate.edit'],
            ['name' => 'graduate.view'],
            ['name' => 'graduate.delete'],

            ['name' => 'unit.access'],
            ['name' => 'unit.create'],
            ['name' => 'unit.edit'],
            ['name' => 'unit.view'],
            ['name' => 'unit.delete'],



            ['name' => 'university.access'],
            ['name' => 'university.create'],
            ['name' => 'university.edit'],
            ['name' => 'university.view'],
            ['name' => 'university.delete'],


            ['name' => 'departments.access'],
            ['name' => 'departments.create'],
            ['name' => 'departments.edit'],
            ['name' => 'departments.view'],
            ['name' => 'departments.delete'],


            ['name' => 'district.access'],
            ['name' => 'district.create'],
            ['name' => 'district.edit'],
            ['name' => 'district.view'],
            ['name' => 'district.delete'],


            ['name' => 'upazila.access'],
            ['name' => 'upazila.create'],
            ['name' => 'upazila.edit'],
            ['name' => 'upazila.view'],
            ['name' => 'upazila.delete'],


            ['name' => 'post-office.access'],
            ['name' => 'post-office.create'],
            ['name' => 'post-office.edit'],
            ['name' => 'post-office.view'],
            ['name' => 'post-office.delete'],


            ['name' => 'subjects.access'],
            ['name' => 'subjects.create'],
            ['name' => 'subjects.edit'],
            ['name' => 'subjects.view'],
            ['name' => 'subjects.delete'],


            ['name' => 'major.access'],
            ['name' => 'major.create'],
            ['name' => 'major.edit'],
            ['name' => 'major.view'],
            ['name' => 'major.delete'],


            ['name' => 'course_duration.access'],
            ['name' => 'course_duration.create'],
            ['name' => 'course_duration.edit'],
            ['name' => 'course_duration.view'],
            ['name' => 'course_duration.delete'],


            ['name' => 'quota.access'],
            ['name' => 'quota.create'],
            ['name' => 'quota.edit'],
            ['name' => 'quota.view'],
            ['name' => 'quota.delete'],


            ['name' => 'post.access'],
            ['name' => 'post.create'],
            ['name' => 'post.edit'],
            ['name' => 'post.view'],
            ['name' => 'post.delete'],


            ['name' => 'user-payment-send.access'],
            ['name' => 'user-payment-send.create'],
            ['name' => 'user-payment-send.edit'],
            ['name' => 'user-payment-send.view'],
            ['name' => 'user-payment-send.delete'],


            ['name' => 'worker-payment-send.access'],
            ['name' => 'worker-payment-send.create'],
            ['name' => 'worker-payment-send.edit'],
            ['name' => 'worker-payment-send.view'],
            ['name' => 'worker-payment-send.delete'],


            ['name' => 'university.access'],
            ['name' => 'university.create'],
            ['name' => 'university.edit'],
            ['name' => 'university.view'],
            ['name' => 'university.delete'],


            ['name' => 'admission.access'],
            ['name' => 'admission.create'],
            ['name' => 'admission.edit'],
            ['name' => 'admission.view'],
            ['name' => 'admission.delete'],


            ['name' => 'jobs.access'],
            ['name' => 'jobs.create'],
            ['name' => 'jobs.edit'],
            ['name' => 'jobs.view'],
            ['name' => 'jobs.delete'],


        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission["name"],
                'guard_name' => 'sanctum'
            ]);
        };

        //get all permissions via Gate::before rule; see AuthServiceProvider
    //     Role::create([
    //         'name' => 'Super Admin',
    //         'guard_name' => 'sanctum'
    //     ]);

    //     $userPermissions = [
    //         'profile.access',
    //         'profile.edit',
    //     ];

    //     Role::create([
    //         'name' => 'User',
    //         'guard_name' => 'sanctum'
    //     ])->givePermissionTo($userPermissions);
    // }

    // private function createDefaultUsers()
    // {
    //     User::create([
    //         'name'              => 'admin',
    //         'email'             => 'admin@gmail.com',
    //         'phone'             => '0123456789',
    //         'email_verified_at' => now(),
    //         'type'              =>0,
    //         'password'          => Hash::make('123123123'),
    //         'otp'               => random_int(100000, 999999),
    //         'remember_token'    => Str::random(10),
    //         'expiry_otp'        =>2022-02-03
    //     ])->assignRole('Super Admin');
    //     Group::create([
    //         'name'  =>'Science',
    //     ]);
    //     Group::create(['name'=>'Commerce']);
    //     Group::create(['name'=>'Arts']);
    //     Post::create(['name'=>'Manager']);
    //     Post::create(['name' => 'Executive']);
    //     Quota::create(['name' => 'Freedom Fighetr']);
    //     Quota::create(['name' => 'Abmotmal']);
     }

}
