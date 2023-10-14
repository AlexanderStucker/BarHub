<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('drinks')->insert([
            ['name' => 'Tequila Sunrise', 'price' => 10.00, 'imageurl' => 'https://images.unsplash.com/photo-1620393570203-ebb4ba12c05d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1965&q=80'],
            ['name' => 'Mojito', 'price' => 9.00, 'imageurl' => 'https://images.unsplash.com/photo-1546171753-97d7676e4602?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80'],
            ['name' => 'Aperol', 'price' => 7.00, 'imageurl' => 'https://images.unsplash.com/photo-1590271379103-fb6a7d4ad410?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80'],
            ['name' => 'Whiskey', 'price' => 15.00, 'imageurl' => 'https://images.unsplash.com/photo-1615887625746-f3d2aa27e048?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80'],
            ['name' => 'Martini', 'price' => 15.00, 'imageurl' => 'https://images.unsplash.com/photo-1575650772417-e6b418b0d106?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80'],
            ['name' => 'Moscow Mule', 'price' => 14.00, 'imageurl' => 'https://images.unsplash.com/photo-1598989995965-76ffb0f161dd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1976&q=80'],
            
            
            //['name' => 'Aperol', 'price' => 7.00, 'imageurl' => ''],
            // Add more drinks as needed
        ]);
    }
}
