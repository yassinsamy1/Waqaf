@extends('layouts.app')

@section('title', 'Borang Mewujudkan Wakaf')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-plus-circle me-2"></i>Borang Mewujudkan Wakaf</h2>
    <a href="{{ route('waqaf.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-2"></i>Kembali
    </a>
</div>

<!-- Progress Bar -->
<div class="mb-4">
    <div class="progress mb-3" style="height: 20px;">
        <div class="progress-bar progress-bar-striped progress-bar-animated" 
             role="progressbar" id="progressBar" 
             style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            Halaman 1 dari 4
        </div>
    </div>
    
    <!-- Page Indicators -->
    <div class="d-flex justify-content-between">
        <div class="page-indicator active" data-page="1">
            <i class="fas fa-check-square"></i><br>
            <small>Senarai Semak</small>
        </div>
        <div class="page-indicator" data-page="2">
            <i class="fas fa-building"></i><br>
            <small>Maklumat Wakaf</small>
        </div>
        <div class="page-indicator" data-page="3">
            <i class="fas fa-map"></i><br>
            <small>Butiran Harta</small>
        </div>
        <div class="page-indicator" data-page="4">
            <i class="fas fa-users"></i><br>
            <small>Maklumat Orang</small>
        </div>
    </div>
</div>

<!-- Notification Area -->
<div id="formNotification" class="alert alert-danger d-none" role="alert"></div>

<form action="{{ route('waqaf.store') }}" method="POST" id="wakafForm">
    @csrf
    
    <!-- Include Page Components -->
    @include('waqaf.pages.page1-checklist')
    @include('waqaf.pages.page2-wakaf-details')
    @include('waqaf.pages.page3-land-details')
    @include('waqaf.pages.page4-people')

    <!-- Navigation Buttons -->
    <div class="d-flex justify-content-between mt-4">
        <div>
            <a href="{{ route('waqaf.index') }}" class="btn btn-secondary" id="cancelBtn">
                <i class="fas fa-times me-2"></i>Batal
            </a>
            <button type="button" class="btn btn-outline-secondary me-2" id="prevBtn" style="display: none;">
                <i class="fas fa-arrow-left me-2"></i>Sebelumnya
            </button>
        </div>
        
        <div>
            <button type="button" class="btn btn-primary" id="nextBtn">
                Seterusnya<i class="fas fa-arrow-right ms-2"></i>
            </button>
            <button type="submit" class="btn btn-success" id="submitBtn" style="display: none;">
                <i class="fas fa-save me-2"></i>Simpan Permohonan
            </button>
        </div>
    </div>
</form>

<!-- Custom Styles -->
<style>
.form-page {
    display: none;
}

.form-page.active {
    display: block;
}

.page-indicator {
    text-align: center;
    padding: 10px;
    border-radius: 50px;
    background-color: #f8f9fa;
    color: #6c757d;
    cursor: pointer;
    transition: all 0.3s ease;
    min-width: 120px;
}

.page-indicator.active {
    background-color: #007bff;
    color: white;
}

.page-indicator.completed {
    background-color: #28a745;
    color: white;
}

.page-indicator:hover {
    background-color: #e9ecef;
}

.page-indicator.active:hover,
.page-indicator.completed:hover {
    background-color: #0056b3;
}
</style>

<!-- JavaScript for Navigation -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentPage = 1;
    const totalPages = 4;
    
    // Elements
    const progressBar = document.getElementById('progressBar');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    const submitBtn = document.getElementById('submitBtn');
    const pageIndicators = document.querySelectorAll('.page-indicator');
    
    // Initialize
    showPage(currentPage);
    
    // Next button click
    nextBtn.addEventListener('click', function() {
        if (validateCurrentPage()) {
            if (currentPage < totalPages) {
                currentPage++;
                showPage(currentPage);
            }
        }
    });
    
    // Previous button click
    prevBtn.addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    });
    
    // Page indicator clicks
    pageIndicators.forEach(indicator => {
        indicator.addEventListener('click', function() {
            const targetPage = parseInt(this.dataset.page);
            if (targetPage <= currentPage || validatePagesUpTo(targetPage - 1)) {
                currentPage = targetPage;
                showPage(currentPage);
            }
        });
    });
    
    function showPage(page) {
        // Hide all pages
        document.querySelectorAll('.form-page').forEach(p => {
            p.classList.remove('active');
        });
        
        // Show current page
        document.getElementById(`page-${page}`).classList.add('active');
        
        // Update progress bar
        const progress = (page / totalPages) * 100;
        progressBar.style.width = progress + '%';
        progressBar.textContent = `Halaman ${page} dari ${totalPages}`;
        
        // Update page indicators
        pageIndicators.forEach((indicator, index) => {
            indicator.classList.remove('active', 'completed');
            if (index + 1 === page) {
                indicator.classList.add('active');
            } else if (index + 1 < page) {
                indicator.classList.add('completed');
            }
        });
        
        // Update buttons
        prevBtn.style.display = page > 1 ? 'inline-block' : 'none';
        nextBtn.style.display = page < totalPages ? 'inline-block' : 'none';
        submitBtn.style.display = page === totalPages ? 'inline-block' : 'none';
        
        // Scroll to top
        window.scrollTo(0, 0);
    }
    
    function validateCurrentPage() {
        const currentPageElement = document.getElementById(`page-${currentPage}`);
        const requiredFields = currentPageElement.querySelectorAll('input[required], textarea[required]');
        let isValid = true;
        let errorMessages = [];

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('is-invalid');
                isValid = false;
                errorMessages.push(field.labels && field.labels[0] ? field.labels[0].innerText + ' diperlukan.' : 'Medan diperlukan.');
            } else if (field.pattern && field.value.trim()) {
                const regex = new RegExp('^' + field.pattern + '$');
                if (!regex.test(field.value.trim())) {
                    field.classList.add('is-invalid');
                    isValid = false;
                    if (field.id === 'pengesah_1_tel') {
                        errorMessages.push('No. Tel Pengesah 1 mesti mengandungi 10 hingga 20 digit.');
                    } else {
                        errorMessages.push(field.labels && field.labels[0] ? field.labels[0].innerText + ' tidak sah.' : 'Input tidak sah.');
                    }
                } else {
                    field.classList.remove('is-invalid');
                }
            } else {
                field.classList.remove('is-invalid');
            }
        });

        // Validate at least one checkbox checked
        const checkboxes = currentPageElement.querySelectorAll('input[type="checkbox"]');
        let oneChecked = false;
        checkboxes.forEach(box => {
            if (box.checked) oneChecked = true;
        });
        if (checkboxes.length > 0 && !oneChecked) {
            isValid = false;
            errorMessages.push('Sila tandakan sekurang-kurangnya satu kotak semak dokumen.');
        }

        const notification = document.getElementById('formNotification');
        if (!isValid) {
            notification.innerHTML = errorMessages.join('<br>');
            notification.classList.remove('d-none');
        } else {
            notification.classList.add('d-none');
        }

        return isValid;
    }
    
    function validatePagesUpTo(page) {
        for (let i = 1; i <= page; i++) {
            const pageElement = document.getElementById(`page-${i}`);
            const requiredFields = pageElement.querySelectorAll('input[required], textarea[required]');
            
            for (let field of requiredFields) {
                if (!field.value.trim()) {
                    return false;
                }
            }
        }
        return true;
    }
});
</script>
@endsection
