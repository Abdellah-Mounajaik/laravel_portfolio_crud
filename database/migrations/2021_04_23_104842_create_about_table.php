<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->string('image', 100);
            $table->string('titre', 50);
            $table->string('soustitre', 50);
            $table->string('birthday', 50);
            $table->string('website', 50);
            $table->integer('phone');
            $table->string('city', 50);
            $table->integer('age');
            $table->string('degree', 30);
            $table->string('PhEmailone', 50)->nullable();
            $table->string('Freelance', 30);
            $table->id();
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
        Schema::dropIfExists('about');
    }
}
