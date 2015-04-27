<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseCyberpunkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_cyberpunk', function (Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cyberpunk_id')->unsigned()->index();
			$table->foreign('cyberpunk_id')->references('id')
				->on('cyberpunks')
				->onDelete('cascade')->onUpdate('cascade');

			$table->integer('course_id')->unsigned()->index();
			$table->foreign('course_id')->references('id')
				->on('courses')
				->onDelete('restrict')->onUpdate('cascade');

			$table->unique(['cyberpunk_id', 'course_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_cyberpunk');
	}

}
