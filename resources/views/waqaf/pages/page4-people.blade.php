<!-- Page 4: Directors, Witnesses and Judge -->
<div class="form-page" id="page-4">
    <div class="form-section">
        <h4><i class="fas fa-users me-2"></i>Maklumat Pengarah, Saksi dan Hakim</h4>
        
        <h5 class="text-primary mt-4 mb-3">Ahli Lembaga Pengarah</h5>
        <div class="row">
            <div class="col-md-6">
                <h6 class="text-secondary">Pengarah 1</h6>
                <div class="mb-3">
                    <label for="pengarah_1_nama" class="form-label">Nama <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('pengarah_1_nama') is-invalid @enderror" 
                           id="pengarah_1_nama" name="pengarah_1_nama" value="{{ old('pengarah_1_nama') }}" required>
                    @error('pengarah_1_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="pengarah_1_ic" class="form-label">No K/P <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('pengarah_1_ic') is-invalid @enderror" 
                           id="pengarah_1_ic" name="pengarah_1_ic" value="{{ old('pengarah_1_ic') }}" required>
                    @error('pengarah_1_ic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="pengarah_1_tarikh" class="form-label">Tarikh</label>
                    <input type="date" class="form-control @error('pengarah_1_tarikh') is-invalid @enderror" 
                           id="pengarah_1_tarikh" name="pengarah_1_tarikh" value="{{ old('pengarah_1_tarikh') }}">
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
                           id="pengarah_2_nama" name="pengarah_2_nama" value="{{ old('pengarah_2_nama') }}" required>
                    @error('pengarah_2_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="pengarah_2_ic" class="form-label">No K/P <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('pengarah_2_ic') is-invalid @enderror" 
                           id="pengarah_2_ic" name="pengarah_2_ic" value="{{ old('pengarah_2_ic') }}" required>
                    @error('pengarah_2_ic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="pengarah_2_tarikh" class="form-label">Tarikh</label>
                    <input type="date" class="form-control @error('pengarah_2_tarikh') is-invalid @enderror" 
                           id="pengarah_2_tarikh" name="pengarah_2_tarikh" value="{{ old('pengarah_2_tarikh') }}">
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
                           id="saksi_1_nama" name="saksi_1_nama" value="{{ old('saksi_1_nama') }}">
                    @error('saksi_1_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="saksi_1_ic" class="form-label">No K/P</label>
                    <input type="text" class="form-control @error('saksi_1_ic') is-invalid @enderror" 
                           id="saksi_1_ic" name="saksi_1_ic" value="{{ old('saksi_1_ic') }}">
                    @error('saksi_1_ic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="saksi_1_tarikh" class="form-label">Tarikh</label>
                    <input type="date" class="form-control @error('saksi_1_tarikh') is-invalid @enderror" 
                           id="saksi_1_tarikh" name="saksi_1_tarikh" value="{{ old('saksi_1_tarikh') }}">
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
                           id="saksi_2_nama" name="saksi_2_nama" value="{{ old('saksi_2_nama') }}">
                    @error('saksi_2_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="saksi_2_ic" class="form-label">No K/P</label>
                    <input type="text" class="form-control @error('saksi_2_ic') is-invalid @enderror" 
                           id="saksi_2_ic" name="saksi_2_ic" value="{{ old('saksi_2_ic') }}">
                    @error('saksi_2_ic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="saksi_2_tarikh" class="form-label">Tarikh</label>
                    <input type="date" class="form-control @error('saksi_2_tarikh') is-invalid @enderror" 
                           id="saksi_2_tarikh" name="saksi_2_tarikh" value="{{ old('saksi_2_tarikh') }}">
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
                           id="hakim_nama" name="hakim_nama" value="{{ old('hakim_nama') }}">
                    @error('hakim_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="hakim_ic" class="form-label">No K/P</label>
                    <input type="text" class="form-control @error('hakim_ic') is-invalid @enderror" 
                           id="hakim_ic" name="hakim_ic" value="{{ old('hakim_ic') }}">
                    @error('hakim_ic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
