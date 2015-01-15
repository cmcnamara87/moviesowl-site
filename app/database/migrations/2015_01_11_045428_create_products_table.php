<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->float('energy_kj');
            $table->float('energy_cal');
            $table->float('protein');
            $table->float('fat_total');
            $table->float('fat_sat');
            $table->float('carb_total');
            $table->float('carb_sugars');
            $table->float('fibre');
            $table->float('sodium');
            $table->integer('brand_id')->unsigned();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
