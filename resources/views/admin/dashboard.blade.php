@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-4">
    <!-- PAGE TITLE + SEARCH -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold">Homepage</h4>
        <input type="text" class="form-control w-25" placeholder="Search..." />
    </div>

    <!-- METRIC CARDS -->
    <div class="row g-3">
        @php
            $metrics = [
                ['count' => 1, 'label' => 'Needs Approval'],
                ['count' => 2, 'label' => 'Submitted Forms'],
                ['count' => 3, 'label' => 'Accepted Forms'],
                ['count' => 4, 'label' => 'Reverted Forms'],
            ];
        @endphp

        @foreach ($metrics as $metric)
            <div class="col-6 col-md-6">
                <div class="card text-white shadow-sm" style="background-color: #0054A5;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $metric['count'] }}</h5>
                        <p class="fw-semibold">{{ $metric['label'] }}</p>
                        <hr class="border-white opacity-50">
                        <p class="small mb-0">Total Number of Uploaded Forms to Present</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- FORM CARDS -->
    <h5 class="mt-5 mb-3 fw-semibold">Forms</h5>

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
            'Request for Leave',
            'Expense Reimbursement',
            'Travel Authorization',
            'Equipment Borrow Form',
            'IT Support Ticket',
            'Facility Reservation',
            'Training Enrollment',
            'Feedback Form',
            'Incident Report',
            'Change Request',
            'Performance Review',
            'User Access Request',
            'Project Proposal',
            'Document Submission',
            'Approval Form',
            'New Form'
        ];
    @endphp

    <div class="row g-3">
        @for ($i = 0; $i < 16; $i++)
            <div class="col-6 col-md-1-5">
                @if ($formLabels[$i] === 'New Form')
                    <a href="{{ route('admin.formbuilder') }}" class="text-decoration-none">
                        <div class="tile-card shadow-sm"
                             style="background-color: {{ $formColors[$i % count($formColors)] }};">
                            <div class="form-icon">
                                <i class="bi {{ $formIcons[$i] }}"></i>
                            </div>
                            <div class="form-label text-white">{{ $formLabels[$i] }}</div>
                        </div>
                    </a>
                @else
                    <div class="tile-card shadow-sm"
                         style="background-color: {{ $formColors[$i % count($formColors)] }};">
                        <div class="form-icon">
                            <i class="bi {{ $formIcons[$i] }}"></i>
                        </div>
                        <div class="form-label text-white">{{ $formLabels[$i] }}</div>
                    </div>
                @endif
            </div>
        @endfor
    </div>
</div>
@endsection
