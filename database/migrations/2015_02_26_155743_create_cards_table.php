<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->integer('thedie_id');
            $table->integer('set_id');
            $table->integer('energytype_id');
            $table->string('subtitle');
            $table->integer('maxdie');
            $table->integer('cost');
            $table->string('text');
            $table->string('burst1');
            $table->string('burst2');
            $table->string('global');
            $table->integer('number');
            $table->string('special');
            $table->integer('affiliation_id');
            $table->integer('rarity_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cards');
	}

}
