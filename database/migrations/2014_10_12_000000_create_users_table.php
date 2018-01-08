<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('mobileno')->unique()->nullable();
            $table->string('username')->nullable()->unique();
            $table->enum('role',['Student','Parent','Teacher','Leader'])->default('Teacher');
            $table->string('password')->nullable();
            $table->string('api_token')->unique()->nullable();
            $table->timestamp('activated_at')->nullable();
            $table->string('avatar')->nullable();
            $table->string('activation_token')->unique()->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
