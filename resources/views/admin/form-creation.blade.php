@extends('layouts.app')

@section('title', 'Form Builder')

@section('content')
<div class="container-fluid mt-4">
    <div class="row gx-3">

        {{-- Left Sidebar --}}
        <div class="col-md-3">
            <div class="bg-white rounded shadow-sm p-3 small h-100">
                <h6 class="fw-bold text-uppercase mb-3">Layout</h6>
                <ul class="list-unstyled mb-4">
                    @foreach ([
                        ['icon' => 'bi-layout-text-sidebar-reverse', 'label' => 'Section'],
                        ['icon' => 'bi-file-earmark-lock2', 'label' => 'Read-Only Text'],
                    ] as $layout)
                        <li class="mb-2">
                            <i class="bi {{ $layout['icon'] }} me-2"></i>{{ $layout['label'] }}
                        </li>
                    @endforeach
                </ul>

                <h6 class="fw-bold text-uppercase mb-3">Basic Fields</h6>
                <ul class="list-unstyled">
                    @foreach ([
                        ['icon' => 'bi-fonts', 'label' => 'Short Text'],
                        ['icon' => 'bi-textarea-resize', 'label' => 'Long Text'],
                        ['icon' => 'bi-check-square', 'label' => 'Checkbox'],
                        ['icon' => 'bi-record-circle', 'label' => 'Multiple Choice'],
                        ['icon' => 'bi-caret-down-square', 'label' => 'Dropdown'],
                        ['icon' => 'bi-calendar-date', 'label' => 'Date'],
                        ['icon' => 'bi-123', 'label' => 'Number'],
                        ['icon' => 'bi-envelope', 'label' => 'Email'],
                        ['icon' => 'bi-link-45deg', 'label' => 'Link'],
                        ['icon' => 'bi-image', 'label' => 'Image Upload'],
                    ] as $field)
                        <li class="mb-2">
                            <i class="bi {{ $field['icon'] }} me-2"></i>{{ $field['label'] }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Center Canvas --}}
        <div class="col-md-6">
            <div class="bg-white rounded shadow-sm p-3 h-100">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="fw-bold mb-0">Form Design</h6>
                    <div class="form-check form-switch small">
                        <input class="form-check-input" type="checkbox" id="previewToggle">
                        <label class="form-check-label" for="previewToggle">Preview</label>
                    </div>
                </div>
                <hr class="my-2">

                <div class="p-3 bg-light rounded small">
                    <label class="form-label mb-1">Enter your name</label>
                    <input type="text" class="form-control form-control-sm" disabled placeholder="Text Field">
                </div>
            </div>
        </div>

        {{-- Right Sidebar --}}
        <div class="col-md-3">
            <div class="bg-white rounded shadow-sm p-3 small h-100">

                {{-- Tabs --}}
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

                {{-- Actions --}}
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-secondary btn-sm w-100">Share Form</button>
                    <button class="btn btn-outline-secondary btn-sm w-100">Form Settings</button>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- JS: Toggle to Preview --}}
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
