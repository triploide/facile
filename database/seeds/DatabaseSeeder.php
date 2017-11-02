<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        \DB::table('categories')->insert([
            ['name' => 'Jardín'],
            ['name' => 'Bazar'],
            ['name' => 'Camping']
        ]);

        \DB::table('properties')->insert([
            ['name' => 'Envío gratuito'],
            ['name' => 'Cuotas'],
            ['name' => 'Descuento en efectivo']
        ]);

        \DB::table('products')->insert([
            [
                'name' => 'Pala de jardín',
                'cost' => 120,
                'profit_margin' => 30,
                'category_id' => 1,
            ],
            [
                'name' => 'Tijeras de podar',
                'cost' => 250,
                'profit_margin' => 40,
                'category_id' => 1,
            ],
            [
                'name' => 'Regadera',
                'cost' => 80,
                'profit_margin' => 50,
                'category_id' => 1,
            ],
            [
                'name' => 'Sartén',
                'cost' => 430,
                'profit_margin' => 50,
                'category_id' => 2,
            ],
            [
                'name' => 'Cuchara de madera',
                'cost' => 80,
                'profit_margin' => 30,
                'category_id' => 2,
            ],
            [
                'name' => 'Colador',
                'cost' => 60,
                'profit_margin' => 70,
                'category_id' => 2,
            ],
            [
                'name' => 'Carpa',
                'cost' => 3500,
                'profit_margin' => 35,
                'category_id' => 3,
            ],
            [
                'name' => 'Conservadora',
                'cost' => 650,
                'profit_margin' => 25,
                'category_id' => 3,
            ],
        ]);

        \DB::table('product_property')->insert([
            ['product_id' => 1, 'property_id' => 1],
            ['product_id' => 1, 'property_id' => 2],
            ['product_id' => 1, 'property_id' => 3],
            ['product_id' => 2, 'property_id' => 2],
        ]);


    }
}
