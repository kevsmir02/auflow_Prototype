@extends('layouts.app')

@section('title', 'Form Creation (Approved)')

@section('content')

@php
    $dashboardRoute = session('role') === 'admin' ? route('admin.dashboard') : route('user.dashboard');
@endphp

<div class="container-fluid mt-4">
    <!-- Logo -->
    <div class="text-center mb-3">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('images/auflog.png') }}" alt="AUFlow Logo" style="height: 48px;">
        </a>
    </div>

    <div class="d-flex justify-content-center gap-4 flex-wrap align-items-start">
        <!-- Main Form Panel -->
        <div class="bg-white shadow-sm rounded p-4" style="width: 950px;">
            <form>
                @php
                    $fields = [
                        ['label' => 'Enter your name', 'type' => 'text', 'col' => 12, 'bg' => true],
                        ['label' => 'ID No.', 'type' => 'text', 'col' => 6],
                        ['label' => 'Email', 'type' => 'email', 'col' => 6],
                        ['label' => 'Program/Department', 'type' => 'text', 'col' => 12, 'bg' => true],
                        ['label' => 'Year/Level', 'type' => 'text', 'col' => 6],
                        ['label' => 'Section', 'type' => 'text', 'col' => 6],
                        ['label' => 'Purpose of Request', 'type' => 'text', 'col' => 12],
                        ['label' => 'Type of document needed', 'type' => 'select', 'col' => 6, 'placeholder' => 'Select an option'],
                        ['label' => 'Number of copies', 'type' => 'number', 'col' => 6],
                        ['label' => 'Preferred Receiving Method', 'type' => 'select', 'col' => 6, 'placeholder' => 'Select a method'],
                        ['label' => 'Request Date of Release', 'type' => 'date', 'col' => 6],
                        ['label' => "Approver's Name", 'type' => 'text', 'col' => 6],
                        ['label' => "Approver's Email", 'type' => 'email', 'col' => 6],
                    ];
                @endphp

                @foreach ($fields as $index => $field)
                    @if ($loop->first || $field['col'] === 12)
                        <div class="mb-3 {{ $field['bg'] ?? false ? 'bg-light p-2 px-3 rounded' : '' }}">
                            <label class="form-label {{ $field['bg'] ?? false ? 'fw-semibold' : '' }} small mb-1">
                                {{ $field['label'] }} <span class="text-danger">*</span>
                            </label>

                            @if ($field['type'] === 'select')
                                <select class="form-select" disabled>
                                    <option selected>{{ $field['placeholder'] ?? 'Select an option' }}</option>
                                </select>
                            @else
                                <input type="{{ $field['type'] }}" class="form-control" disabled>
                            @endif
                        </div>
                    @else
                        @if ($loop->iteration === 2 || $loop->iteration === 5 || $loop->iteration === 10)
                        <div class="row g-3 mb-3">
                        @endif

                            <div class="col-md-{{ $field['col'] }}">
                                <label class="form-label small">{{ $field['label'] }} <span class="text-danger">*</span></label>

                                @if ($field['type'] === 'select')
                                    <select class="form-select" disabled>
                                        <option selected>{{ $field['placeholder'] ?? 'Select an option' }}</option>
                                    </select>
                                @else
                                    <input type="{{ $field['type'] }}" class="form-control" disabled>
                                @endif
                            </div>

                        @if ($loop->iteration === 3 || $loop->iteration === 6 || $loop->iteration === 11)
                        </div>
                        @endif
                    @endif
                @endforeach

                <!-- Image Upload Display -->
                <div class="text-center">
                    <i class="bi bi-image" style="font-size: 1.5rem;"></i>
                    <div class="small text-muted mt-2">Image Upload</div>
                </div>
            </form>
        </div>

        <!-- Sidebar -->
        <div class="bg-white shadow-sm rounded p-3" style="width: 280px;">
            <h6 class="fw-bold mb-3">Actions</h6>

            <div class="d-grid gap-2 mb-3">
                <a href="{{ $dashboardRoute }}" class="btn btn-light btn-sm">Back</a>
                <button class="btn btn-dark btn-sm">View Workflow</button>
                <button class="btn btn-dark btn-sm">Download</button>
                <button class="btn btn-dark btn-sm">Print</button>
                <button class="btn btn-light btn-sm">Export</button>
            </div>

            <hr>

            <div class="small mb-3">
                <h6 class="fw-semibold mb-2">Signature Info</h6>
                <div class="d-flex justify-content-between"><span class="text-muted">Approved By</span><span class="fw-medium">Don David</span></div>
                <div class="d-flex justify-content-between align-items-center"><span class="text-muted">Status</span><span class="text-success"><i class="bi bi-patch-check-fill me-1"></i> Verified</span></div>
                <div class="d-flex justify-content-between"><span class="text-muted">Signed At</span><span class="fw-medium">Apr 17, 2025, 3:14 PM</span></div>
                <div class="d-flex justify-content-between"><span class="text-muted">Key</span><span class="text-muted text-truncate">MIIB...doKv0BH</span></div>
            </div>

            <button class="btn btn-success w-100 btn-sm mb-3" disabled>Approved</button>

            <div class="small">
                <label class="form-label text-muted mb-1">Enter your name:</label>
                <input type="text" class="form-control form-control-sm mb-2" value="Don David" disabled>

                <label class="form-label text-muted mb-1">Signature:</label>
                <div class="bg-light rounded p-2 mb-2 small">
                    d42d 33b3ccaa4de01a5a4<br>QQrXKAQAGH8AGMA15<br>UDAQAB HH2LIDAQAB
                </div>

                <label class="form-label text-muted mb-1">Public Key:</label>
                <div class="bg-light rounded p-2 small">
                    MIIB...AQAB<br>Q9hXKAQAGH8AGmA1SQA<br>CWQABAU3LIDAQB
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
