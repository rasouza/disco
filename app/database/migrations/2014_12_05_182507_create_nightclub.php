<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNightclub extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nightclubs', function($table) {
			$table->increments('id');
			$table->string('name');
        	$table->string('address');
        	$table->decimal('entrance', 5, 2);
        	$table->decimal('ratioMF', 2, 2);
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
		Schema::drop('nightclubs');
	}

}
