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
        Schema::create('employees_table', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->id(); // Primary key
            $table->string('name'); // Employee's name
            $table->string('role'); // Employee's role or job title
            $table->string('email')->unique(); // Employee's email address
            $table->string('phone')->nullable(); // Employee's phone number
            $table->string('department')->nullable(); // Department the employee belongs to
            $table->date('hire_date')->nullable(); // Date the employee was hired
            $table->decimal('salary', 8, 2)->nullable(); // Employee's salary
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees_tablen');
    }
};
