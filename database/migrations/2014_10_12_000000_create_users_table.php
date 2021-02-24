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
            $table->string('lastname');
            $table->bigInteger('cardid')->unique();
            $table->timestamp('date_of_birth')->useCurrent();
            $table->integer('state');
            $table->enum('gender', ['male', 'female','other']);
            $table->unsignedInteger('cardtype_id');
            $table->enum('factorRh', ['O negativo','O positivo','A negativo','A positivo','B negativo','B positivo','AB negativo','AB positivo']);
            // $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            //$table->string('password');
            //$table->rememberToken();
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
