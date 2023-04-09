<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointment_id')->constrained('appointments')->onDelete('cascade');
            $table->unsignedDecimal('amount', 8, 2);
            $table->unsignedDecimal('extra_charges', 8, 2)->nullable();
            $table->dateTime('paid_at');
            $table->text('note')->nullable();
            $table->enum('method', ['cash', 'card']);
            $table->enum('status', ['pending','paid','refunded','failed'])->default('pending');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
