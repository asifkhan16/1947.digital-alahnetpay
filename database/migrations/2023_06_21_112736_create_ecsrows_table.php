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
        Schema::create('escrows', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('creator_id')->constrained('users', 'id');
            $table->foreignId('receiver_id')->constrained('users', 'id');
            $table->foreignId('seller_id')->constrained('users', 'id');
            $table->foreignId('buyer_id')->constrained('users', 'id');
            $table->foreignId('seller_wallet_id')->constrained('wallets','id');
            $table->foreignId('buyer_wallet_id')->constrained('wallets','id');
            $table->double('amount');
            $table->string('description')->nullable();
            $table->tinyInteger('type')->comment('1 => seller | 2 => buyer ');
            $table->tinyInteger('status')->comment('0 => pending | 1 => accept | 2 => cancel | 3 => release');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecsrows');
    }
};
