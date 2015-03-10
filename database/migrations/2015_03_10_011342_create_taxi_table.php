<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taxi', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('phone');
			$table->string('cityprice');
			$table->string('outcityprice');
			$table->string('simple');
			$table->string('landing');
			$table->string('min');
			$table->text('info');
			$table->text('contact');
			$table->text('addcontact');
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
		Schema::drop('taxi');
	}

}
