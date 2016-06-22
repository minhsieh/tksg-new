<?php

use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name' => '主管理者',
        	'username' => 'admin',
        	'email' => 'admin@admin.com',
        	'job_title' => '系統管理者',
        	'phone' => '0963-383-891',
        	'password' => bcrypt('123456')
        ]);
    }
}
