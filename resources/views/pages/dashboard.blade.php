@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
@php
    $role = session('role', 'user');

    $metrics = [
        ['count' => 1, 'label' => $role === 'admin' ? 'Needs Approval' : 'Uploaded Forms'],
        ['count' => 2, 'label' => 'Submitted Forms'],
        ['count' => 3, 'label' => 'Accepted Forms'],
        ['count' => 4, 'label' => 'Reverted Forms'],
    ];

    $formTiles = [
        ['label' => 'Request for Leave', 'icon' => 'bi-plus-circle', 'color' => '#E8A212'],
        ['label' => 'Expense Reimbursement', 'icon' => 'bi-folder', 'color' => '#354CB7'],
        ['label' => 'Travel Authorization', 'icon' => 'bi-box', 'color' => '#539C43'],
        ['label' => 'Equipment Borrow Form', 'icon' => 'bi-upload', 'color' => '#87AE24'],
        ['label' => 'IT Support Ticket', 'icon' => 'bi-download', 'color' => '#E15F04'],
        ['label' => 'Facility Reservation', 'icon' => 'bi-arrow-repeat', 'color' => '#3C47A9'],
        ['label' => 'Training Enrollment', 'icon' => 'bi-arrow-left-right', 'color' => '#E8A212'],
        ['label' => 'Feedback Form', 'icon' => 'bi-lightbulb', 'color' => '#354CB7'],
        ['label' => 'Incident Report', 'icon' => 'bi-bar-chart-line', 'color' => '#539C43'],
        ['label' => 'Change Request', 'icon' => 'bi-graph-up', 'color' => '#87AE24'],
        ['label' => 'Performance Review', 'icon' => 'bi-graph-down', 'color' => '#E15F04'],
        ['label' => 'User Access Request', 'icon' => 'bi-journal-text', 'color' => '#3C47A9'],
        ['label' => 'Project Proposal', 'icon' => 'bi-archive', 'color' => '#E8A212'],
        ['label' => 'Document Submission', 'icon' => 'bi-file-earmark', 'color' => '#354CB7'],
        ['label' => 'Approval Form', 'icon' => 'bi-pin', 'color' => '#539C43'],
    ];

    if ($role === 'admin') {
        $formTiles[] = ['label' => 'New Form', 'icon' => 'bi-plus', 'color' => '#87AE24'];
    }
@endphp

<div class="container mt-4">

    <!-- Title + Search -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">{{ ucfirst($role) }} Dashboard</h4>
        <input type="text" class="form-control form-control-sm w-25" placeholder="Search forms..." aria-label="Search">
    </div>

    <!-- Metric Cards -->
    <div class="row g-3 mb-5">
        @foreach ($metrics as $metric)
            <div class="col-6 col-md-3">
                <div class="card text-white shadow-sm h-100" style="background-color: #0054A5;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title fw-bold">{{ $metric['count'] }}</h5>
                            <p class="mb-2">{{ $metric['label'] }}</p>
                        </div>
                        <hr class="border-white opacity-50 my-2">
                        <p class="small mb-0 text-white-50">Total Number of Uploaded Forms</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Form Tiles -->
    <h5 class="mb-3 fw-bold">Forms</h5>
    <div class="row g-3">
        @foreach ($formTiles as $tile)
            <div class="col-6 col-md-1-5">
                <div class="tile-card shadow-sm d-flex flex-column align-items-center justify-content-center p-3 text-white rounded"
                     style="background-color: {{ $tile['color'] }}; height: 110px;">
                    
                    @if ($tile['label'] === 'New Form')
                        <a href="{{ route('admin.formbuilder') }}" class="stretched-link text-white text-decoration-none"></a>
                    @endif

                    <div class="form-icon mb-2" style="font-size: 1.5rem;">
                        <i class="bi {{ $tile['icon'] }}"></i>
                    </div>
                    <div class="form-label small text-center fw-semibold">
                        {{ $tile['label'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
