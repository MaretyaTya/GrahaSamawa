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
        Schema::table('brochure', function (Blueprint $table) {
            $table->unsignedBigInteger('download_count')->default(0)->after('file_path'); // Menyimpan jumlah unduhan
            $table->boolean('is_active')->default(true)->after('download_count'); // Status aktif atau non-aktif
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('brochure', function (Blueprint $table) {
            $table->dropColumn(['is_active']);
        });
    }
};
