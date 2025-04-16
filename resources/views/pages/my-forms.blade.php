@extends('layouts.app')

@section('title', 'My Forms')

@section('content')
<div class="container mt-4">
    <!-- Tabs -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="btn-group">
            <button class="btn btn-outline-primary active" id="tab-submitted">Submitted</button>
            <button class="btn btn-outline-primary" id="tab-drafts">Draft (2)</button>
        </div>
    </div>

    <!-- Submitted Forms Table -->
    <div id="submitted-table" class="bg-white rounded shadow p-3" style="min-height: 400px;">
        <div class="table-responsive">
            <table class="table table-borderless align-middle mb-0">
                <thead class="border-bottom fw-semibold">
                    <tr>
                        <th>FORM</th>
                        <th>Date Submitted</th>
                        <th>Time Elapsed</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-bottom">
                        <td>Request for Vehicle Use</td>
                        <td>Mon Mar 11 2025</td>
                        <td>2 days</td>
                        <td><span class="badge bg-warning text-dark">IN PROGRESS</span></td>
                        <td><i class="bi bi-three-dots-vertical"></i></td>
                    </tr>
                    <tr class="border-bottom">
                        <td>Facilities Reservation</td>
                        <td>Fri Mar 08 2025</td>
                        <td>5 days</td>
                        <td><span class="badge bg-success">COMPLETE</span></td>
                        <td><i class="bi bi-three-dots-vertical"></i></td>
                    </tr>
                    <tr class="border-bottom">
                        <td>Equipment Checkout</td>
                        <td>Wed Mar 06 2025</td>
                        <td>7 days</td>
                        <td><span class="badge bg-success">COMPLETE</span></td>
                        <td><i class="bi bi-three-dots-vertical"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Draft Forms Table -->
    <div id="drafts-table" class="bg-white rounded shadow p-3 d-none" style="min-height: 400px;">
        <div class="table-responsive">
            <table class="table table-borderless align-middle mb-0">
                <thead class="border-bottom fw-semibold">
                    <tr>
                        <th>FORM</th>
                        <th>Draft Created</th>
                        <th>Time Elapsed</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-bottom">
                        <td>Training Request Form</td>
                        <td>Tue Mar 12 2025</td>
                        <td>1 day</td>
                        <td><i class="bi bi-trash text-danger" role="button"></i></td>
                    </tr>
                    <tr class="border-bottom">
                        <td>Leave of Absence</td>
                        <td>Sun Mar 09 2025</td>
                        <td>4 days</td>
                        <td><i class="bi bi-trash text-danger" role="button"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Simple JS Toggle -->
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
