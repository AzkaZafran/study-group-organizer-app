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
        Schema::dropIfExists('catatanagenda');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create("catatanagenda", function(Blueprint $table){
            $table->id("catatanagenda");
            $table->foreignId("idagenda")->constrained("agenda", "ID_agenda");
            $table->foreignId("idcatatan")->constrained("catatan", "idcatatan");
        });
    }
};
