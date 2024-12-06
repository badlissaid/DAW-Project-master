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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstName');
            $table->string('email');
            $table->string('password');
            $table->timestamp('phone');
            $table->string('photo');
            $table->string('domaine');
        });


    }

    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
