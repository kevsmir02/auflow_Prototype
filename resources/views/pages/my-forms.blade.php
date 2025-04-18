@extends('layouts.app')

@section('title', 'My Forms')

@section('content')
<div class="container mt-4">

    <!-- Header + Tabs -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold mb-0">My Forms</h4>
        <div class="btn-group">
            <button class="btn btn-outline-primary active" id="tab-submitted">Submitted</button>
            <button class="btn btn-outline-primary" id="tab-drafts">Draft (2)</button>
        </div>
    </div>

    @php
        $submittedForms = [
            ['title' => 'Request for Vehicle Use', 'date' => 'Mar 11, 2025', 'elapsed' => '2 days', 'status' => 'In Progress', 'badge' => 'warning text-dark'],
            ['title' => 'Facilities Reservation', 'date' => 'Mar 08, 2025', 'elapsed' => '5 days', 'status' => 'Complete', 'badge' => 'success'],
            ['title' => 'Equipment Checkout', 'date' => 'Mar 06, 2025', 'elapsed' => '7 days', 'status' => 'Complete', 'badge' => 'success'],
        ];

        $draftForms = [
            ['title' => 'Training Request Form', 'date' => 'Mar 12, 2025', 'elapsed' => '1 day'],
            ['title' => 'Leave of Absence', 'date' => 'Mar 09, 2025', 'elapsed' => '4 days'],
        ];
    @endphp

    <!-- Submitted Forms Table -->
    <div id="submitted-table" class="bg-white rounded shadow-sm p-4" style="min-height: 400px;">
        <div class="table-responsive">
            <table class="table table-borderless align-middle mb-0">
                <thead class="border-bottom text-secondary small text-uppercase">
                    <tr>
                        <th>Form</th>
                        <th>Date Submitted</th>
                        <th>Time Elapsed</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="small">
                    @foreach ($submittedForms as $form)
                        <tr class="border-bottom">
                            <td>{{ $form['title'] }}</td>
                            <td>{{ $form['date'] }}</td>
                            <td>{{ $form['elapsed'] }}</td>
                            <td>
                                <span class="badge bg-{{ $form['badge'] }}">{{ $form['status'] }}</span>
                            </td>
                            <td class="text-center">
                                <i class="bi bi-three-dots-vertical" role="button" title="Options"></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Draft Forms Table -->
    <div id="drafts-table" class="bg-white rounded shadow-sm p-4 d-none" style="min-height: 400px;">
        <div class="table-responsive">
            <table class="table table-borderless align-middle mb-0">
                <thead class="border-bottom text-secondary small text-uppercase">
                    <tr>
                        <th>Form</th>
                        <th>Draft Created</th>
                        <th>Time Elapsed</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="small">
                    @foreach ($draftForms as $draft)
                        <tr class="border-bottom">
                            <td>{{ $draft['title'] }}</td>
                            <td>{{ $draft['date'] }}</td>
                            <td>{{ $draft['elapsed'] }}</td>
                            <td class="text-center">
                                <i class="bi bi-trash text-danger" role="button" title="Delete"></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tab Switching -->
<script>
    const submittedBtn = document.getElementById('tab-submitted');
    const draftsBtn = document.getElementById('tab-drafts');
    const submittedTable = document.getElementById('submitted-table');
    const draftsTable = document.getElementById('drafts-table');

    submittedBtn.addEventListener('click', () => {
        submittedBtn.classList.add('active');
        draftsBtn.classList.remove('active');
        submittedTable.classList.remove('d-none');
        draftsTable.classList.add('d-none');
    });

    draftsBtn.addEventListener('click', () => {
        draftsBtn.classList.add('active');
        submittedBtn.classList.remove('active');
        draftsTable.classList.remove('d-none');
        submittedTable.classList.add('d-none');
    });
</script>
@endsection
