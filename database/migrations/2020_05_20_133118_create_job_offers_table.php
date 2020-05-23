<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOffersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('job_offers', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->text('description');
			$table->enum('status', [App\JobOffer::ACTIVE, App\JobOffer::PAUSED, App\JobOffer::INACTIVE])->default(App\JobOffer::ACTIVE);
			$table->string('slug');
			$table->date('expires_at')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('job_offers');
	}
}
