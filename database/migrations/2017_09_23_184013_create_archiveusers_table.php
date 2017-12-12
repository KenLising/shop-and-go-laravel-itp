<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchiveusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archiveusers', function (Blueprint $table) {
            $table->integer('id');
            $table->string('login_type', 100)->default('regular');
            $table->string('social_id', 100)->nullable();
            $table->string('lastname', 100);
            $table->string('firstname', 100);
            $table->integer('province_id')->unsigned();
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('mobilenumber', 20)->nullable();
            $table->string('avatar')->default('noavatar.jpg');
            $table->boolean('verifyStatus')->default(false);
            $table->string('verifyToken')->nullable();
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
        Schema::dropIfExists('archiveusers');
    }
}
