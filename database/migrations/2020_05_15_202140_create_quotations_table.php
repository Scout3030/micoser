<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('quotations', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('client_id');
			$table->foreign('client_id')->references('id')->on('clients');
			$table->string('title');
			$table->text('total');
			$table->string('additional_information');
			$table->string('time');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('quotations');
	}
}
