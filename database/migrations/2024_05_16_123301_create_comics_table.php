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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('title', 500);
            $table->string('thumb');
            $table->decimal('price', 5,2);
            $table->decimal('price', 5,2);
            $table->string('series', 50);
            $table->date('sale_date');
            $table->string('type', 50);
            $table->string('artist', 1000);
            $table->string('writers', 1000);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
