<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [];
        $rows[] = ['name'=>'Pencil 2B black','product_code'=>'pp1','quantity'=>100,'price'=>5,'vendor'=>'','supplier'=>1,'description'=>'2B black','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()];
        $rows[] = ['name'=>'Pencil 2B red','product_code'=>'pp2','quantity'=>100,'price'=>5,'vendor'=>'','supplier'=>2,'description'=>'2B red','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()];
        $rows[] = ['name'=>'Pencil 4B green','product_code'=>'pp3','quantity'=>100,'price'=>5,'vendor'=>'','supplier'=>1,'description'=>'4B green','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()];
        $rows[] = ['name'=>'Pencil 4B red','product_code'=>'pp4','quantity'=>100,'price'=>5,'vendor'=>'','supplier'=>2,'description'=>'4B red','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()];
        DB::table('products')->insert($rows);
    }
}
