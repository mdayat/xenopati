<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('emp_salary', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->integer('month')->nullable();
            $table->integer('year')->nullable();
            $table->double('basic_salary')->nullable();
            $table->double('bonus')->nullable();
            $table->double('bpjs')->nullable();
            $table->double('jp')->nullable();
            $table->double('loan')->nullable();
            $table->double('total_salary')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('employee_id')->references('id')->on('employee')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('emp_salary');
    }
};
