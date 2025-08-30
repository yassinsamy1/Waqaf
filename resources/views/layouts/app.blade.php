<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Permohonan Wakaf - MAIPK')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .header-logo {
            max-height: 80px;
        }
        .form-section {
            border: 1px solid #dee2e6;
            border-radius: 0.375rem;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            background-color: #f8f9fa;
        }
        .form-section h4 {
            color: #0d6efd;
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }
        .checkbox-item {
            margin-bottom: 0.5rem;
        }
        @media print {
            .no-print {
                display: none !important;
            }
            .container {
                max-width: none !important;
                padding: 0;
            }
            .form-section {
                border: 1px solid #000;
                margin-bottom: 1rem;
                background-color: white !important;
                -webkit-print-color-adjust: exact;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="container-fluid">
        <header class="no-print bg-primary text-white py-3 mb-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <a href="{{ route('waqaf.index') }}" class="text-decoration-none text-white">
                            <h1 class="h3 mb-0">
                                <i class="fas fa-mosque me-2"></i>
                                Sistem Permohonan Wakaf - MAIPK
                            </h1>
                            <small>Majlis Agama Islam dan Adat Melayu Perak</small>
                        </a>
                    </div>
                    <div class="col-md-4 text-end">
                        <a href="{{ route('waqaf.index') }}">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODAiIGhlaWdodD0iODAiIHZpZXdCb3g9IjAgMCA4MCA4MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iNDAiIGN5PSI0MCIgcj0iNDAiIGZpbGw9IiNGRkQ3MDAiLz4KPHN2ZyB4PSIyMCIgeT0iMjAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIj4KPHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDJMMTMuMDkgOC4yNkwyMSA5TDEzLjA5IDE1Ljc0TDEyIDIyTDEwLjkxIDE1Ljc0TDMgOUwxMC45MSA4LjI2TDEyIDJaIiBmaWxsPSIjMDA2NjAwIi8+Cjwvc3ZnPgo8L3N2Zz4KPC9zdmc+" alt="MAIPK Logo" class="header-logo" style="cursor: pointer;">
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show no-print" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show no-print" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
