<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            DB::table('products')->insert([
                'code' => $faker->postcode(),
                'name' => $faker->name(),
                'price' => $faker->numberBetween($min = 500, $max = 8000),
                'image' => 'https://media.sproutsocial.com/uploads/2017/02/10x-featured-social-media-image-size.png'
            ]);
        }
    }
}
