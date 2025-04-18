@extends('layouts.app')

@section('title', 'Form Builder')

@section('content')
<div class="container-fluid mt-4">
    <div class="row gx-3">

        <!-- Left Sidebar -->
        <div class="col-md-3">
            <div class="bg-white rounded shadow-sm p-3 small h-100">
                <h6 class="fw-bold text-uppercase mb-3">Layout</h6>
                <ul class="list-unstyled mb-4">
                    <li class="mb-2"><i class="bi bi-layout-text-sidebar-reverse me-2"></i> Section</li>
                    <li class="mb-2"><i class="bi bi-file-earmark-lock2 me-2"></i> Read-Only Text</li>
                </ul>

                <h6 class="fw-bold text-uppercase mb-3">Basic Fields</h6>
                <ul class="list-unstyled">
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

        <!-- Center Canvas -->
        <div class="col-md-6">
            <div class="bg-white rounded shadow-sm p-3 h-100">
                <!-- Header with Toggle -->
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="fw-bold mb-0">Form Design</h6>
                    <div class="form-check form-switch small">
                        <input class="form-check-input" type="checkbox" id="previewToggle">
                        <label class="form-check-label" for="previewToggle">Preview</label>
                    </div>
                </div>
                <hr class="my-2">

                <!-- Preview Block -->
                <div class="p-3 bg-light rounded small">
                    <label class="form-label mb-1">Enter your name</label>
                    <input type="text" class="form-control form-control-sm" disabled placeholder="Text Field">
                </div>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="col-md-3">
            <div class="bg-white rounded shadow-sm p-3 small h-100">

                <!-- Tabs -->
                <div class="mb-3">
                    <div class="btn-group w-100" role="group">
                        <button type="button" class="btn btn-outline-secondary btn-sm">Responses</button>
                        <button type="button" class="btn btn-primary btn-sm">Form</button>
                        <a href="{{ route('admin.workflow') }}" class="btn btn-outline-secondary btn-sm">Workflow</a>
                        <a href="{{ route('form.publish') }}"
                           class="btn {{ request()->routeIs('form.publish') ? 'btn-primary' : 'btn-outline-secondary' }} btn-sm">
                            Publish
                        </a>
                    </div>
                </div>

                <hr class="my-2">

                <!-- Secondary Actions -->
                <div class="d-flex flex-column gap-2">
                    <button class="btn btn-outline-secondary btn-sm w-100">Share Form</button>
                    <button class="btn btn-outline-secondary btn-sm w-100">Form Settings</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Toggle to Preview -->
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
