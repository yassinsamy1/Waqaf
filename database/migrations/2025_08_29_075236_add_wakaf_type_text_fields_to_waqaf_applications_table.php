<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('waqaf_applications', function (Blueprint $table) {
            $table->text('wakaf_khas_detail')->nullable()->after('jenis_wakaf');
            $table->text('wakaf_saraan_detail')->nullable()->after('wakaf_khas_detail');
            $table->text('wakaf_am_detail')->nullable()->after('wakaf_saraan_detail');
        });
    }

    public function down(): void
    {
        Schema::table('waqaf_applications', function (Blueprint $table) {
            $table->dropColumn(['wakaf_khas_detail', 'wakaf_saraan_detail', 'wakaf_am_detail']);
        });
    }
};
