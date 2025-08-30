<!-- Page 2: Wakaf Details -->
<div class="form-page" id="page-2">
    <div class="form-section">
        <h4><i class="fas fa-building me-2"></i>Maklumat Syarikat dan Wakaf</h4>
        
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="no_syarikat" class="form-label">No. Syarikat <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('no_syarikat') is-invalid @enderror" 
                           id="no_syarikat" name="no_syarikat" value="{{ old('no_syarikat') }}" required>
                    @error('no_syarikat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="tarikh_lafaz" class="form-label">Tarikh Lafaz <span class="text-danger">*</span></label>
                    <input type="date" class="form-control @error('tarikh_lafaz') is-invalid @enderror" 
                           id="tarikh_lafaz" name="tarikh_lafaz" value="{{ old('tarikh_lafaz') }}" required>
                    @error('tarikh_lafaz')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="tarikh_qabul" class="form-label">Tarikh Lafaz Qabul</label>
                    <input type="text" class="form-control @error('tarikh_qabul') is-invalid @enderror" 
                           id="tarikh_qabul" name="tarikh_qabul" value="{{ old('tarikh_qabul') }}" 
                           placeholder="Contoh: 15 Ramadan">
                    @error('tarikh_qabul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="tarikh_hijri" class="form-label">Tarikh Hijri</label>
                    <input type="text" class="form-control @error('tarikh_hijri') is-invalid @enderror" 
                           id="tarikh_hijri" name="tarikh_hijri" value="{{ old('tarikh_hijri') }}" 
                           placeholder="Contoh: 1445">
                    @error('tarikh_hijri')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="tahun_qabul" class="form-label">Tahun Lafaz Qabul</label>
                    <input type="text" class="form-control @error('tahun_qabul') is-invalid @enderror" 
                           id="tahun_qabul" name="tahun_qabul" value="{{ old('tahun_qabul') }}" 
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
                              id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
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
                               value="{{ old('wakaf_khas_detail') }}">
                        @error('wakaf_khas_detail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="wakaf_saraan_detail" class="form-label">ii. Wakaf Saraan ( <span class="text-danger">*</span> Masjid / Surau / Sekolah Agama Rakyat / Perkuburan )</label>
                        <input type="text" class="form-control @error('wakaf_saraan_detail') is-invalid @enderror" 
                               id="wakaf_saraan_detail" name="wakaf_saraan_detail" 
                               placeholder="Masukkan butiran Wakaf Saraan..."
                               value="{{ old('wakaf_saraan_detail') }}">
                        @error('wakaf_saraan_detail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="wakaf_am_detail" class="form-label">iii. Wakaf Am ( MAIPk )</label>
                        <input type="text" class="form-control @error('wakaf_am_detail') is-invalid @enderror" 
                               id="wakaf_am_detail" name="wakaf_am_detail" 
                               placeholder="Masukkan butiran Wakaf Am..."
                               value="{{ old('wakaf_am_detail') }}">
                        @error('wakaf_am_detail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <input type="hidden" id="jenis_wakaf" name="jenis_wakaf" value="wakaf_khas">
                </div>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="tujuan" class="form-label">Tujuan Wakaf <span class="text-danger">*</span></label>
            <textarea class="form-control @error('tujuan') is-invalid @enderror" 
                      id="tujuan" name="tujuan" rows="3" required>{{ old('tujuan') }}</textarea>
            @error('tujuan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
