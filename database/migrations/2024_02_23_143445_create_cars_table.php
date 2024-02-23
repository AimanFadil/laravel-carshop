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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('modello', 30);
            $table->text('descrizione')->nullable();
            $table->integer('prezzo');
            $table->string('alimentazione', 20);
            $table->year('anno');
            $table->string('numero_telaio', 20)->unique();
            $table->string('trazione', 20)->nullable();
            $table->tinyInteger('porte')->nullable();
            $table->string('carrozzeria', 20)->nullable();
            $table->integer('cavalli');
            $table->integer('cilindrata');
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
        Schema::dropIfExists('cars');
    }
};
