<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_houses', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 30);
            $table->string('indirizzo', 70);
            $table->string('tel', 20);
            $table->string('tipologia', 30);
            $table->string('mail', 100);
            $table->text('social')->nullable();
            $table->string('logo', 255)->unique()->nullable();
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
        Schema::dropIfExists('cars_houses');
    }
};
