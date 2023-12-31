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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->uuid('transaction_unqiue_id')->unique();
            $table->foreignId('user_id')->constrained('users','id');
            $table->foreignId('wallet_id')->constrained('wallets','id');
            $table->string('description')->nullable();
            $table->double('credit')->default(0.0);
            $table->double('debit')->default(0.0);
            $table->double('charges');
            $table->tinyInteger('status')->default(0)->comment("0 => pending | 1 => completed |  2 => cancelled | 3 => hold" );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
