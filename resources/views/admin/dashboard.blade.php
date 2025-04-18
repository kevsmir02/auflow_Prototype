@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-4">

    <!-- Page Title + Search -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">Admin Dashboard</h4>
        <input type="text" class="form-control form-control-sm w-25" placeholder="Search forms..." aria-label="Search">
    </div>

    <!-- Metric Summary Cards -->
    <div class="row g-3 mb-5">
        @php
            $metrics = [
                ['count' => 1, 'label' => 'Needs Approval'],
                ['count' => 2, 'label' => 'Submitted Forms'],
                ['count' => 3, 'label' => 'Accepted Forms'],
                ['count' => 4, 'label' => 'Reverted Forms'],
            ];
        @endphp

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

    <!-- Form Tiles Section -->
    <h5 class="mb-3 fw-bold">Forms</h5>

    @php
        $formColors = [
            '#E8A212', '#354CB7', '#539C43', '#87AE24',
            '#E15F04', '#3C47A9', '#E8A212', '#354CB7',
            '#539C43', '#87AE24', '#E15F04', '#3C47A9',
            '#E8A212', '#354CB7', '#539C43', '#87AE24'
        ];

        $formIcons = [
            'bi-plus-circle', 'bi-folder', 'bi-box', 'bi-upload',
            'bi-download', 'bi-arrow-repeat', 'bi-arrow-left-right', 'bi-lightbulb',
            'bi-bar-chart-line', 'bi-graph-up', 'bi-graph-down', 'bi-journal-text',
            'bi-archive', 'bi-file-earmark', 'bi-pin', 'bi-plus'
        ];

        $formLabels = [
            'Request for Leave', 'Expense Reimbursement', 'Travel Authorization',
            'Equipment Borrow Form', 'IT Support Ticket', 'Facility Reservation',
            'Training Enrollment', 'Feedback Form', 'Incident Report',
            'Change Request', 'Performance Review', 'User Access Request',
            'Project Proposal', 'Document Submission', 'Approval Form', 'New Form'
        ];
    @endphp

    <div class="row g-3">
        @for ($i = 0; $i < 16; $i++)
            <div class="col-6 col-md-1-5">
                @php $isNew = $formLabels[$i] === 'New Form'; @endphp

                <div class="tile-card shadow-sm d-flex flex-column align-items-center justify-content-center p-3 text-white rounded"
                    style="background-color: {{ $formColors[$i % count($formColors)] }}; height: 110px;">
                    
                    @if ($isNew)
                        <a href="{{ route('admin.formbuilder') }}" class="stretched-link text-white text-decoration-none"></a>
                    @endif

                    <div class="form-icon mb-2" style="font-size: 1.5rem;">
                        <i class="bi {{ $formIcons[$i] }}"></i>
                    </div>
                    <div class="form-label small text-center fw-semibold">
                        {{ $formLabels[$i] }}
                    </div>
                </div>
            </div>
        @endfor
    </div>

</div>
@endsection
