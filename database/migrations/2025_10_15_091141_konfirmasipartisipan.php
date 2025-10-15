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
        Schema::create("konfirmasipartisipan", function(Blueprint $table){
            $table->id("id_konfirmasipartisipan");
            $table->foreignId("idagenda")->constrained("agenda", "ID_agenda");
            $table->foreignId("idpengguna")->constrained("users", "id");
            $table->integer("status");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("konfirmasipartisipan");
    }
};
