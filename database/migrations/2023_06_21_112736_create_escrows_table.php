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
            $table->foreignId('user_id')->constrained('users','id');
            $table->foreignId('seller_id')->constrained('users', 'id');
            $table->foreignId('buyer_id')->constrained('users', 'id');
            $table->foreignId('seller_wallet_id')->constrained('wallets','id');
            $table->foreignId('buyer_wallet_id')->constrained('wallets','id');
            $table->double('amount');
            $table->string('description')->nullable();
            $table->tinyInteger('request_type')->comment('1 => clients (buyer) request to the user(seller) for his work. | 2 => The user (seller) request to do work for clients (buyer) ');
            $table->tinyInteger('status')->comment('0 => pending | 1 => accept | 2 => cancel | 3 => release');
            $table->tinyInteger('role')->comment('1 => Creater, 2 => Reciver');
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
