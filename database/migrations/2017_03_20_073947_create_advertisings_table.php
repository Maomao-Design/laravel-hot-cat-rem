<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvertisingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advertisings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->nullable();
			$table->integer('category_id')->default(0);
			$table->string('image')->nullable();
			$table->string('description')->nullable();
			$table->string('body')->nullable();
			$table->string('link')->nullable();
			$table->string('other')->nullable();
			$table->timestamps();
			$table->integer('author_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('advertisings');
	}

}
