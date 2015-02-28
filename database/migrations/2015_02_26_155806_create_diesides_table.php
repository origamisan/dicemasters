<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiesidesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diesides', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->integer('thedie_id');
            $table->string('sidetype');
            $table->integer('energytype_id');
            $table->integer('energyval');
            $table->integer('sidenum');
            $table->string('burst');
            $table->integer('fielding');
            $table->integer('attack');
            $table->integer('defense');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('diesides');
	}

}
