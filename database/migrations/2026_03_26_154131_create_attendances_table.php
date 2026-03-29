<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
           $table->id();
           $table->foreignId('user_id')->constrained()->onDelete('cascade'); // link to users
           $table->timestamp('check_in')->nullable();
           $table->timestamp('check_out')->nullable();
           $table->decimal('work_hour', 5, 2)->default(0);
           $table->string('reason')->nullable();
           $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};