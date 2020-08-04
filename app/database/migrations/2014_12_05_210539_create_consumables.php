<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drinks', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('musics', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('publics', function($table) {
			$table->increments('id');
			$table->string('name');
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
		Schema::drop('drinks');
		Schema::drop('musics');
		Schema::drop('publics');
	}

}
