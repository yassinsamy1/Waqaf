@extends('layouts.app')

@section('title', 'Edit Permohonan Wakaf')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-edit me-2"></i>Edit Permohonan Wakaf</h2>
    <a href="{{ route('waqaf.show', $waqaf) }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-2"></i>Kembali
    </a>
</div>

<form action="{{ route('waqaf.update', $waqaf) }}" method="POST">
    @csrf
    @method('PUT')
    
    <!-- Page 1: Checklist and Basic Info -->
    <div class="form-section">
        <h4><i class="fas fa-check-square me-2"></i>Senarai Semak Permohonan Wakaf (Syarikat)</h4>
        <p class="text-muted">Pemohon/Pewakaf dikehendaki mengemukakan dokumen-dokumen seperti berikut:</p>
        
        <div class="row">
            <div class="col-md-6">
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_borang" id="check_borang" 
                               value="1" {{ old('check_borang', $waqaf->check_borang) ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_borang">
                            Borang Wujud Wakaf yang telah dilengkapkan
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_ic" id="check_ic" 
                               value="1" {{ old('check_ic', $waqaf->check_ic) ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_ic">
                            Salinan kad pengenalan 2 ahli lembaga pengarah
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_ssm" id="check_ssm" 
                               value="1" {{ old('check_ssm', $waqaf->check_ssm) ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_ssm">
                            Salinan undang-undang tubuh syarikat dan pendaftaran Suruhanjaya Syarikat Malaysia
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_hakmilik" id="check_hakmilik" 
                               value="1" {{ old('check_hakmilik', $waqaf->check_hakmilik) ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_hakmilik">
                            Hakmilik asal
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_cukai" id="check_cukai" 
                               value="1" {{ old('check_cukai', $waqaf->check_cukai) ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_cukai">
                            Resit cukai tanah semasa yang telah dijelaskan
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_taksiran" id="check_taksiran" 
                               value="1" {{ old('check_taksiran', $waqaf->check_taksiran) ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_taksiran">
                            Resit cukai taksiran semasa yang telah dijelaskan (jika ada)
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_akuan" id="check_akuan" 
                               value="1" {{ old('check_akuan', $waqaf->check_akuan) ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_akuan">
                            Akuan sumpah (SA-81)
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_pelan" id="check_pelan" 
                               value="1" {{ old('check_pelan', $waqaf->check_pelan) ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_pelan">
                            Salinan pelan tanah yang menunjukkan luas bahagian/kawasan dan lokasi tanah yang ingin diwakafkan (jika berkongsi)
                        </label>
                    </div>
                </div>
            </div>
        </div>
        
        <hr class="my-4">
        
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="pengesah_1_nama" class="form-label">Nama Pengesah 1</label>
                    <input type="text" class="form-control @error('pengesah_1_nama') is-invalid @enderror" 
                           id="pengesah_1_nama" name="pengesah_1_nama" value="{{ old('pengesah_1_nama', $waqaf->pengesah_1_nama) }}">
                    @error('pengesah_1_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="pengesah_1_tel" class="form-label">No. Tel Pengesah 1</label>
                    <input type="text" class="form-control @error('pengesah_1_tel') is-invalid @enderror" 
                           id="pengesah_1_tel" name="pengesah_1_tel" value="{{ old('pengesah_1_tel', $waqaf->pengesah_1_tel) }}">
                    @error('pengesah_1_tel')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="pengesah_2_nama" class="form-label">Nama Pengesah 2</label>
                    <input type="text" class="form-control @error('pengesah_2_nama') is-invalid @enderror" 
                           id="pengesah_2_nama" name="pengesah_2_nama" value="{{ old('pengesah_2_nama', $waqaf->pengesah_2_nama) }}">
                    @error('pengesah_2_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="pengesah_2_tel" class="form-label">No. Tel Pengesah 2</label>
                    <input type="text" class="form-control @error('pengesah_2_tel') is-invalid @enderror" 
                           id="pengesah_2_tel" name="pengesah_2_tel" value="{{ old('pengesah_2_tel', $waqaf->pengesah_2_tel) }}">
                    @error('pengesah_2_tel')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <!-- Page 2: Company and Wakaf Details -->
    <div class="form-section">
        <h4><i class="fas fa-building me-2"></i>Maklumat Syarikat dan Wakaf</h4>
        
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="no_syarikat" class="form-label">No. Syarikat <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('no_syarikat') is-invalid @enderror" 
                           id="no_syarikat" name="no_syarikat" value="{{ old('no_syarikat', $waqaf->no_syarikat) }}" required>
                    @error('no_syarikat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="tarikh_lafaz" class="form-label">Tarikh Lafaz <span class="text-danger">*</span></label>
                    <input type="date" class="form-control @error('tarikh_lafaz') is-invalid @enderror" 
                           id="tarikh_lafaz" name="tarikh_lafaz" value="{{ old('tarikh_lafaz', $waqaf->tarikh_lafaz?->format('Y-m-d')) }}" required>
                    @error('tarikh_lafaz')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="tarikh_qabul" class="form-label">Tarikh Lafaz Qabul</label>
                    <input type="text" class="form-control @error('tarikh_qabul') is-invalid @enderror" 
                           id="tarikh_qabul" name="tarikh_qabul" value="{{ old('tarikh_qabul', $waqaf->tarikh_qabul) }}" 
                           placeholder="Contoh: 15 Ramadan">
                    @error('tarikh_qabul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="tarikh_hijri" class="form-label">Tarikh Hijri</label>
                    <input type="text" class="form-control @error('tarikh_hijri') is-invalid @enderror" 
                           id="tarikh_hijri" name="tarikh_hijri" value="{{ old('tarikh_hijri', $waqaf->tarikh_hijri) }}" 
                           placeholder="Contoh: 1445">
                    @error('tarikh_hijri')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="tahun_qabul" class="form-label">Tahun Lafaz Qabul</label>
                    <input type="text" class="form-control @error('tahun_qabul') is-invalid @enderror" 
                           id="tahun_qabul" name="tahun_qabul" value="{{ old('tahun_qabul', $waqaf->tahun_qabul) }}" 
                           placeholder="Contoh: 2025">
                    @error('tahun_qabul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Syarikat <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" 
                              id="alamat" name="alamat" rows="3" required>{{ old('alamat', $waqaf->alamat) }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Jenis Wakaf <span class="text-danger">*</span></label>
                    
                    <div class="mb-3">
                        <label for="wakaf_khas_detail" class="form-label">i. Wakaf Khas ( Tapak: <span class="text-danger">*</span> Masjid / Surau / Sekolah Agama Rakyat / Perkuburan )</label>
                        <input type="text" class="form-control @error('wakaf_khas_detail') is-invalid @enderror" 
                               id="wakaf_khas_detail" name="wakaf_khas_detail" 
                               placeholder="Masukkan butiran Wakaf Khas..."
                               value="{{ old('wakaf_khas_detail', $waqaf->wakaf_khas_detail) }}">
                        @error('wakaf_khas_detail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="wakaf_saraan_detail" class="form-label">ii. Wakaf Saraan ( <span class="text-danger">*</span> Masjid / Surau / Sekolah Agama Rakyat / Perkuburan )</label>
                        <input type="text" class="form-control @error('wakaf_saraan_detail') is-invalid @enderror" 
                               id="wakaf_saraan_detail" name="wakaf_saraan_detail" 
                               placeholder="Masukkan butiran Wakaf Saraan..."
                               value="{{ old('wakaf_saraan_detail', $waqaf->wakaf_saraan_detail) }}">
                        @error('wakaf_saraan_detail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="wakaf_am_detail" class="form-label">iii. Wakaf Am ( MAIPk )</label>
                        <input type="text" class="form-control @error('wakaf_am_detail') is-invalid @enderror" 
                               id="wakaf_am_detail" name="wakaf_am_detail" 
                               placeholder="Masukkan butiran Wakaf Am..."
                               value="{{ old('wakaf_am_detail', $waqaf->wakaf_am_detail) }}">
                        @error('wakaf_am_detail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Keep the original jenis_wakaf field hidden for backward compatibility -->
                    <input type="hidden" id="jenis_wakaf" name="jenis_wakaf" value="{{ old('jenis_wakaf', $waqaf->jenis_wakaf) }}">
                </div>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="tujuan" class="form-label">Tujuan Wakaf <span class="text-danger">*</span></label>
            <textarea class="form-control @error('tujuan') is-invalid @enderror" 
                      id="tujuan" name="tujuan" rows="3" required>{{ old('tujuan', $waqaf->tujuan) }}</textarea>
            @error('tujuan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Page 3: Land Details -->
    <div class="form-section">
        <h4><i class="fas fa-map me-2"></i>Butiran Harta Diwakafkan</h4>
        
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="mukim" class="form-label">Mukim <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('mukim') is-invalid @enderror" 
                           id="mukim" name="mukim" value="{{ old('mukim', $waqaf->mukim) }}" required>
                    @error('mukim')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="daerah" class="form-label">Daerah <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('daerah') is-invalid @enderror" 
                           id="daerah" name="daerah" value="{{ old('daerah', $waqaf->daerah) }}" required>
                    @error('daerah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="hakmilik" class="form-label">Jenis & No. Hakmilik <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('hakmilik') is-invalid @enderror" 
                           id="hakmilik" name="hakmilik" value="{{ old('hakmilik', $waqaf->hakmilik) }}" required>
                    @error('hakmilik')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="no_lot" class="form-label">No Lot / Plot <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('no_lot') is-invalid @enderror" 
                           id="no_lot" name="no_lot" value="{{ old('no_lot', $waqaf->no_lot) }}" required>
                    @error('no_lot')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="luas_tanah" class="form-label">Luas Tanah <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('luas_tanah') is-invalid @enderror" 
                           id="luas_tanah" name="luas_tanah" value="{{ old('luas_tanah', $waqaf->luas_tanah) }}" required>
                    @error('luas_tanah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="bhg_diwakaf" class="form-label">Bhg Diwakafkan</label>
                    <input type="text" class="form-control @error('bhg_diwakaf') is-invalid @enderror" 
                           id="bhg_diwakaf" name="bhg_diwakaf" value="{{ old('bhg_diwakaf', $waqaf->bhg_diwakaf) }}">
                    @error('bhg_diwakaf')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="luas_diwakaf" class="form-label">Luas Diwakafkan</label>
                    <input type="text" class="form-control @error('luas_diwakaf') is-invalid @enderror" 
                           id="luas_diwakaf" name="luas_diwakaf" value="{{ old('luas_diwakaf', $waqaf->luas_diwakaf) }}">
                    @error('luas_diwakaf')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="baki_tanah" class="form-label">Baki Bahagian Tanah Selepas Diwakafkan</label>
                    <input type="text" class="form-control @error('baki_tanah') is-invalid @enderror" 
                           id="baki_tanah" name="baki_tanah" value="{{ old('baki_tanah', $waqaf->baki_tanah) }}">
                    @error('baki_tanah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <!-- Page 4: Directors, Witnesses and Judge -->
    <div class="form-section">
        <h4><i class="fas fa-users me-2"></i>Maklumat Pengarah, Saksi dan Hakim</h4>
        
        <h5 class="text-primary mt-4 mb-3">Ahli Lembaga Pengarah</h5>
        <div class="row">
            <div class="col-md-6">
                <h6 class="text-secondary">Pengarah 1</h6>
                <div class="mb-3">
                    <label for="pengarah_1_nama" class="form-label">Nama <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('pengarah_1_nama') is-invalid @enderror" 
                           id="pengarah_1_nama" name="pengarah_1_nama" value="{{ old('pengarah_1_nama', $waqaf->pengarah_1_nama) }}" required>
                    @error('pengarah_1_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="pengarah_1_ic" class="form-label">No K/P <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('pengarah_1_ic') is-invalid @enderror" 
                           id="pengarah_1_ic" name="pengarah_1_ic" value="{{ old('pengarah_1_ic', $waqaf->pengarah_1_ic) }}" required>
                    @error('pengarah_1_ic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="pengarah_1_tarikh" class="form-label">Tarikh</label>
                    <input type="date" class="form-control @error('pengarah_1_tarikh') is-invalid @enderror" 
                           id="pengarah_1_tarikh" name="pengarah_1_tarikh" value="{{ old('pengarah_1_tarikh', $waqaf->pengarah_1_tarikh?->format('Y-m-d')) }}">
                    @error('pengarah_1_tarikh')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <h6 class="text-secondary">Pengarah 2</h6>
                <div class="mb-3">
                    <label for="pengarah_2_nama" class="form-label">Nama <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('pengarah_2_nama') is-invalid @enderror" 
                           id="pengarah_2_nama" name="pengarah_2_nama" value="{{ old('pengarah_2_nama', $waqaf->pengarah_2_nama) }}" required>
                    @error('pengarah_2_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="pengarah_2_ic" class="form-label">No K/P <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('pengarah_2_ic') is-invalid @enderror" 
                           id="pengarah_2_ic" name="pengarah_2_ic" value="{{ old('pengarah_2_ic', $waqaf->pengarah_2_ic) }}" required>
                    @error('pengarah_2_ic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="pengarah_2_tarikh" class="form-label">Tarikh</label>
                    <input type="date" class="form-control @error('pengarah_2_tarikh') is-invalid @enderror" 
                           id="pengarah_2_tarikh" name="pengarah_2_tarikh" value="{{ old('pengarah_2_tarikh', $waqaf->pengarah_2_tarikh?->format('Y-m-d')) }}">
                    @error('pengarah_2_tarikh')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        
        <h5 class="text-primary mt-4 mb-3">Saksi</h5>
        <div class="row">
            <div class="col-md-6">
                <h6 class="text-secondary">Saksi 1</h6>
                <div class="mb-3">
                    <label for="saksi_1_nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('saksi_1_nama') is-invalid @enderror" 
                           id="saksi_1_nama" name="saksi_1_nama" value="{{ old('saksi_1_nama', $waqaf->saksi_1_nama) }}">
                    @error('saksi_1_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="saksi_1_ic" class="form-label">No K/P</label>
                    <input type="text" class="form-control @error('saksi_1_ic') is-invalid @enderror" 
                           id="saksi_1_ic" name="saksi_1_ic" value="{{ old('saksi_1_ic', $waqaf->saksi_1_ic) }}">
                    @error('saksi_1_ic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="saksi_1_tarikh" class="form-label">Tarikh</label>
                    <input type="date" class="form-control @error('saksi_1_tarikh') is-invalid @enderror" 
                           id="saksi_1_tarikh" name="saksi_1_tarikh" value="{{ old('saksi_1_tarikh', $waqaf->saksi_1_tarikh?->format('Y-m-d')) }}">
                    @error('saksi_1_tarikh')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <h6 class="text-secondary">Saksi 2</h6>
                <div class="mb-3">
                    <label for="saksi_2_nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('saksi_2_nama') is-invalid @enderror" 
                           id="saksi_2_nama" name="saksi_2_nama" value="{{ old('saksi_2_nama', $waqaf->saksi_2_nama) }}">
                    @error('saksi_2_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="saksi_2_ic" class="form-label">No K/P</label>
                    <input type="text" class="form-control @error('saksi_2_ic') is-invalid @enderror" 
                           id="saksi_2_ic" name="saksi_2_ic" value="{{ old('saksi_2_ic', $waqaf->saksi_2_ic) }}">
                    @error('saksi_2_ic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="saksi_2_tarikh" class="form-label">Tarikh</label>
                    <input type="date" class="form-control @error('saksi_2_tarikh') is-invalid @enderror" 
                           id="saksi_2_tarikh" name="saksi_2_tarikh" value="{{ old('saksi_2_tarikh', $waqaf->saksi_2_tarikh?->format('Y-m-d')) }}">
                    @error('saksi_2_tarikh')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        
        <h5 class="text-primary mt-4 mb-3">Hakim / Pesuruhjaya</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="hakim_nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('hakim_nama') is-invalid @enderror" 
                           id="hakim_nama" name="hakim_nama" value="{{ old('hakim_nama', $waqaf->hakim_nama) }}">
                    @error('hakim_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="hakim_ic" class="form-label">No K/P</label>
                    <input type="text" class="form-control @error('hakim_ic') is-invalid @enderror" 
                           id="hakim_ic" name="hakim_ic" value="{{ old('hakim_ic', $waqaf->hakim_ic) }}">
                    @error('hakim_ic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ route('waqaf.show', $waqaf) }}" class="btn btn-secondary">
            <i class="fas fa-times me-2"></i>Batal
        </a>
        <button type="submit" class="btn btn-success">
            <i class="fas fa-save me-2"></i>Kemaskini Permohonan
        </button>
    </div>
</form>
@endsection
