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
        Schema::create('allusers', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('fathername',30);
            $table->integer('age');
            $table->string('email',30)->unique();
            $table->string('address',30);
            $table->string('country',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allusers');
    }
};
