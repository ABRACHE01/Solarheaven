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
        Schema::create('services', function (Blueprint $table) {
            $table->id(); // id
            $table->string('name'); // varchar
            $table->text('description'); // text
            $table->decimal('price', 8, 2); // 8 digits, 2 decimals
            $table->unsignedBigInteger('admin_id'); // admin_id is a foreign key
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade'); // admin_id is a foreign key
            $table->timestamps(); // created_at, updated_at
                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
