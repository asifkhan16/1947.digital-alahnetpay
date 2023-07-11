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
        Schema::create('business_kyc_verfications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('merchant_id')->constrained('merchants', 'id');
            $table->string('document_one')->nullable();
            $table->string('document_two')->nullable();
            $table->tinyInteger('status')->comment('0 => pending | 1 => approved | 2 => reject');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_kyc_verfications');
    }
};
