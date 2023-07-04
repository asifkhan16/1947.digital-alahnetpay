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
        Schema::create('hold_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hold_id')->constrained('holds','id');
            $table->foreignId('transaction_id')->constrained('transactions','id');
            $table->double('amount');
            $table->tinyInteger('status')->comment('1 => Active, 2 => Release');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hold_transactions');
    }
};
