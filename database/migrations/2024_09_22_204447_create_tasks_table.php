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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // id de la tarea (primary key)
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // id del usuario, foreign key
            $table->string('title'); // título de la tarea
            $table->text('description')->nullable(); // descripción de la tarea (puede ser nula)
            $table->enum('status', ['pendiente', 'completada'])->default('pendiente'); // estado de la tarea
            $table->enum('priority', ['baja', 'media', 'alta'])->default('media'); // prioridad de la tarea
            $table->dateTime('due_date')->nullable(); // fecha de vencimiento
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
