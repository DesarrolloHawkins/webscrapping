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
        Schema::create('web_scrapping', function (Blueprint $table) {
            $table->id();
            $table->string('compania');
            $table->date('fecha');
            $table->date('fecha_ida');
            $table->date('fecha_vuelta');
            $table->string('numero_personas');
            $table->double('precio', 2, 0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
