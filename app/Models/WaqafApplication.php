<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaqafApplication extends Model
{
    use HasFactory;

    protected $fillable = [
   
        'check_borang', 'check_ic', 'check_ssm', 'check_hakmilik',
        'check_cukai', 'check_taksiran', 'check_akuan', 'check_pelan',
        
      
        'pengesah_1_nama', 'pengesah_1_tel', 'pengesah_2_nama', 'pengesah_2_tel',

        'no_syarikat', 'alamat', 'tarikh_lafaz', 'tarikh_qabul', 'tarikh_hijri', 'tahun_qabul',
        
   
        'jenis_wakaf', 'tujuan', 'wakaf_khas_detail', 'wakaf_saraan_detail', 'wakaf_am_detail',
        
     
        'mukim', 'daerah', 'hakmilik', 'no_lot',
        
       
        'luas_tanah', 'bhg_diwakaf', 'luas_diwakaf', 'baki_tanah',
        
      
        'pengarah_1_nama', 'pengarah_1_ic', 'pengarah_1_tarikh',
        'pengarah_2_nama', 'pengarah_2_ic', 'pengarah_2_tarikh',

        'saksi_1_nama', 'saksi_1_ic', 'saksi_1_tarikh',
        'saksi_2_nama', 'saksi_2_ic', 'saksi_2_tarikh',

        'hakim_nama', 'hakim_ic'
    ];

    protected $casts = [
        'check_borang' => 'boolean',
        'check_ic' => 'boolean',
        'check_ssm' => 'boolean',
        'check_hakmilik' => 'boolean',
        'check_cukai' => 'boolean',
        'check_taksiran' => 'boolean',
        'check_akuan' => 'boolean',
        'check_pelan' => 'boolean',
        'tarikh_lafaz' => 'date',
        'pengarah_1_tarikh' => 'date',
        'pengarah_2_tarikh' => 'date',
        'saksi_1_tarikh' => 'date',
        'saksi_2_tarikh' => 'date',
    ];
}
