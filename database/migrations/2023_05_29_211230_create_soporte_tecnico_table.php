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
        Schema::create('soporteTecnico', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 120);
            $table->string('email', 120);
            $table->string('telefono', 9);
            $table->date('fecha');
            $table->text('error');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soporteTecnico');
    }
};
