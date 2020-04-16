<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->insert([
            'name' => 'Sample Template',
            'headerColor' =>'#ffffff',
            'headerTextColor'=>'#000000',
            'backColor'=>'#123456',
            'primaryTextColor'=>'#000000',
            'applied_at'=>\Carbon\Carbon::now(),
            'created_at'=>\Carbon\Carbon::now()
        ]);
    }
}
