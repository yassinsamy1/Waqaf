<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('waqaf_applications', function (Blueprint $table) {
            $table->string('tarikh_qabul')->nullable();
            $table->string('tarikh_hijri')->nullable();
            $table->string('tahun_qabul')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('waqaf_applications', function (Blueprint $table) {
            $table->dropColumn(['tarikh_qabul', 'tarikh_hijri', 'tahun_qabul']);
        });
    }
};
