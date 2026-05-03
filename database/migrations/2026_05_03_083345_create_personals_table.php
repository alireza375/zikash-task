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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile_number');

            $table->enum('gender', ['male', 'female', 'other']);

            $table->date('date_of_birth');

            $table->text('present_address');
            $table->text('permanent_address');

            // Multi select hobby (store as JSON)
            $table->json('hobby')->nullable();

            // Education (single select)
            $table->enum('education', ['ssc', 'hsc', 'bsc', 'msc']);

            // Office time
            $table->time('office_start_time');
            $table->time('office_end_time');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
