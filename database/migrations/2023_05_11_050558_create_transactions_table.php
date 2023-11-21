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
            $table->integer('user_id')->unsigned()->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->enum('type', ['1', '2'])->nullable()->comment('1-deposit, 2-withdraw');
            $table->enum('payment_method', ['1', '2', '3', '4', '5', '6'])->nullable()->comment('1-Cash, 2-Credit Card, 3-Cheque, 4-Bank Transfer, 5-Bkash, 6-Nagad');
            $table->string('cc_name', 100)->nullable();
            $table->string('cc_number', 100)->nullable();
            $table->string('cc_type', 100)->nullable();
            $table->string('cc_month', 100)->nullable();
            $table->string('cc_year', 100)->nullable();
            $table->string('cvc', 100)->nullable();
            $table->string('reference', 100)->nullable();
            $table->string('attachment', 100)->nullable();
            $table->integer('received_by')->unsigned()->nullable();
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
