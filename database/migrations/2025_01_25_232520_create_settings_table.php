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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('header_image')->nullable();
            $table->text('promoteur_message')->nullable();
            $table->string('flyer_image')->nullable();
            $table->date('rentree_date')->nullable();
            $table->string('header_image_extension')->nullable();
            $table->string('flyer_image_extension')->nullable();
            $table->string('logo_image')->nullable();
            $table->string('logo_image_extension')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
