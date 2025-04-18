@extends('layouts.app')

@section('title', 'Form Preview')

@section('content')
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center align-items-start gap-4 flex-wrap">

        <!-- Form Preview Container -->
        <div class="bg-white shadow-sm rounded p-4" style="width: 750px; font-size: 0.9rem;">
            
            <!-- Logo -->
            <div class="text-center mb-4">
                <img src="{{ asset('images/auflog.png') }}" alt="AUFlow Logo" style="height: 60px;">
            </div>

            <!-- Form Content -->
            <form>
                <!-- Top Single Field -->
                <div class="mb-3 bg-light p-2 px-3 rounded">
                    <label class="form-label fw-semibold small mb-1">Enter your name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" disabled>
                </div>

                <!-- Two Col Row -->
                <div class="row g-2 mb-3">
                    <div class="col-md-6">
                        <label class="form-label small">ID No. <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control form-control-sm" disabled>
                    </div>
                </div>

                <!-- Program -->
                <div class="mb-3 bg-light p-2 px-3 rounded">
                    <label class="form-label fw-semibold small mb-1">Program / Department <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" disabled>
                </div>

                <!-- Year + Section -->
                <div class="row g-2 mb-3">
                    <div class="col-md-6">
                        <label class="form-label small">Year / Level <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small">Section <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" disabled>
                    </div>
                </div>

                <!-- Purpose -->
                <div class="mb-3">
                    <label class="form-label small">Purpose of Request <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" disabled>
                </div>

                <!-- Document Type + Copies -->
                <div class="row g-2 mb-3">
                    <div class="col-md-6">
                        <label class="form-label small">Type of Document Needed <span class="text-danger">*</span></label>
                        <select class="form-select form-select-sm" disabled>
                            <option selected>Select an option</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small">Number of Copies <span class="text-danger">*</span></label>
                        <input type="number" class="form-control form-control-sm" disabled>
                    </div>
                </div>

                <!-- Method + Date -->
                <div class="row g-2 mb-3">
                    <div class="col-md-6">
                        <label class="form-label small">Preferred Receiving Method <span class="text-danger">*</span></label>
                        <select class="form-select form-select-sm" disabled>
                            <option selected>Select a method</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small">Request Date of Release <span class="text-danger">*</span></label>
                        <input type="date" class="form-control form-control-sm" disabled>
                    </div>
                </div>

                <!-- Approver Info -->
                <div class="row g-2 mb-4">
                    <div class="col-md-6">
                        <label class="form-label small">Approver's Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small">Approver's Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control form-control-sm" disabled>
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="text-center">
                    <i class="bi bi-image" style="font-size: 1.4rem;"></i>
                    <div class="small text-muted mt-1">Image Upload</div>
                </div>
            </form>
        </div>

        <!-- Action Sidebar -->
        <div class="bg-white shadow-sm rounded p-3" style="width: 220px; margin-top: 10px;">
            <h6 class="fw-semibold mb-3">Actions</h6>
            <a href="{{ route('admin.formbuilder') }}" class="btn btn-outline-secondary btn-sm w-100 mb-2">Edit</a>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm w-100 mb-2">Done</a>
            <button class="btn btn-danger btn-sm w-100">Delete</button>
        </div>

    </div>
</div>
@endsection
