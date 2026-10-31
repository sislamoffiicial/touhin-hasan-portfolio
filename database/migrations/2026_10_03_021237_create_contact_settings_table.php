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
        Schema::create('contact_settings', function (Blueprint $table) {
            $table->id();

$table->string('location')->default('Dhaka, Bangladesh');
$table->string('email')->default('touhinhasan@gmail.com');

$table->string('studio_label')->default('Studio');
$table->text('studio_address');
$table->string('phone')->nullable();

$table->text('google_map_embed_url')->nullable();

$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_settings');
    }
};
