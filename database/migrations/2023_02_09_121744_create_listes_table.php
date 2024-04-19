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
        Schema::create('listes', function (Blueprint $table) {
            $table->id();
            $table->string("Objet");
            $table->string("Nom");
            $table->string("Prenom");
            $table->foreignId("id_Service")->constrained("services")
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->string("Avec");
            $table->datetime("Debut");
            $table->datetime("Fin");
            $table->string("Rapport");
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
        Schema::dropIfExists('listes');
    }
};
