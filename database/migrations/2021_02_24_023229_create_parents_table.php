<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('lastname',45);
            $table->unsignedInteger('cardtype_id');
            $table->string('email',110)->unique();
            $table->string('phone');
            $table->integer('fixedphone');
            $table->integer('cardid')->unique();
            $table->text('parent',100);
            //$table->timestamp('date_of_birth');
            $table->enum('gender', ['male', 'female']);
            $table->integer('state')->default(1);
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
        Schema::dropIfExists('parents');
    }
}
