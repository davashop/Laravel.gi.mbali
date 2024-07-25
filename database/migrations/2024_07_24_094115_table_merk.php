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
        schema::create("master.merk", function(blueprint $table){
            $table->id();
            $table->string("nama");
            $table->text("keterangan");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropifexists("master.merk");
    }
};
