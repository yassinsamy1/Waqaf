@extends('layouts.app')

@section('title', 'Butiran Permohonan Wakaf')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-eye me-2"></i>Butiran Permohonan Wakaf</h2>
    <div>
        <a href="{{ route('waqaf.edit', $waqaf) }}" class="btn btn-warning">
            <i class="fas fa-edit me-2"></i>Edit
        </a>
        <a href="{{ route('waqaf.print', $waqaf) }}" class="btn btn-success">
            <i class="fas fa-print me-2"></i>Cetak
        </a>
        <a href="{{ route('waqaf.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Kembali
        </a>
    </div>
</div>

<!-- Basic Info -->
<div class="form-section">
    <h4><i class="fas fa-info-circle me-2"></i>Maklumat Asas</h4>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-borderless">
                <tr>
                    <td width="40%"><strong>ID Permohonan:</strong></td>
                    <td>{{ $waqaf->id }}</td>
                </tr>
                <tr>
                    <td><strong>No. Syarikat:</strong></td>
                    <td>{{ $waqaf->no_syarikat }}</td>
                </tr>
                <tr>
                    <td><strong>Tarikh Lafaz:</strong></td>
                    <td>{{ $waqaf->tarikh_lafaz ? $waqaf->tarikh_lafaz->format('d/m/Y') : '-' }}</td>
                </tr>
                <tr>
                    <td><strong>Jenis Wakaf:</strong></td>
                    <td>
                        @if($waqaf->wakaf_khas_detail)
                            <div class="mb-2">
                                <span class="badge bg-primary">Wakaf Khas:</span> {{ $waqaf->wakaf_khas_detail }}
                            </div>
                        @endif
                        @if($waqaf->wakaf_saraan_detail)
                            <div class="mb-2">
                                <span class="badge bg-success">Wakaf Saraan:</span> {{ $waqaf->wakaf_saraan_detail }}
                            </div>
                        @endif
                        @if($waqaf->wakaf_am_detail)
                            <div class="mb-2">
                                <span class="badge bg-info">Wakaf Am:</span> {{ $waqaf->wakaf_am_detail }}
                            </div>
                        @endif
                        @if(!$waqaf->wakaf_khas_detail && !$waqaf->wakaf_saraan_detail && !$waqaf->wakaf_am_detail)
                            <span class="text-muted">Tidak diisi</span>
                        @endif
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-borderless">
                <tr>
                    <td width="40%"><strong>Mukim:</strong></td>
                    <td>{{ $waqaf->mukim }}</td>
                </tr>
                <tr>
                    <td><strong>Daerah:</strong></td>
                    <td>{{ $waqaf->daerah }}</td>
                </tr>
                <tr>
                    <td><strong>Tarikh Dibuat:</strong></td>
                    <td>{{ $waqaf->created_at->format('d/m/Y H:i') }}</td>
                </tr>
                <tr>
                    <td><strong>Terakhir Dikemaskini:</strong></td>
                    <td>{{ $waqaf->updated_at->format('d/m/Y H:i') }}</td>
                </tr>
            </table>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <table class="table table-borderless">
                <tr>
                    <td width="20%"><strong>Alamat:</strong></td>
                    <td>{{ $waqaf->alamat }}</td>
                </tr>
                <tr>
                    <td><strong>Tujuan:</strong></td>
                    <td>{{ $waqaf->tujuan }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Checklist -->
<div class="form-section">
    <h4><i class="fas fa-check-square me-2"></i>Senarai Semak Dokumen</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="d-flex align-items-center mb-2">
                <i class="fas {{ $waqaf->check_borang ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }} me-2"></i>
                <span>Borang Wujud Wakaf</span>
            </div>
            <div class="d-flex align-items-center mb-2">
                <i class="fas {{ $waqaf->check_ic ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }} me-2"></i>
                <span>Salinan kad pengenalan 2 ahli lembaga pengarah</span>
            </div>
            <div class="d-flex align-items-center mb-2">
                <i class="fas {{ $waqaf->check_ssm ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }} me-2"></i>
                <span>Dokumen SSM</span>
            </div>
            <div class="d-flex align-items-center mb-2">
                <i class="fas {{ $waqaf->check_hakmilik ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }} me-2"></i>
                <span>Hakmilik asal</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex align-items-center mb-2">
                <i class="fas {{ $waqaf->check_cukai ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }} me-2"></i>
                <span>Resit cukai tanah</span>
            </div>
            <div class="d-flex align-items-center mb-2">
                <i class="fas {{ $waqaf->check_taksiran ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }} me-2"></i>
                <span>Resit cukai taksiran</span>
            </div>
            <div class="d-flex align-items-center mb-2">
                <i class="fas {{ $waqaf->check_akuan ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }} me-2"></i>
                <span>Akuan sumpah (SA-81)</span>
            </div>
            <div class="d-flex align-items-center mb-2">
                <i class="fas {{ $waqaf->check_pelan ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }} me-2"></i>
                <span>Salinan pelan tanah</span>
            </div>
        </div>
    </div>
</div>

<!-- Land Details -->
<div class="form-section">
    <h4><i class="fas fa-map me-2"></i>Butiran Tanah</h4>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-borderless">
                <tr>
                    <td width="40%"><strong>Hakmilik:</strong></td>
                    <td>{{ $waqaf->hakmilik }}</td>
                </tr>
                <tr>
                    <td><strong>No Lot:</strong></td>
                    <td>{{ $waqaf->no_lot }}</td>
                </tr>
                <tr>
                    <td><strong>Luas Tanah:</strong></td>
                    <td>{{ $waqaf->luas_tanah }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-borderless">
                <tr>
                    <td width="40%"><strong>Bhg Diwakafkan:</strong></td>
                    <td>{{ $waqaf->bhg_diwakaf ?: '-' }}</td>
                </tr>
                <tr>
                    <td><strong>Luas Diwakafkan:</strong></td>
                    <td>{{ $waqaf->luas_diwakaf ?: '-' }}</td>
                </tr>
                <tr>
                    <td><strong>Baki Tanah:</strong></td>
                    <td>{{ $waqaf->baki_tanah ?: '-' }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Directors -->
<div class="form-section">
    <h4><i class="fas fa-users me-2"></i>Ahli Lembaga Pengarah</h4>
    <div class="row">
        <div class="col-md-6">
            <h6 class="text-primary">Pengarah 1</h6>
            <table class="table table-borderless">
                <tr>
                    <td width="30%"><strong>Nama:</strong></td>
                    <td>{{ $waqaf->pengarah_1_nama }}</td>
                </tr>
                <tr>
                    <td><strong>No K/P:</strong></td>
                    <td>{{ $waqaf->pengarah_1_ic }}</td>
                </tr>
                <tr>
                    <td><strong>Tarikh:</strong></td>
                    <td>{{ $waqaf->pengarah_1_tarikh ? $waqaf->pengarah_1_tarikh->format('d/m/Y') : '-' }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <h6 class="text-primary">Pengarah 2</h6>
            <table class="table table-borderless">
                <tr>
                    <td width="30%"><strong>Nama:</strong></td>
                    <td>{{ $waqaf->pengarah_2_nama }}</td>
                </tr>
                <tr>
                    <td><strong>No K/P:</strong></td>
                    <td>{{ $waqaf->pengarah_2_ic }}</td>
                </tr>
                <tr>
                    <td><strong>Tarikh:</strong></td>
                    <td>{{ $waqaf->pengarah_2_tarikh ? $waqaf->pengarah_2_tarikh->format('d/m/Y') : '-' }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Witnesses -->
@if($waqaf->saksi_1_nama || $waqaf->saksi_2_nama)
<div class="form-section">
    <h4><i class="fas fa-user-check me-2"></i>Saksi</h4>
    <div class="row">
        @if($waqaf->saksi_1_nama)
        <div class="col-md-6">
            <h6 class="text-primary">Saksi 1</h6>
            <table class="table table-borderless">
                <tr>
                    <td width="30%"><strong>Nama:</strong></td>
                    <td>{{ $waqaf->saksi_1_nama }}</td>
                </tr>
                <tr>
                    <td><strong>No K/P:</strong></td>
                    <td>{{ $waqaf->saksi_1_ic ?: '-' }}</td>
                </tr>
                <tr>
                    <td><strong>Tarikh:</strong></td>
                    <td>{{ $waqaf->saksi_1_tarikh ? $waqaf->saksi_1_tarikh->format('d/m/Y') : '-' }}</td>
                </tr>
            </table>
        </div>
        @endif
        
        @if($waqaf->saksi_2_nama)
        <div class="col-md-6">
            <h6 class="text-primary">Saksi 2</h6>
            <table class="table table-borderless">
                <tr>
                    <td width="30%"><strong>Nama:</strong></td>
                    <td>{{ $waqaf->saksi_2_nama }}</td>
                </tr>
                <tr>
                    <td><strong>No K/P:</strong></td>
                    <td>{{ $waqaf->saksi_2_ic ?: '-' }}</td>
                </tr>
                <tr>
                    <td><strong>Tarikh:</strong></td>
                    <td>{{ $waqaf->saksi_2_tarikh ? $waqaf->saksi_2_tarikh->format('d/m/Y') : '-' }}</td>
                </tr>
            </table>
        </div>
        @endif
    </div>
</div>
@endif

<!-- Judge -->
@if($waqaf->hakim_nama)
<div class="form-section">
    <h4><i class="fas fa-gavel me-2"></i>Hakim / Pesuruhjaya</h4>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-borderless">
                <tr>
                    <td width="30%"><strong>Nama:</strong></td>
                    <td>{{ $waqaf->hakim_nama }}</td>
                </tr>
                <tr>
                    <td><strong>No K/P:</strong></td>
                    <td>{{ $waqaf->hakim_ic ?: '-' }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endif

<!-- Confirmer Details -->
@if($waqaf->pengesah_1_nama || $waqaf->pengesah_2_nama)
<div class="form-section">
    <h4><i class="fas fa-user-friends me-2"></i>Pengesah</h4>
    <div class="row">
        @if($waqaf->pengesah_1_nama)
        <div class="col-md-6">
            <h6 class="text-primary">Pengesah 1</h6>
            <table class="table table-borderless">
                <tr>
                    <td width="30%"><strong>Nama:</strong></td>
                    <td>{{ $waqaf->pengesah_1_nama }}</td>
                </tr>
                <tr>
                    <td><strong>No Tel:</strong></td>
                    <td>{{ $waqaf->pengesah_1_tel ?: '-' }}</td>
                </tr>
            </table>
        </div>
        @endif
        
        @if($waqaf->pengesah_2_nama)
        <div class="col-md-6">
            <h6 class="text-primary">Pengesah 2</h6>
            <table class="table table-borderless">
                <tr>
                    <td width="30%"><strong>Nama:</strong></td>
                    <td>{{ $waqaf->pengesah_2_nama }}</td>
                </tr>
                <tr>
                    <td><strong>No Tel:</strong></td>
                    <td>{{ $waqaf->pengesah_2_tel ?: '-' }}</td>
                </tr>
            </table>
        </div>
        @endif
    </div>
</div>
@endif
@endsection
