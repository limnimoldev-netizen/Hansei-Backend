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
    Schema::create('leaves', function (Blueprint $table) {
        $table->id();
        // Links to the 'id' on the 'users' table
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('leave_type'); 
        $table->text('reason')->nullable();
        $table->date('start_date');
        $table->date('end_date');
        $table->decimal('total_days', 8, 1); 
        $table->string('status')->default('pending'); 
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
