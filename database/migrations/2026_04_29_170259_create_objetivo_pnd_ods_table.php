<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('objetivo_pnd_ods', function (Blueprint $table) {
        $table->id();

        $table->foreignId('objetivo_pnd_id')
              ->constrained('objetivo_pnds')
              ->onDelete('cascade');

        $table->foreignId('ods_id')
              ->constrained('ods')
              ->onDelete('cascade');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objetivo_pnd_ods');
    }
};
