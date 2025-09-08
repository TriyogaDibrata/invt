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
        Schema::create('m_custom_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_type_id')->constrained('m_invitation_types')->onDelete('cascade');
            $table->string('field_name');
            $table->string('field_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_custom_fields');
    }
};
