@extends('layouts.app')

@section('title', 'Senarai Permohonan Wakaf')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-list me-2"></i>Senarai Permohonan Wakaf</h2>
    <a href="{{ route('waqaf.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>Permohonan Baru
    </a>
</div>

@if($applications->count() > 0)
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>No. Syarikat</th>
                            <th>Mukim</th>
                            <th>Daerah</th>
                            <!-- Jenis Wakaf column removed -->
                            <th>Tarikh Lafaz</th>
                            <th>Dibuat</th>
                            <th>Dikemaskini</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($applications as $index => $application)
                        <tr>
                            <td>{{ $applications->firstItem() + $index }}</td>
                            <!-- Hidden ID for actions but not displayed -->
                            <td>{{ $application->no_syarikat }}</td>
                            <td>{{ $application->mukim }}</td>
                            <td>{{ $application->daerah }}</td>
                            <!-- Jenis Wakaf cell removed -->
                            <td>{{ $application->tarikh_lafaz ? $application->tarikh_lafaz->format('d/m/Y') : '-' }}</td>
                            <td>
                                <small class="text-muted">
                                    {{ $application->created_at->setTimezone('Asia/Kuala_Lumpur')->format('d/m/Y') }}<br>
                                    <span class="text-secondary">{{ $application->created_at->setTimezone('Asia/Kuala_Lumpur')->format('H:i') }}</span>
                                </small>
                            </td>
                            <td>
                                <small class="text-muted">
                                    {{ $application->updated_at->setTimezone('Asia/Kuala_Lumpur')->format('d/m/Y') }}<br>
                                    <span class="text-secondary">{{ $application->updated_at->setTimezone('Asia/Kuala_Lumpur')->format('H:i') }}</span>
                                </small>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('waqaf.show', $application) }}" class="btn btn-sm btn-outline-info" title="Lihat">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('waqaf.edit', $application) }}" class="btn btn-sm btn-outline-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('waqaf.print', $application) }}" class="btn btn-sm btn-outline-success" title="Cetak">
                                        <i class="fas fa-print"></i>
                                    </a>
                                    <form action="{{ route('waqaf.destroy', $application) }}" method="POST" class="d-inline" 
                                          onsubmit="return confirm('Adakah anda pasti untuk memadam permohonan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Padam">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center">
                {{ $applications->links() }}
            </div>
        </div>
    </div>
@else
    <div class="text-center py-5">
        <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
        <h4 class="text-muted">Tiada Permohonan Wakaf</h4>
        <p class="text-muted">Belum ada permohonan wakaf yang dibuat.</p>
        <a href="{{ route('waqaf.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Buat Permohonan Pertama
        </a>
    </div>
@endif
@endsection
