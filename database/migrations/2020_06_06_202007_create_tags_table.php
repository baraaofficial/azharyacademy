<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagsTable extends Migration {

	public function up()
	{
		Schema::create('tags', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
		});
	}

	public function down()
	{
		Schema::drop('tags');
	}
}
