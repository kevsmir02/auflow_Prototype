@extends('layouts.app')

@section('title', 'Form Builder')

@section('content')
<div class="container-fluid mt-3">
    <div class="row">

        <!-- Left Sidebar -->
        <div class="col-md-3">
            <div class="bg-white p-3 shadow-sm rounded h-100">
                <h6 class="fw-bold mb-3">LAYOUT</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2"><i class="bi bi-layout-text-sidebar-reverse me-2"></i> Section</li>
                    <li class="mb-2"><i class="bi bi-file-earmark-lock2 me-2"></i> Read-Only Text</li>
                </ul>

                <h6 class="fw-bold mt-4 mb-3">BASIC</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2"><i class="bi bi-fonts me-2"></i> Short Text</li>
                    <li class="mb-2"><i class="bi bi-textarea-resize me-2"></i> Long Text</li>
                    <li class="mb-2"><i class="bi bi-check-square me-2"></i> Checkbox</li>
                    <li class="mb-2"><i class="bi bi-record-circle me-2"></i> Multiple Choice</li>
                    <li class="mb-2"><i class="bi bi-caret-down-square me-2"></i> Dropdown</li>
                    <li class="mb-2"><i class="bi bi-calendar-date me-2"></i> Date</li>
                    <li class="mb-2"><i class="bi bi-123 me-2"></i> Number</li>
                    <li class="mb-2"><i class="bi bi-envelope me-2"></i> Email</li>
                    <li class="mb-2"><i class="bi bi-link-45deg me-2"></i> Link</li>
                    <li class="mb-2"><i class="bi bi-image me-2"></i> Image Upload</li>
                </ul>
            </div>
        </div>

        <!-- Center Form Canvas -->
        <div class="col-md-6">
            <div class="bg-white p-3 shadow-sm rounded h-100 text-center">
                <div class="d-flex justify-content-between mb-3">
                    <h6 class="fw-bold">Design</h6>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="previewToggle">
                        <label class="form-check-label" for="previewToggle">Preview</label>
                    </div>
                </div>
                <hr>
                <div class="p-4 bg-light rounded text-start">
                    <label class="form-label">Enter your name</label>
                    <input type="text" class="form-control" disabled placeholder="Text Field">
                </div>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="col-md-3">
            <div class="bg-white p-3 shadow-sm rounded h-100">
                <div class="mb-3">
                    <div class="btn-group w-100" role="group">
                        <button type="button" class="btn btn-outline-secondary btn-sm">Responses</button>
                        <button type="button" class="btn btn-primary btn-sm">Form</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm">Workflow</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm">Publish</button>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-outline-secondary btn-sm">Share Form</button>
                    <button class="btn btn-outline-secondary btn-sm">Form Settings</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- JS for toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('previewToggle');
        toggle.addEventListener('change', function () {
            if (this.checked) {
                window.location.href = "{{ route('form.preview') }}";
            }
        });
    });
</script>
@endsection
