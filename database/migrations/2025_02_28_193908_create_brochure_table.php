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
        Schema::create('brochure', function (Blueprint $table) {
            $table->id();
            $table->string('file_path');
            $table->unsignedBigInteger('download_count')->default(0)->after('file_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('brochures', function (Blueprint $table) {
            $table->dropColumn('download_count');
        });
    }
};
