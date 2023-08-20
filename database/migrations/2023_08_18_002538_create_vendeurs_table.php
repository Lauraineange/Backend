<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendeurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomVendeur');
            $table->string('emailVendeur');
            $table->string('codePremiumPar');
            $table->string('codeVendeur');
            $table->string('telVendeur');
            $table->string('paysVendeur');
            $table->string('villeVendeur');
            $table->string('quartierVendeur');
            $table->string('nomBoutique');
            $table->string('lieuBoutique');
            $table->string('statusVendeur');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendeurs');
    }
};
