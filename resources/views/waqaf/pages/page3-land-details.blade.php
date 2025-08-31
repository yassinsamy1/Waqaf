<!-- Page 3: Land Details -->
<div class="form-page" id="page-3">
    <div class="form-section">
        <h4><i class="fas fa-map me-2"></i>Butiran Harta Diwakafkan</h4>
        
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="mukim" class="form-label">Mukim <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('mukim') is-invalid @enderror" 
                           id="mukim" name="mukim" value="{{ old('mukim') }}" required>
                    @error('mukim')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="daerah" class="form-label">Daerah <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('daerah') is-invalid @enderror" 
                           id="daerah" name="daerah" value="{{ old('daerah') }}" required>
                    @error('daerah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="hakmilik" class="form-label">Jenis & No. Hakmilik <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('hakmilik') is-invalid @enderror" 
                           id="hakmilik" name="hakmilik" value="{{ old('hakmilik') }}" required>
                    @error('hakmilik')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="no_lot" class="form-label">No Lot / Plot <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('no_lot') is-invalid @enderror" 
                           id="no_lot" name="no_lot" value="{{ old('no_lot') }}" required>
                    @error('no_lot')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="luas_tanah" class="form-label">Luas Tanah <span class="text-danger">*</span></label>
              <input type="text" class="form-control @error('luas_tanah') is-invalid @enderror" 
                  id="luas_tanah" name="luas_tanah" value="{{ old('luas_tanah') }}" pattern="\d{3,20}" title="Hanya nombor 3-20 digit" required>
                    @error('luas_tanah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="bhg_diwakaf" class="form-label">Bhg Diwakafkan</label>
                    <input type="text" class="form-control @error('bhg_diwakaf') is-invalid @enderror" 
                           id="bhg_diwakaf" name="bhg_diwakaf" value="{{ old('bhg_diwakaf') }}">
                    @error('bhg_diwakaf')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="luas_diwakaf" class="form-label">Luas Diwakafkan</label>
                    <input type="text" class="form-control @error('luas_diwakaf') is-invalid @enderror" 
                           id="luas_diwakaf" name="luas_diwakaf" value="{{ old('luas_diwakaf') }}">
                    @error('luas_diwakaf')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="baki_tanah" class="form-label">Baki Bahagian Tanah Selepas Diwakafkan</label>
                    <input type="text" class="form-control @error('baki_tanah') is-invalid @enderror" 
                           id="baki_tanah" name="baki_tanah" value="{{ old('baki_tanah') }}">
                    @error('baki_tanah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
