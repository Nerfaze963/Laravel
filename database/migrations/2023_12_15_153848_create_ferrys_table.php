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
        Schema::disableForeignKeyConstraints();
        Schema::create('ferrys', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('photo');
            $table->string('longueur');
            $table->string('largeur');
            $table->string('vitesse');
            $table->timestamps();
            
        });
    }



    

    /**
     * v  Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ferrys');
    }
};
