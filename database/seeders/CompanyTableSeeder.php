<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use Carbon\Carbon;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->insert([
        	[

        	'company_name' => 'company A',
        	'address' => 'Metro Manila',
        	'email'=> 'companyA@gmail.com',
        	'contact_number' => '+639123123',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],[

        	'company_name' => 'company B',
        	'address' => 'Metro Manila',
        	'email'=> 'companyB@gmail.com',
        	'contact_number' => '+639123122',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')


        ],[

            'company_name' => 'company C',
            'address' => 'Metro Manila',
            'email'=> 'companyC@gmail.com',
            'contact_number' => '+639123122',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')


        ],[

            'company_name' => 'company D',
            'address' => 'Metro Manila',
            'email'=> 'companyD@gmail.com',
            'contact_number' => '+639123126',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')


        ],[

            'company_name' => 'company E',
            'address' => 'Metro Manila',
            'email'=> 'companyE@gmail.com',
            'contact_number' => '+639123124',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')


        ]]);
    }
}
