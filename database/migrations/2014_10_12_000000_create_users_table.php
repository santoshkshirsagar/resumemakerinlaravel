<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('mobile', 100)->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('language')->nullable();
            $table->text('education')->nullable();
            $table->text('experience')->nullable();
            $table->timestamp('dob')->nullable();
            $table->text('address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('objective')->nullable();
            $table->text('skills')->nullable();
            $table->text('tech_skills')->nullable();
            $table->text('activities')->nullable();
            $table->text('extra')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->enum('role', ['Admin', 'User'])->default('User');
            

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
