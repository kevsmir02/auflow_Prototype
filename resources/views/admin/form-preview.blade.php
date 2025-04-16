@extends('layouts.app')

@section('title', 'Form Preview')

@section('content')
<div class="container-fluid mt-4">
    <div class="row align-items-start">
        <!-- Left: Form Preview (centered by offset) -->
        <div class="col-lg-7 offset-lg-2">
            <div class="bg-white p-4 shadow-sm rounded" style="max-width: 820px; margin: 0 auto;">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/auflog.png') }}" alt="AUFlow Logo" style="height: 60px;">
                </div>

                <form>
                    <div class="mb-3 bg-light p-2 px-3 rounded">
                        <label class="form-label fw-semibold small mb-1">
                            Enter your name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" disabled>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label small">
                                ID No. <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" disabled>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small">
                                Email <span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="mb-3 bg-light p-2 px-3 rounded">
                        <label class="form-label fw-semibold small mb-1">
                            Program/Department <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" disabled>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label small">
                                Year/Level <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" disabled>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small">
                                Section <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small">
                            Purpose of Request <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" disabled>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label small">
                                Type of document needed <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" disabled>
                                <option selected>Select an option</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small">
                                Number of copies <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label small">
                                Preferred Receiving Method <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" disabled>
                                <option selected>Select a method</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small">
                                Request Date of Release <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label small">
                                Approver's Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" disabled>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small">
                                Approver's Email <span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="text-center">
                        <i class="bi bi-image" style="font-size: 1.5rem;"></i>
                        <div class="small text-muted mt-2">Image Upload</div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right: Actions -->
        <div class="col-lg-3 d-flex align-items-start mt-3 mt-lg-0">
            <div class="bg-white rounded shadow-sm p-3 w-100" style="max-width: 240px;">
                <h6 class="fw-semibold mb-3">Actions</h6>
                <a href="{{ route('admin.formbuilder') }}" class="btn btn-outline-secondary w-100 mb-2">
                    Edit
                </a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary w-100 mb-2">
                    Done
                </a>
                <button class="btn btn-danger w-100">
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
