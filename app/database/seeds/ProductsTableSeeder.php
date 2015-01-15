<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
        Product::create([
            "name" => "All Berry Bang",
            "energy_kj" => 233,
            "energy_cal" => 56,
            "protein" => 1.5,
            "fat_total" => 1.1,
            "fat_sat" => 0.5,
            "carb_total" => 10.1,
            "carb_sugars" => 9.7,
            "fibre" => 0.5,
            "sodium" => 8,
            "brand_id" => 1,
        ]);

        Product::create([
            "name" => "Banana Buzz",
            "energy_kj" => 315,
            "energy_cal" => 75,
            "protein" => 3.3,
            "fat_total" => 1.1,
            "fat_sat" => 0.6,
            "carb_total" => 12.6,
            "carb_sugars" => 11.8,
            "fibre" => 0.8,
            "sodium" => 26,
            "brand_id" => 1,
        ]);

        Product::create([
            "name" => "Wondermelon",
            "energy_kj" => 132,
            "energy_cal" => 32,
            "protein" => 3.0,
            "fat_total" => 0.2,
            "fat_sat" => 0.1,
            "carb_total" => 4.1,
            "carb_sugars" => 3.1,
            "fibre" => 1.0,
            "sodium" => 31,
            "brand_id" => 1,
        ]);


        Product::create([
            "name" => "Brekkie to go go",
            "energy_kj" => 430,
            "energy_cal" => 103,
            "protein" => 4.5,
            "fat_total" => 2.3,
            "fat_sat" => 0.9,
            "carb_total" => 16.3,
            "carb_sugars" => 12.5,
            "fibre" => 1.3,
            "sodium" => 33,
            "brand_id" => 1,
        ]);

        Product::create([
            "name" => "Weekend Warrior",
            "energy_kj" => 308,
            "energy_cal" => 74,
            "protein" => 4.7,
            "fat_total" => 1.0,
            "fat_sat" => 0.3,
            "carb_total" => 10.7,
            "carb_sugars" => 7.0,
            "fibre" => 1.2,
            "sodium" => 2,
            "brand_id" => 1,
        ]);


//		$faker = Faker::create();
//
//		foreach(range(1, 10) as $index)
//		{
//			Product::create([
//
//			]);
//		}
	}

}