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
        Schema::create("agenda", function(Blueprint $table){
            $table->id("ID_agenda");
            $table->string("nama_agenda");
            $table->foreignId("id_penyelenggara")->constrained("users","id");
            $table->string("lokasi");
            $table->dateTime("waktu");
            $table->integer("status");
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("agenda");
    }
};
