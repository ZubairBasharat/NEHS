<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'USER',
                'email' => 'test@example.com',
                'email_verified_at' => '2021-04-16 11:03:46',
                'password' => '$2y$10$87GCrsvlECJrjV6dBl/jw.Bg6BxH1NdFrWuMZICTezaKLnwt5VyBC',
                'photo' => 'storage/img/logo/HuNNAAVngtEozLlGqDsaqMJL1Puq9zHurWZeUEqO.jpg',
                'phone' => NULL,
                'status' => 1,
                'last_auth' => '2021-05-06 15:51:13',
                'remember_token' => 'rQvSHlWIX6DhOheNDOqDjSeRp7ZLQXiyUwv8h6ayJ4zOP801oOcSAzOZTokB',
                'created_at' => '2021-04-16 11:03:46',
                'updated_at' => '2021-04-16 11:03:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2021-05-17 15:29:42',
                'password' => '$2y$10$acuO3SZxQlvxDFyAhctjZ.LbJBsGSigj9lW7QmzZjiXNl8ueEWeye',
                'photo' => 'storage/img/logo/Vp7Jev8zs9UK2E5P2K6tp74SmQw1u2v8E4oNsITz.jpg',
                'phone' => NULL,
                'status' => 1,
                'last_auth' => '2021-05-06 15:51:13',
                'remember_token' => 'sYAZSiOZ0xcwMDZ6ush30g9jPobFYPC6meYZb67OevTT26a3V1KPX538s0IO',
                'created_at' => '2021-04-16 11:10:30',
                'updated_at' => '2021-06-09 17:32:03',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'user',
                'email' => 'user@gmail.com',
                'email_verified_at' => '2021-05-18 12:30:10',
                'password' => '$2y$10$SnVnsXloXTjUHGzTGfmo9O/EHZhKHPUyWHiRUiuEUsCfR9euQ5Aei',
                'photo' => 'storage/img/logo/HuNNAAVngtEozLlGqDsaqMJL1Puq9zHurWZeUEqO.jpg',
                'phone' => NULL,
                'status' => 1,
                'last_auth' => '2021-05-06 15:51:13',
                'remember_token' => NULL,
                'created_at' => '2021-04-21 11:37:56',
                'updated_at' => '2021-04-21 11:37:56',
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'check',
                'email' => 'check@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$k5rSjU/3cY/mjSuzhdIa1.Ycy7GN.xee1hr4K.6JkjOOKfEIYxR3.',
                'photo' => NULL,
                'phone' => NULL,
                'status' => 1,
                'last_auth' => '2021-05-06 15:51:13',
                'remember_token' => NULL,
                'created_at' => '2021-04-22 05:40:09',
                'updated_at' => '2021-04-22 05:40:09',
            ),
            4 => 
            array (
                'id' => 12,
                'name' => 'zeeshan Ahmed',
                'email' => 'manager@gmail.com',
                'email_verified_at' => '2021-05-17 17:06:23',
                'password' => '$2y$10$/izpO2JjoatTA38O5ewk7Op2K8aMXKNzueSZyWUgz8WxAYJdCt.kq',
                'photo' => NULL,
                'phone' => '+923048518244',
                'status' => 1,
                'last_auth' => '2021-05-12 00:31:07',
                'remember_token' => NULL,
                'created_at' => '2021-05-03 11:51:48',
                'updated_at' => '2021-06-24 11:12:09',
            ),
            5 => 
            array (
                'id' => 14,
                'name' => 'manger',
                'email' => 'ddfs@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$d2sgo4KS8KmTL2rDFb00Muqjip2YUex4iQiw9nWtY5IRCyEDjX3.e',
                'photo' => NULL,
                'phone' => NULL,
                'status' => 1,
                'last_auth' => '2021-05-06 15:51:13',
                'remember_token' => NULL,
                'created_at' => '2021-05-06 08:39:49',
                'updated_at' => '2021-05-06 16:08:48',
            ),
            6 => 
            array (
                'id' => 18,
                'name' => 'fleet manger',
                'email' => 'fleet@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4WqO4xW0YUoV8S.1NtlP9uqVbSXvrlAAxR1Gmlgc7dZ1lAhjCFzUi',
                'photo' => NULL,
                'phone' => NULL,
                'status' => 1,
                'last_auth' => '2021-05-12 10:15:47',
                'remember_token' => NULL,
                'created_at' => '2021-05-12 10:15:47',
                'updated_at' => '2021-05-12 10:15:47',
            ),
            7 => 
            array (
                'id' => 19,
                'name' => 'safety',
                'email' => 'safety@gmail.com',
                'email_verified_at' => '2021-06-09 11:39:26',
                'password' => '$2y$10$DG0hHQBoF8090qUDLU5y6.1B5A7v9bl7/IRP5mBk2tWubAiilgbGW',
                'photo' => NULL,
                'phone' => NULL,
                'status' => 1,
                'last_auth' => '2021-05-12 11:43:14',
                'remember_token' => NULL,
                'created_at' => '2021-05-12 11:43:14',
                'updated_at' => '2021-05-12 11:43:14',
            ),
            8 => 
            array (
                'id' => 20,
                'name' => 'john',
                'email' => 'office@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4u9x3nuiqHhTW3YQh68uSugzTAtE43mzdIod/DaFJsv6NBIyjj.Vm',
                'photo' => NULL,
                'phone' => NULL,
                'status' => 1,
                'last_auth' => '2021-05-12 16:46:08',
                'remember_token' => NULL,
                'created_at' => '2021-05-12 16:46:08',
                'updated_at' => '2021-05-12 16:46:08',
            ),
            9 => 
            array (
                'id' => 68,
                'name' => 'farhan jutt',
                'email' => 'farhanbashir06@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$F.RWQpjmhGibSR9QoveTAuTIxhOna3cHXHT1r9FO6KjeBzMDuSV/S',
                'photo' => NULL,
                'phone' => NULL,
                'status' => 1,
                'last_auth' => '2021-06-14 16:42:21',
                'remember_token' => NULL,
                'created_at' => '2021-06-14 16:42:21',
                'updated_at' => '2021-06-28 11:37:06',
            ),
        ));
        
        
    }
}