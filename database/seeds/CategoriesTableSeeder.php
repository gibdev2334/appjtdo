<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        
        Category::insert([
            [
                'name' => 'Touristique',
                'slug' => 'touriste',
                'created_at' => $now,
                'updated_at' => $now,
            ],

             [
                'name' => 'Scolaire',
                'slug' => 'scolaire',
                'created_at' => $now,
                'updated_at' => $now,
            ],

             [
                'name' => 'Pelerinage',
                'slug' => 'pelerinage',
                'created_at' => $now,
                'updated_at' => $now,
            ],

             [
                'name' => 'Normale',
                'slug' => 'normale',
                'created_at' => $now,
                'updated_at' => $now,
            ],


        ]);
    }
}
