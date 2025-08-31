<!-- Page 1: Checklist -->
<div class="form-page" id="page-1">
    <div class="form-section">
        <h4><i class="fas fa-check-square me-2"></i>Senarai Semak Permohonan Wakaf (Syarikat)</h4>
        <p class="text-muted">Pemohon/Pewakaf dikehendaki mengemukakan dokumen-dokumen seperti berikut:</p>
        
        <div class="row">
            <div class="col-md-6">
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_borang" id="check_borang" 
                               value="1" {{ old('check_borang') ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_borang">
                            Borang Wujud Wakaf yang telah dilengkapkan
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_ic" id="check_ic" 
                               value="1" {{ old('check_ic') ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_ic">
                            Salinan kad pengenalan 2 ahli lembaga pengarah
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_ssm" id="check_ssm" 
                               value="1" {{ old('check_ssm') ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_ssm">
                            Salinan undang-undang tubuh syarikat dan pendaftaran Suruhanjaya Syarikat Malaysia
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_hakmilik" id="check_hakmilik" 
                               value="1" {{ old('check_hakmilik') ? 'checked' : '' }}>
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
                               value="1" {{ old('check_cukai') ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_cukai">
                            Resit cukai tanah semasa yang telah dijelaskan
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_taksiran" id="check_taksiran" 
                               value="1" {{ old('check_taksiran') ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_taksiran">
                            Resit cukai taksiran semasa yang telah dijelaskan (jika ada)
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_akuan" id="check_akuan" 
                               value="1" {{ old('check_akuan') ? 'checked' : '' }}>
                        <label class="form-check-label" for="check_akuan">
                            Akuan sumpah (SA-81)
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_pelan" id="check_pelan" 
                               value="1" {{ old('check_pelan') ? 'checked' : '' }}>
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
                    <label for="pengesah_1_nama" class="form-label">Nama Pengesah 1 <span class="text-danger">*</span></label>
              <input type="text" class="form-control @error('pengesah_1_nama') is-invalid @enderror" 
                  id="pengesah_1_nama" name="pengesah_1_nama" value="{{ old('pengesah_1_nama') }}" required>
                    @error('pengesah_1_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="pengesah_1_tel" class="form-label">No. Tel Pengesah 1 <span class="text-danger">*</span></label>
              <input type="text" class="form-control @error('pengesah_1_tel') is-invalid @enderror" 
                  id="pengesah_1_tel" name="pengesah_1_tel" value="{{ old('pengesah_1_tel') }}" required pattern="^[0-9]{10,20}$" minlength="10" maxlength="20" title="Masukkan 10 hingga 20 digit telefon">
                    @error('pengesah_1_tel')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="pengesah_2_nama" class="form-label">Nama Pengesah 2</label>
                    <input type="text" class="form-control @error('pengesah_2_nama') is-invalid @enderror" 
                           id="pengesah_2_nama" name="pengesah_2_nama" value="{{ old('pengesah_2_nama') }}">
                    @error('pengesah_2_nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="pengesah_2_tel" class="form-label">No. Tel Pengesah 2</label>
                    <input type="text" class="form-control @error('pengesah_2_tel') is-invalid @enderror" 
                           id="pengesah_2_tel" name="pengesah_2_tel" value="{{ old('pengesah_2_tel') }}">
                    @error('pengesah_2_tel')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
