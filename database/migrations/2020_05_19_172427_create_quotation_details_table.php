<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationDetailsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('quotation_details', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('quotation_id');
			$table->foreign('quotation_id')->references('id')->on('quotations');
			$table->string('description');
			$table->float('price', 8, 2);
			$table->integer('qty');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('quotation_details');
	}
}
