<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [];
        $rows[] = [
            'name' => 'Manager',
            'email'=>'admin1@example.com',
            'title'=>'Administrator',
            'password'=>bcrypt('password'),
            'remember_token'=>str_random(10),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];
        DB::table('admins')->insert($rows);
    }
}
