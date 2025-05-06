<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Seller;
use App\Models\User;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i=0; $i<10; $i++) {    // truly randomize sellers
            Product::factory()->count(5)->create([
                'user_id' => User::pluck('id')->random()
            ]);
        }
    }
}
