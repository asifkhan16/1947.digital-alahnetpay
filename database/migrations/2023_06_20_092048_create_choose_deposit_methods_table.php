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
        Schema::create('choose_deposit_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id')->onDelete('cascade');
            $table->foreignId('wallet_id')->nullable()->constrained('wallets','id')->onDelete('SET NULL');
            $table->foreignId('deposit_method_id')->constrained('deposit_methods','id');
            $table->double('amount')->default(0.0);
            $table->double('fee')->default(0.0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choose_deposit_methods');
    }
};
