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
            $table->foreignId('employee_id');
            $table->String('leavesType');
            $table->String('reason');
            $table->date('sartDay');
            $table->date('endDay');
            $table->date('totalDay');
            $table->enum('status',['Pedding', 'Approve', 'Reject']);
            $table->enum('action', ['Approve', 'Reject']);
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
