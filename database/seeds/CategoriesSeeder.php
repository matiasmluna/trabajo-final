<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name1 = 'Congelados';
        DB::table('categories')->insert([
            'name' => $name1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'slug' => Str::slug($name1, '-')
        ]);

        $name2 = 'Frutas y vegetales';
        DB::table('categories')->insert([
            'name' => $name2,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'slug' => Str::slug($name2, '-')
        ]);

        $name3 = 'Electrodomésticos';
        DB::table('categories')->insert([
            'name' => $name3,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'slug' => Str::slug($name3, '-')
        ]);

        $name4 = 'Limpieza';
        DB::table('categories')->insert([
            'name' => $name4,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'slug' => Str::slug($name4, '-')
        ]);
    }
}
