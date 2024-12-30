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
    Schema::create('checkouts', function (Blueprint $table) {
        $table->id();
        $table->string('first_name');
        $table->string('last_name');
        $table->string('email');
        $table->string('address');
        $table->string('city');
        $table->string('postal_code');
        $table->string('country');
        $table->string('region_state');
        $table->integer('adults');
        $table->integer('children');
        $table->string('room');
        $table->text('extra_services')->nullable();
        $table->timestamps();
    });
}

        

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};