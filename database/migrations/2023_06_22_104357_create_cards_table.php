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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id');
            $table->foreignId('wallet_id')->constrained('wallets','id');
            $table->string('card_number');
            $table->tinyInteger('cvc');
            $table->date('issue_data');
            $table->date('expiry_date');
            $table->tinyInteger('is_activated')->default(0)->comment("0 > not activated | 1 => Activated");
            $table->tinyInteger('is_freeze')->default(0)->comment("0 > not Freeze | 1 => Freezed");
            $table->tinyInteger('status')->default(0)->comment("0 > requested | 1 => Approved | 2 => Cancelled");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
