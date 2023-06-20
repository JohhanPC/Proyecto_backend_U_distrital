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
        Schema::create('users_project', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("last_name");
            $table->enum('id_type',['CC','DE','TI']);
            $table->string("identification_number");
            $table->string("phone_number");
            $table->string('email')->unique();
            $table->string("profession");
            $table->enum('role',['admin','visualizador','ejecutor','invitado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_project');
    }
};
