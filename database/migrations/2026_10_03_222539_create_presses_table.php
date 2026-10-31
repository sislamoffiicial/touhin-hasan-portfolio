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
        Schema::create('presses', function (Blueprint $table) {
           $table->id();

$table->string('publication_name');
$table->unsignedSmallInteger('year')->nullable();

$table->string('image')->nullable();

$table->text('press_text');

$table->unsignedInteger('sort_order')->default(0);
$table->boolean('is_published')->default(true);

$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presses');
    }
};
