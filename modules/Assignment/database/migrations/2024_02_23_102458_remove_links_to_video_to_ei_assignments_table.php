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
        Schema::table('ei_assignments', function (Blueprint $table) {
            $table->removeColumn('links_to_video');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ei_assignments', function (Blueprint $table) {
            $table->json('links_to_video')->default('[]');
        });
    }
};
