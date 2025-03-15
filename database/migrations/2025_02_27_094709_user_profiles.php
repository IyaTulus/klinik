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
        if (!Schema::hasTable('user_profiles')) {
            Schema::create('user_profiles', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->uuid('user_id'); 
                $table->enum('gender', ['Male', 'Female']);
                $table->text('addres')->nullable();
                $table->date('birth')->nullable();
                $table->string('phone')->nullable();
                $table->string('religion');
                $table->timestamps();
            
                // Menambahkan constraint foreign key dengan tipe uuid
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
