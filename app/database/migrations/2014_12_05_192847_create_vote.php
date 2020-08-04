<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVote extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votes', function($table) {
			$table->increments('id');
			$table->integer('nightclub_id');
			$table->integer('drink_id')->nullable();
			$table->integer('music_id')->nullable();
			$table->integer('public_id')->nullable();
        	$table->string('ratioMF')->nullable();
        	$table->integer('grade');
        	$table->timestamps();
		});

		Schema::create('comments', function($table) {
			$table->increments('id');
			$table->integer('vote_id');
			$table->string('text');
        	$table->integer('grade');
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
		Schema::drop('votes');
		Schema::drop('comments');
	}

}
