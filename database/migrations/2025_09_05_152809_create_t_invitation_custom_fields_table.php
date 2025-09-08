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
        Schema::create('t_invitation_custom_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->constrained('t_invitations')->onDelete('cascade');
            $table->foreignId('custoim_field_id')->contrainted('m_custom_fields')->onDelete('cascade');
            $table->string('field_value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_invitation_custom_fields');
    }
};
