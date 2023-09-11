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
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'no_telepon' => '',
                'nik' => '0000000',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DsI7ChQu4aIwEwc0CTlCnO66pBuIukicAIA/oIKwHD4AIGzIHmHZO',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => '2022-09-15 08:38:55',
                'updated_by' => NULL,
                'created_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Rusdi Salim',
                'email' => NULL,
                'no_telepon' => '085729414634',
                'nik' => '0104001',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yje3O/tcKNsixd5/r1m0COTQTjSFqbAIop/.Y.h2n8zEUyjVR3c7W',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 11:53:04',
                'updated_at' => '2023-09-09 17:33:25',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'M Farhan',
                'email' => NULL,
                'no_telepon' => '082153965026',
                'nik' => '0203001',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tv.Kw8Sn1sWZO2lC97kjR.wcrKo7a4966p5oUnNch23fg3i1wIIja',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 11:53:49',
                'updated_at' => '2023-09-09 17:31:49',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Nafis Bacthir',
                'email' => NULL,
                'no_telepon' => '082165734905',
                'nik' => '0302001',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gAIMdv6G4UkxLQekQ8ipTOYjHKZRP1y5oxWxmhFT2rz7sO7QkFoda',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 11:54:33',
                'updated_at' => '2023-09-09 17:33:06',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Yuli Yanti',
                'email' => NULL,
                'no_telepon' => '082134279054',
                'nik' => '0401001',
                'jenis_kelamin' => 'p',
                'email_verified_at' => NULL,
                'password' => '$2y$10$K1TY3Q/bHS3JHAgkVAu8AOdAeF/n06Fscrw4ZovdJR4GwxABP2zdW',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 11:55:37',
                'updated_at' => '2023-09-09 17:35:13',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Budiman',
                'email' => NULL,
                'no_telepon' => '085790462350',
                'nik' => '0501001',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ipBOLMAkd2g7J76n95f1W.45BYAAxT1Q0hhS3letfDINihG.0TJ2W',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 11:57:55',
                'updated_at' => '2023-09-09 17:25:22',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'M Sidik',
                'email' => NULL,
                'no_telepon' => '089867439045',
                'nik' => '0501002',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ekh5rYs6JDdQ2pbc6ZGeyOYyfkEk65fLdVjo2EC2Y0ELiOe4qx2cm',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 11:58:28',
                'updated_at' => '2023-09-09 17:32:15',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Jamal',
                'email' => NULL,
                'no_telepon' => '085785963206',
                'nik' => '0502003',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wjLtp0fuKdomzAxhSPsTbOz0tg4YnFjrE4l4i6hLxqGVLVvgWRifC',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 11:59:22',
                'updated_at' => '2023-09-09 17:31:07',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Rusmin',
                'email' => NULL,
                'no_telepon' => '082157329646',
                'nik' => '0502004',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NoxFRXcGfIPBY6sd1Hg5uOv6OtguM6xbxuD01ErRe9BMBDk6.pF16',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 11:59:59',
                'updated_at' => '2023-09-09 17:33:53',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Dikun',
                'email' => NULL,
                'no_telepon' => '085239646757',
                'nik' => '0502005',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nLJmgWwvFfcZiQaH1hhwzOEeJTogzinMKwQzrN1sUWNoJG65Lnp4y',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 12:00:57',
                'updated_at' => '2023-09-09 17:26:40',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Rustandi',
                'email' => NULL,
                'no_telepon' => '089863457924',
                'nik' => '0502006',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$g2C1tn5NYRxxqFqQJ1XaleF9eABCn/I/oGzcK46745GhjlGeNavhi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 12:01:30',
                'updated_at' => '2023-09-09 17:34:33',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Dadan',
                'email' => NULL,
                'no_telepon' => '082236975391',
                'nik' => '0502007',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7T9DGFv1mnliu4IDhQVBc.cSrPzcu0SjPYl7zM1eVgg1bF3STljgu',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 12:02:08',
                'updated_at' => '2023-09-09 17:26:10',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Turiman',
                'email' => NULL,
                'no_telepon' => '085735903254',
                'nik' => '0502008',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wiWt.wNsx./xUuf7jJcHw.AOSGxJ6mzQBUGijTEKhRcSpC6Q5SvL.',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 12:02:42',
                'updated_at' => '2023-09-09 17:34:55',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Gilang Sutani',
                'email' => NULL,
                'no_telepon' => '082246529477',
                'nik' => '0601001',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P6eXUDyJEBC5bkgTCKdTgOLVRcLmF4GwnOVdwJ7FO7R/4MdXQQODa',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 12:03:11',
                'updated_at' => '2023-09-09 17:27:25',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Aep',
                'email' => NULL,
                'no_telepon' => '082176945320',
                'nik' => '0602002',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bcGt6FPsM.TpKInV0eR9WOsWC6jh8CBTvRHwDUxPMSgAlpz42nYem',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 12:03:43',
                'updated_at' => '2023-09-09 17:24:59',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Jabkan Muttaqien',
                'email' => NULL,
                'no_telepon' => '082167950239',
                'nik' => '0602003',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2M/KQzunYfLaFVdBk/QmL.AWi45Fq4o9aMd/rgHNfPv.Q0AOKIVSu',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 12:04:11',
                'updated_at' => '2023-09-09 17:28:02',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Abdul Farhan',
                'email' => NULL,
                'no_telepon' => '089867983452',
                'nik' => '0602004',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$okA8/YP8wGCoMPMNSg1c7.PhTZe7TTOujcs3OFM02g0eQfNU.sjwC',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2022-09-15 12:04:49',
                'updated_at' => '2023-09-09 17:24:38',
                'updated_by' => 1,
                'created_by' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'General Manager',
                'email' => NULL,
                'no_telepon' => '089876923147',
                'nik' => '0000001',
                'jenis_kelamin' => 'l',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fGyajfAv7mxdHec7qD8iNeCqkZJFS9CrvRDRepEbia30fymigjD1S',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2023-09-08 16:39:20',
                'updated_at' => '2023-09-09 17:26:57',
                'updated_by' => 1,
                'created_by' => 1,
            ),
        ));
        
        
    }
}