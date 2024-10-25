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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('alumno')->nullable()->references('id')->on('alumnos');
            $table->foreignId('profesor')->nullable()->references('id')->on('profesors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['alumno']);
            $table->dropForeign(['profesor']);
            $table->dropColumn('alumno');
            $table->dropColumn('profesor');
        });
    }
};
