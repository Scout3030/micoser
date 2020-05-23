<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('roles', function (Blueprint $table) {
			$table->id();
			$table->string('name')->comment('Nombre del rol de usuario');
			$table->text('description');
			$table->timestamps();
		});

		Schema::create('users', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('role_id')->default(\App\Role::CLIENT);
			$table->foreign('role_id')->references('id')->on('roles')->default(\App\Role::CLIENT);
			$table->string('name');
			$table->string('email')->unique();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password');
			$table->string('picture')->default('default_user.png');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
		Schema::dropIfExists('roles');
	}
}
