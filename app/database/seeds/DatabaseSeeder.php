<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

//        Brand::truncate();
//        Product::truncate();
		 $this->call('BrandsTableSeeder');
        $this->call('ProductsTableSeeder');
	}

}
