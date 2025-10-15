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
        Schema::create("daftarpermintaanteman", function(Blueprint $table){
            $table->id("id_permintaan");
            $table->foreignId("idpeminta")->constrained("users","id");
            $table->foreignId("idtarget")->constrained("users", "id");
            $table->integer("status");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("daftarpermintaanteman");
    }
};
