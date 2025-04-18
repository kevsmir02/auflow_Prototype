@extends('layouts.app')

@section('title', 'Form Creation (Approved)')

@section('content')
<div class="container-fluid mt-4">
    <!-- Logo Centered -->
    <div class="text-center mb-3">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('images/auflog.png') }}" alt="AUFlow Logo" style="height: 48px;">
        </a>
    </div>

    <div class="d-flex justify-content-center gap-4 flex-wrap align-items-start">
        <!-- Form Panel -->
        <div class="bg-white shadow-sm rounded p-4" style="width: 950px;">
            <form>
                <!-- Top field -->
                <div class="mb-3 bg-light p-2 px-3 rounded">
                    <label class="form-label fw-semibold small mb-1">Enter your name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" disabled>
                </div>

                <!-- ID & Email -->
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label small">ID No. <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" disabled>
                    </div>
                </div>

                <!-- Program -->
                <div class="mb-3 bg-light p-2 px-3 rounded">
                    <label class="form-label fw-semibold small mb-1">Program/Department <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" disabled>
                </div>

                <!-- Year/Section -->
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label small">Year/Level <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small">Section <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>

                <!-- Purpose -->
                <div class="mb-3">
                    <label class="form-label small">Purpose of Request <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" disabled>
                </div>

                <!-- Doc type / Copies -->
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label small">Type of document needed <span class="text-danger">*</span></label>
                        <select class="form-select" disabled>
                            <option selected>Select an option</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small">Number of copies <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" disabled>
                    </div>
                </div>

                <!-- Method / Date -->
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label small">Preferred Receiving Method <span class="text-danger">*</span></label>
                        <select class="form-select" disabled>
                            <option selected>Select a method</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small">Request Date of Release <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" disabled>
                    </div>
                </div>

                <!-- Approver -->
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label class="form-label small">Approver's Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small">Approver's Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" disabled>
                    </div>
                </div>

                <!-- Image Upload Display -->
                <div class="text-center">
                    <i class="bi bi-image" style="font-size: 1.5rem;"></i>
                    <div class="small text-muted mt-2">Image Upload</div>
                </div>
            </form>
        </div>

        <!-- Right Sidebar -->
<div class="bg-white shadow-sm rounded p-3" style="width: 280px;">
    <h6 class="fw-bold mb-3">Actions</h6>

    <div class="d-grid gap-2 mb-3">
        <button class="btn btn-light btn-sm">Back</button>
        <button class="btn btn-dark btn-sm">View Workflow</button>
        <button class="btn btn-dark btn-sm">Download</button>
        <button class="btn btn-dark btn-sm">Print</button>
        <button class="btn btn-light btn-sm">Export</button>
    </div>

    <hr>

    <div class="small mb-3">
        <h6 class="fw-semibold mb-2">Signature Info</h6>
        <div class="d-flex justify-content-between">
            <span class="text-muted">Approved By</span>
            <span class="fw-medium">Don David</span>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <span class="text-muted">Status</span>
            <span class="text-success">
                <i class="bi bi-patch-check-fill me-1"></i> Verified
            </span>
        </div>
        <div class="d-flex justify-content-between">
            <span class="text-muted">Signed At</span>
            <span class="fw-medium">Apr 17, 2025, 3:14 PM</span>
        </div>
        <div class="d-flex justify-content-between">
            <span class="text-muted">Key</span>
            <span class="text-muted text-truncate">MIIB...doKv0BH</span>
        </div>
    </div>

    <button class="btn btn-success w-100 btn-sm mb-3" disabled>Approved</button>

    <div class="small">
        <label class="form-label text-muted mb-1">Enter your name:</label>
        <input type="text" class="form-control form-control-sm mb-2" value="Don David" disabled>

        <label class="form-label text-muted mb-1">Signature:</label>
        <div class="bg-light rounded p-2 mb-2 small">
            d42d 33b3ccaa4de01a5a4<br>
            QQrXKAQAGH8AGMA15<br>
            UDAQAB HH2LIDAQAB
        </div>

        <label class="form-label text-muted mb-1">Public Key:</label>
        <div class="bg-light rounded p-2 small">
            MIIB...AQAB<br>
            Q9hXKAQAGH8AGmA1SQA<br>
            CWQABAU3LIDAQB
        </div>
    </div>
</div>

@endsection
