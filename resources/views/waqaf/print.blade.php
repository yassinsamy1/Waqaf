<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Mewujudkan Wakaf - {{ $waqaf->no_syarikat }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @page {
            size: A4;
            margin: 10mm;
        }
        
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            line-height: 1.3;
            color: #000;
            margin: 0;
            padding: 0;
        }
        
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }
        
        .header h1 {
            font-size: 15px;
            font-weight: bold;
            margin: 0 0 8px 0;
            letter-spacing: 0.5px;
        }
        
        .header h2 {
            font-size: 13px;
            font-weight: bold;
            margin: 8px 0;
            text-decoration: underline;
        }
        
        .form-section {
            margin-bottom: 15px;
            border: 1px solid #000;
            padding: 10px;
        }
        
        .form-section h3 {
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 8px;
            text-decoration: underline;
        }
        
        .form-row {
            display: flex;
            margin-bottom: 6px;
            align-items: baseline;
        }
        
        .form-label {
            font-weight: bold;
            margin-right: 8px;
            min-width: 100px;
        }
        
        .form-value {
            border-bottom: 1px dotted #ccc;
            min-height: 18px;
            flex: 1;
            padding: 2px;
        }
        
        .checkbox-list {
            margin: 8px 0;
        }
        
        .checkbox-item {
            margin-bottom: 5px;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding-right: 25px;
            font-size: 13px;
            font-weight: 500;
        }
        
        .checkbox {
            width: 16px;
            height: 16px;
            border: 1px solid #000;
            margin-left: 8px;
            display: inline-block;
            text-align: center;
            line-height: 14px;
            font-weight: bold;
            flex-shrink: 0;
        }
        
        .checked {
            background-color: #000;
            color: white;
        }
        
        .signature-section {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
        }
        
        .signature-box {
            width: 200px;
            text-align: center;
        }
        
        .signature-line {
            border-bottom: 1px solid #000;
            height: 50px;
            margin-bottom: 5px;
        }
        
        .page-break {
            page-break-before: always;
        }
        
        @media print {
            .no-print {
                display: none !important;
            }
        }
        
        .table-basic {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        
        .table-basic td {
            padding: 6px;
            border: none;
            vertical-align: top;
            font-size: 11px;
        }
        
        .table-basic .label-col {
            width: 25%;
            font-weight: bold;
            background-color: #f8f8f8;
        }
        
        .dotted-line {
            border-bottom: 1px dotted #ccc !important;
            display: block;
            width: 100%;
        }
        
        .dotted-border {
            border-bottom: 1px dotted #ccc !important;
        }
    </style>
</head>
<body>
    <!-- Print Button -->
    <div class="no-print mb-3">
        <button onclick="window.print()" class="btn btn-primary">
            <i class="fas fa-print me-2"></i>Cetak Borang
        </button>
        <a href="{{ route('waqaf.index') }}" class="btn btn-secondary">
            <i class="fas fa-times me-2"></i>Batal
        </a>
    </div>

    <!-- Page 1: Document Checklist -->
    <div class="header">
        <h1>MAJLIS AGAMA ISLAM DAN 'ADAT MELAYU PERAK</h1>
        <h2>SENARAI SEMAK PERMOHONAN WAKAF (SYARIKAT)</h2>
    </div>

    <div style="margin: 30px 0;">
        <p style="font-size: 14px; font-weight: 500;">Pemohon/Pewakaf dikehendaki mengemukakan dokumen-dokumen seperti berikut:</p>
        
        <p style="margin-top: 25px; margin-bottom: 30px; font-size: 14px;"><strong>Tandakan ( / ) pada petak yang berkenaan :</strong></p>
    </div>
    
    <div class="checkbox-list" style="margin: 30px 0; line-height: 2.2; font-size: 13px;">
        <div class="checkbox-item" style="margin-bottom: 18px; padding: 8px 0;">
            <span style="font-size: 13px; line-height: 1.4;">1. Borang Wujud Wakaf yang telah dilengkapkan</span>
            <span class="checkbox {{ $waqaf->check_borang ? 'checked' : '' }}">{{ $waqaf->check_borang ? '✓' : '' }}</span>
        </div>
        
        <div class="checkbox-item" style="margin-bottom: 18px; padding: 8px 0;">
            <span style="font-size: 13px; line-height: 1.4;">2. Salinan kad pengenalan 2 ahli lembaga pengarah</span>
            <span class="checkbox {{ $waqaf->check_ic ? 'checked' : '' }}">{{ $waqaf->check_ic ? '✓' : '' }}</span>
        </div>
        
        <div class="checkbox-item" style="margin-bottom: 18px; padding: 8px 0;">
            <span style="font-size: 13px; line-height: 1.4;">3. Salinan undang-undang tubuh syarikat dan pendaftaran Suruhanjaya Syarikat Malaysia</span>
            <span class="checkbox {{ $waqaf->check_ssm ? 'checked' : '' }}">{{ $waqaf->check_ssm ? '✓' : '' }}</span>
        </div>
        
        <div class="checkbox-item" style="margin-bottom: 18px; padding: 8px 0;">
            <span style="font-size: 13px; line-height: 1.4;">4. Hakmilik asal</span>
            <span class="checkbox {{ $waqaf->check_hakmilik ? 'checked' : '' }}">{{ $waqaf->check_hakmilik ? '✓' : '' }}</span>
        </div>
        
        <div class="checkbox-item" style="margin-bottom: 18px; padding: 8px 0;">
            <span style="font-size: 13px; line-height: 1.4;">5. Resit cukai tanah semasa yang telah dijelaskan</span>
            <span class="checkbox {{ $waqaf->check_cukai ? 'checked' : '' }}">{{ $waqaf->check_cukai ? '✓' : '' }}</span>
        </div>
        
        <div class="checkbox-item" style="margin-bottom: 18px; padding: 8px 0;">
            <span style="font-size: 13px; line-height: 1.4;">6. Resit cukai taksiran semasa yang telah dijelaskan (jika ada)</span>
            <span class="checkbox {{ $waqaf->check_taksiran ? 'checked' : '' }}">{{ $waqaf->check_taksiran ? '✓' : '' }}</span>
        </div>
        
        <div class="checkbox-item" style="margin-bottom: 18px; padding: 8px 0;">
            <span style="font-size: 13px; line-height: 1.4;">7. Akuan sumpah (SA-81)</span>
            <span class="checkbox {{ $waqaf->check_akuan ? 'checked' : '' }}">{{ $waqaf->check_akuan ? '✓' : '' }}</span>
        </div>
        
        <div class="checkbox-item" style="margin-bottom: 18px; padding: 8px 0;">
            <span style="font-size: 13px; line-height: 1.4;">8. Salinan pelan tanah yang menunjukkan luas bahagian/kawasan dan lokasi tanah yang ingin diwakafkan (jika berkongsi)</span>
            <span class="checkbox {{ $waqaf->check_pelan ? 'checked' : '' }}">{{ $waqaf->check_pelan ? '✓' : '' }}</span>
        </div>
    </div>

    <div style="margin-top: 120px;">
        <div style="display: flex; justify-content: space-between;">
            <div style="text-align: center; width: 45%; padding: 20px 0;">
                <div style="border-bottom: 1px dotted #ccc; height: 60px; margin-bottom: 20px;"></div>
                <div style="padding: 15px 0;">
                    <strong>Nama : {{ $waqaf->pengesah_1_nama ?: '........................................................................................' }}</strong><br>
                    <strong style="margin-top: 10px; display: block;">No. Tel : {{ $waqaf->pengesah_1_tel ?: '........................................................................................' }}</strong>
                </div>
            </div>
            
            <div style="text-align: center; width: 45%; padding: 20px 0;">
                <div style="border-bottom: 1px dotted #ccc; height: 60px; margin-bottom: 20px;"></div>
                <div style="padding: 15px 0;">
                    <strong>Nama : {{ $waqaf->pengesah_2_nama ?: '........................................................................................' }}</strong><br>
                    <strong style="margin-top: 10px; display: block;">No. Tel : {{ $waqaf->pengesah_2_tel ?: '........................................................................................' }}</strong>
                </div>
            </div>
        </div>
    </div>

    <!-- Page 2: Header and Wakaf Declaration -->
    <div class="page-break">
        <div class="header">
            <h1>MAJLIS AGAMA ISLAM DAN 'ADAT MELAYU PERAK</h1>
            <h2>BORANG MEWUJUDKAN WAKAF</h2>
            <p><strong>UNTUK KEGUNAAN PEJABAT</strong></p>
        </div>

        <div class="form-section" style="margin-bottom: 20px;">
            <table class="table-basic">
                <tr>
                    <td class="label-col" style="width: 25%; padding: 6px;">No. Fail MAIPk</td>
                    <td style="width: 35%; padding: 6px;">{{ $waqaf->id ?: '.......................' }}/{{ date('Y') }}</td>
                    <td rowspan="4" style="text-align: center; width: 40%; padding: 15px; border: 2px solid #000;">
                        <strong style="font-size: 12px;">Cop Rasmi</strong>
                    </td>
                </tr>
                <tr>
                    <td class="label-col" style="padding: 6px;">Mukim</td>
                    <td style="padding: 6px;">{{ $waqaf->mukim ?: '.......................' }}</td>
                </tr>
                <tr>
                    <td class="label-col" style="padding: 6px;">Daerah</td>
                    <td style="padding: 6px;">{{ $waqaf->daerah ?: '.......................' }}</td>
                </tr>
                <tr>
                    <td class="label-col" style="padding: 6px;">Tarikh</td>
                    <td style="padding: 6px;">{{ $waqaf->tarikh_lafaz ? $waqaf->tarikh_lafaz->format('d/m/Y') : '.......................' }}</td>
                </tr>
                <tr>
                    <td colspan="3" style="padding: 10px;"><strong>Catatan :</strong><br><br></td>
                </tr>
            </table>
        </div>

        <div class="form-section" style="margin-bottom: 20px;">
            <p><strong>AKUAN / LAFAZ WAKAF</strong> ini diperbuat pada <u>{{ $waqaf->tarikh_qabul ?? '.........................' }}</u> hb <u>{{ $waqaf->tarikh_hijri ?? '......................' }}</u> tahun <u>{{ $waqaf->tahun_qabul ?? '.............................' }}</u><br>
            <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 8px 0;"></span></p>
            
            <p>Di antara <u>{{ $waqaf->alamat ?: '.......................' }}(No. Syarikat : {{ $waqaf->no_syarikat ?: '.......................' }})</u><br>
            <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 8px 0;"></span></p>
            
            <p>yang beralamat <u>{{ $waqaf->alamat ?: '.......................' }}</u><br>
            <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 8px 0;"></span></p>
            
            <p><em>(selepas ini digelar "Pewakaf")</em></p>
            
            <p style="text-align: center;"><strong>DAN</strong></p>
            
            <p><strong>MAJLIS AGAMA ISLAM DAN ADAT MELAYU PERAK</strong> sebuah badan yang ditubuhkan di bawah Enakmen Pentadbiran Agama Islam (Perak) 2004 yang beribu pejabat di Kompleks Islam Darul Ridzuan, Jalan Panglima Bukit Gantang Wahab,30000 Ipoh Perak.</p>
            
            <p><em>(selepas ini digelar "Majlis Agama Islam dan Adat Melayu Perak" sebagai "wakaf")</em></p>
            
            <p><strong>MAKA DENGAN INI ADALAH DIAKUSKAN seperti berikut :</strong></p>
            
            <p><strong>1. LAFAZ IJAB 'PEWAKAF'</strong></p>
            
            <p>Saya / Kami seperti nama dan alamat tersebut di atas mengaku dengan suci dan ikhlas hati kerana Allah s.w.t. mewakafkan sebahagian atau buti-buti yang dinyatakan selepas ini atas nama Majlis Agama Islam dan 'Adat Melayu Perak untuk tujuan:-</p>
            
            <p style="margin: 20px 0;"><strong>Sila isikan yang berkenaan :-</strong></p>
            
            <div style="margin: 25px 0;">
                <p style="margin-bottom: 15px;">i. Wakaf Khas ( Tapak: * Masjid / Surau / Sekolah Agama Rakyat / Perkuburan )<br>
                <u style="display: block; margin: 5px 0; padding: 3px;">{{ $waqaf->wakaf_khas_detail ?: '.....................................................................................................................................................................................................' }}</u></p>
                <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 15px 0;"></span>
                
                <p style="margin-bottom: 15px;">ii. Wakaf Saraan ( * Masjid / Surau / Sekolah Agama Rakyat / Perkuburan )<br>
                <u style="display: block; margin: 5px 0; padding: 3px;">{{ $waqaf->wakaf_saraan_detail ?: '.....................................................................................................................................................................................................' }}</u></p>
                <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 15px 0;"></span>
                
                <p style="margin-bottom: 15px;">iii. Wakaf Am ( MAIPk )<br>
                <u style="display: block; margin: 5px 0; padding: 3px;">{{ $waqaf->wakaf_am_detail ?: '.....................................................................................................................................................................................................' }}</u></p>
                <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 15px 0;"></span>
            </div>
            
            <p style="font-size: 10px;">* Jika sekiranya penerima manfaat mengabaikan atau tidak menjaga harta wakaf dengan baik, Pihak MAIPk berhak untuk mengambil alih harta tersebut tanpa persetujuan penerima manfaat bagi meneruskan kelestarian pembangunan harta wakaf</p>
        </div>
    </div>

    <!-- Page 3: Land Details and Acceptance -->
    <div class="page-break">
        <div style="margin-bottom: 30px;">
            <p><strong>2. LAFAZ QABUL MAIPk</strong></p>
            
            <p>Saya / Kami mewakili pihak "Majlis Agama Islam dan Adat Melayu Perak" adalah dengan ini dan di bawah kuasa yang diberikan oleh undang-undang menerima Wakaf tersebut:-</p>
        </div>

        <div class="form-section" style="margin-bottom: 30px;">
            <h3 style="margin-bottom: 20px;">BUTIRAN HARTA DIWAKAFKAN</h3>
            
            <table class="table-basic" style="margin-bottom: 25px;">
                <tr>
                    <td class="label-col" style="padding: 8px;">1) Mukim</td>
                    <td style="padding: 8px;">{{ $waqaf->mukim ?: '........................' }}</td>
                    <td class="label-col" style="padding: 8px;">5) Luas Tanah</td>
                    <td style="padding: 8px;">{{ $waqaf->luas_tanah ?: '........................' }}</td>
                </tr>
                <tr>
                    <td class="label-col" style="padding: 8px;">2) Daerah</td>
                    <td style="padding: 8px;">{{ $waqaf->daerah ?: '........................' }}</td>
                    <td class="label-col" style="padding: 8px;">6) Bhg Diwakafkan</td>
                    <td style="padding: 8px;">{{ $waqaf->bhg_diwakaf ?: '........................' }}</td>
                </tr>
                <tr>
                    <td class="label-col" style="padding: 8px;">3) Jenis & No. Hakmilik</td>
                    <td style="padding: 8px;">{{ $waqaf->hakmilik ?: '........................' }}</td>
                    <td class="label-col" style="padding: 8px;">7) Luas Diwakafkan</td>
                    <td style="padding: 8px;">{{ $waqaf->luas_diwakaf ?: '........................' }}</td>
                </tr>
                <tr>
                    <td class="label-col" style="padding: 8px;">4) No Lot / Plot</td>
                    <td style="padding: 8px;">{{ $waqaf->no_lot ?: '........................' }}</td>
                    <td class="label-col" style="padding: 8px;">8) Baki bahagian tanah selepas diwakafkan</td>
                    <td style="padding: 8px;">{{ $waqaf->baki_tanah ?: '........................' }}</td>
                </tr>
            </table>
            
            <p style="margin: 25px 0 20px 0;"><strong>Bersama ini disertakan:</strong></p>
            <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                <div style="width: 48%; line-height: 1.6;">
                    <p>i. Salinan kad pengenalan 2 ahli lembaga pengarah;<br>
                    ii. Salinan undang-undang tubuh dan pendaftaran SSM;<br>
                    iii. Hakmilik asal;<br>
                    iv. Resit cukai tanah / cukai taksiran semasa yang telah dijelaskan;</p>
                </div>
                <div style="width: 48%; line-height: 1.6;">
                    <p>v. Surat akuan; dan<br>
                    vi. Pelan tanah yang menunjukkan luas bahagian / kawasan dan lokasi tanah wakaf yang dicadangkan.</p>
                </div>
            </div>
            
            <p style="margin: 20px 0;"><strong>SEBAGAI MENYAKSIKAN</strong> "Pewakaf" dan "Majlis Agama Islam dan Adat Melayu Perak" menurukkan tandatangan masing-masing pada hari dan tarikh tersebut sebelum daripada ini.</p>
        </div>

        <!-- Signatures Section -->
        <div style="margin-top: 20px;">
            <div style="margin-bottom: 20px;">
                <p><strong>Nama Syarikat :</strong> <u>{{ $waqaf->no_syarikat ?: '........................................................................................' }}</u> <strong>(No. Syarikat :</strong> <u>{{ $waqaf->no_syarikat ?: '........................' }}</u><strong>)</strong></p>
                
                <!-- Directors Section - Side by Side -->
                <div style="display: flex; justify-content: space-between; margin: 15px 0;">
                    <div style="width: 48%;">
                        <p><strong>Ahli Lembaga Pengarah :</strong> <u>{{ $waqaf->pengarah_1_nama ?: '...................................................................' }}</u></p>
                        <p><strong>No K/P :</strong> <u>{{ $waqaf->pengarah_1_ic ?: '......................................' }}</u></p>
                        <p><strong>Tarikh :</strong> <u>{{ $waqaf->pengarah_1_tarikh ? $waqaf->pengarah_1_tarikh->format('d/m/Y') : '........................' }}</u> <strong>Tandatangan :</strong> <u>.............</u></p>
                    </div>
                    
                    <div style="width: 48%;">
                        <p><strong>Ahli Lembaga Pengarah :</strong> <u>{{ $waqaf->pengarah_2_nama ?: '...................................................................' }}</u></p>
                        <p><strong>No K/P :</strong> <u>{{ $waqaf->pengarah_2_ic ?: '......................................' }}</u></p>
                        <p><strong>Tarikh :</strong> <u>{{ $waqaf->pengarah_2_tarikh ? $waqaf->pengarah_2_tarikh->format('d/m/Y') : '........................' }}</u> <strong>Tandatangan :</strong> <u>.............</u></p>
                    </div>
                </div>
                
                <!-- Witnesses Section - Side by Side -->
                <div style="display: flex; justify-content: space-between; margin: 15px 0;">
                    <div style="width: 48%;">
                        <p><strong>Nama saksi ( 1 )</strong> : <u>{{ $waqaf->saksi_1_nama ?: '................................................................' }}</u></p>
                        <p><strong>No K/P</strong> : <u>{{ $waqaf->saksi_1_ic ?: '......................................' }}</u></p>
                        <p><strong>Tarikh</strong> : <u>{{ $waqaf->saksi_1_tarikh ? $waqaf->saksi_1_tarikh->format('d/m/Y') : '....................' }}</u> <strong>Tandatangan saksi 1</strong> : <u>........</u></p>
                    </div>
                    
                    <div style="width: 48%;">
                        <p><strong>Nama saksi ( 2 )</strong> : <u>{{ $waqaf->saksi_2_nama ?: '................................................................' }}</u></p>
                        <p><strong>No K/P</strong> : <u>{{ $waqaf->saksi_2_ic ?: '......................................' }}</u></p>
                        <p><strong>Tarikh</strong> : <u>{{ $waqaf->saksi_2_tarikh ? $waqaf->saksi_2_tarikh->format('d/m/Y') : '....................' }}</u> <strong>Tandatangan saksi 2</strong> : <u>........</u></p>
                    </div>
                </div>
                
                <p><strong>Ditandatangani oleh :</strong></p>
                
                <!-- Judge/Commissioner Box - Larger size shifted left -->
                <div style="border: 1px solid #000; padding: 12px; margin: 15px 40px 15px 0; height: 80px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; height: 100%;">
                        <div style="width: 65%;">
                            <p style="margin: 0; font-size: 12px;"><strong>Bagi pihak</strong><br>
                            <strong>"Majlis Agama Islam dan Adat Melayu Perak"</strong></p>
                        </div>
                        <div style="width: 30%; text-align: center;">
                            <p style="margin: 0; font-size: 11px;"><strong>( Tandatangan & Cop Jawatan )</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page 4: SA-81 Declaration -->
    <div class="page-break">
        <div style="text-align: right; margin-bottom: 20px;">
            <strong>(SA - 81)</strong>
        </div>
        
        <div style="text-align: center; margin-bottom: 30px;">
            <h2><strong>SURAT AKUAN</strong></h2>
        </div>

        <p><strong>Bahawa saya / kami :</strong></p>
        
        <p>{{ $waqaf->pengarah_1_nama ?: '.....................................................................' }} (No.K/P :{{ $waqaf->pengarah_1_ic ?: '.....................................................' }}) dan<br>
        <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 5px 0;"></span></p>
        
        <p>{{ $waqaf->pengarah_2_nama ?: '.....................................................................' }} (No. K/P :{{ $waqaf->pengarah_2_ic ?: '.....................................................' }})<br>
        <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 5px 0;"></span></p>
        
        <p>Selaku dua (2) Ahli Lembaga Pengarah di {{ $waqaf->alamat ?: '.....................................................................' }}<br>
        <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 5px 0;"></span></p>
        <p>No. Syarikat : {{ $waqaf->no_syarikat ?: '.............................' }}, dengan sesungguh dan sebenarnya mengaku bahawa :<br>
        <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 5px 0;"></span></p>
        
        <p>Tanpa ada paksaan dan dalam fikiran yang waras serta faham akan kesan kemudiannya mengikut perterangan pihak Majlis Agama Islam dan Adat Melayu Perak (MAIPk), maka dengan ini mewakafkan tanah milik saya / kami di Lot {{ $waqaf->no_lot ?: '.............................' }}, Sebahnyak {{ $waqaf->luas_tanah ?: '.............................' }}<br>
        <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 5px 0;"></span></p>
        <p>(Ekar/Hektar/Bahagian),No.Hakmilik {{ $waqaf->hakmilik ?: '.............................' }} Mukim {{ $waqaf->mukim ?: '.............................' }} Daerah {{ $waqaf->daerah ?: '.............................' }}<br>
        <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 5px 0;"></span></p>
        <p>atas nama "MAJLIS AGAMA ISLAM DAN 'ADAT MELAYU PERAK" bagi maksud wakaf {{ $waqaf->tujuan ?: '.............................' }}<br>
        <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 5px 0;"></span></p>
        
        <p>Saya / kami mengaku bahawa semua waris-waris faham akan niat saya / kami dan tidak mempunyai hak untuk menuntut kembali sama ada melalui undang-undang atau apa-apa ke atas tanah tersebut di kemudian hari.</p>
        
        <p>Dan saya / kami membuat surat akuan ini dengan kepercayaan bahawa apa-apa yang tersebut di dalamnya adalah benar, serta menurut Akta Akuan Berkanun 1960.</p>
        
        <p><strong>Diperbuat dan dengan sebenar-benarnya</strong><br>
        <strong>Diakui oleh yang tersebut namanya di atas</strong></p>
        
        <div style="margin-top: 25px;">
            <div style="display: flex; justify-content: space-between;">
                <div style="width: 40%;">
                    <p>iaitu {{ $waqaf->pengarah_1_nama ?: '.....................................................' }}<br>
                    <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 3px 0;"></span>
                    dan {{ $waqaf->pengarah_2_nama ?: '......................................................... ' }}<br>
                    <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 3px 0;"></span>
                    di {{ $waqaf->mukim ?: '............................................................. ' }}<br>
                    <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 3px 0;"></span>
                    di Negeri Perak<br>
                    pada {{ $waqaf->pengarah_1_tarikh ? $waqaf->pengarah_1_tarikh->format('d') : '...........................' }} harbulan {{ $waqaf->pengarah_1_tarikh ? $waqaf->pengarah_1_tarikh->format('m/Y') : '...................... ' }}<br>
                    <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 3px 0;"></span></p>
                </div>
                
                <div style="width: 40%; text-align: right;">
                    <div style="border-bottom: 1px solid #000; height: 30px; margin-bottom: 10px;"></div>
                    <strong>Nama : {{ $waqaf->pengarah_1_nama ?: '.......................' }}</strong><br>
                    <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 3px 0;"></span>
                    <strong>No. K/P : {{ $waqaf->pengarah_1_ic ?: '.......................' }}</strong><br>
                    <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 3px 0;"></span><br>
                    
                    <div style="border-bottom: 1px solid #000; height: 30px; margin-bottom: 10px;"></div>
                    <strong>Nama : {{ $waqaf->pengarah_2_nama ?: '.......................' }}</strong><br>
                    <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 3px 0;"></span>
                    <strong>No. K/P : {{ $waqaf->pengarah_2_ic ?: '.......................' }}</strong><br>
                    <span style="border-bottom: 1px dotted #ccc; display: block; width: 100%; margin: 3px 0;"></span>
                </div>
            </div>
        </div>
        
        <div style="margin-top: 30px; text-align: center;">
            <p><strong>Dihadapan saya,</strong></p>
            
            <div style="border-bottom: 1px dotted #ccc; height: 30px; margin: 20px auto; width: 300px;"></div>
            
            <p><strong>( Tandatangan Hakim<br>
            Mahkamah Sesyen, Majistret,<br>
            Pesuruhjaya Sumpah atau notari awam )</strong></p>
        </div>
    </div>

    <script>
        // Auto print when page loads (optional)
        // window.onload = function() { window.print(); }
    </script>
</body>
</html>
