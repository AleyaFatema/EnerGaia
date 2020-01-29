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
        $rows[] = [
            'name' => 'Supplier 1',
            'email'=>'supplier@example.com',
            'password'=>bcrypt('password'),
            'remember_token'=>str_random(10),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];
        DB::table('users')->insert($rows);
    }
}
