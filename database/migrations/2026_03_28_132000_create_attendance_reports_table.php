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
        Schema::create('attendance_reports', function (Blueprint $table) {
            $table->id();

            $table->foreignId('employee_id')->constrained()->onDelete('cascade');

            $table->integer('week_hour')->default(0);
            $table->integer('total_month_hour')->default(0);
            $table->integer('overtimes')->default(0);

            $table->integer('total_present')->default(0);
            $table->integer('total_absent')->default(0);
            $table->integer('total_lates')->default(0);
            $table->integer('total_leave')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_reports');
    }
};
