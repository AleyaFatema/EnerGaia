<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [];
        $rows[] = ['name' => 'Supplier 1','email'=>'supplier1@example.com','password'=>bcrypt('123456'),'remember_token'=>str_random(10),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()];
        $rows[] = ['name' => 'Supplier 2','email'=>'supplier2@example.com','password'=>bcrypt('123456'),'remember_token'=>str_random(10),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()];
        DB::table('users')->insert($rows);
    }
}
