<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('waqaf_applications', function (Blueprint $table) {
            $table->id();
            
            // Checklist fields
            $table->boolean('check_borang')->default(false);
            $table->boolean('check_ic')->default(false);
            $table->boolean('check_ssm')->default(false);
            $table->boolean('check_hakmilik')->default(false);
            $table->boolean('check_cukai')->default(false);
            $table->boolean('check_taksiran')->default(false);
            $table->boolean('check_akuan')->default(false);
            $table->boolean('check_pelan')->default(false);
            
            // Confirmer details
            $table->string('pengesah_1_nama')->nullable();
            $table->string('pengesah_1_tel')->nullable();
            $table->string('pengesah_2_nama')->nullable();
            $table->string('pengesah_2_tel')->nullable();
            
            // Company details
            $table->string('no_syarikat')->nullable();
            $table->text('alamat')->nullable();
            $table->date('tarikh_lafaz')->nullable();
            
            // Wakaf details
            $table->enum('jenis_wakaf', ['wakaf_khas', 'wakaf_saraan', 'wakaf_am'])->nullable();
            $table->text('tujuan')->nullable();
            
            // Land location
            $table->string('mukim')->nullable();
            $table->string('daerah')->nullable();
            $table->string('hakmilik')->nullable();
            $table->string('no_lot')->nullable();
            
            // Land measurements
            $table->string('luas_tanah')->nullable();
            $table->string('bhg_diwakaf')->nullable();
            $table->string('luas_diwakaf')->nullable();
            $table->string('baki_tanah')->nullable();
            
            // Directors
            $table->string('pengarah_1_nama')->nullable();
            $table->string('pengarah_1_ic')->nullable();
            $table->date('pengarah_1_tarikh')->nullable();
            $table->string('pengarah_2_nama')->nullable();
            $table->string('pengarah_2_ic')->nullable();
            $table->date('pengarah_2_tarikh')->nullable();
            
            // Witnesses
            $table->string('saksi_1_nama')->nullable();
            $table->string('saksi_1_ic')->nullable();
            $table->date('saksi_1_tarikh')->nullable();
            $table->string('saksi_2_nama')->nullable();
            $table->string('saksi_2_ic')->nullable();
            $table->date('saksi_2_tarikh')->nullable();
            
            // Judge/Commissioner
            $table->string('hakim_nama')->nullable();
            $table->string('hakim_ic')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('waqaf_applications');
    }
};
