@extends('layouts.app')

@section('title', 'My Forms')

@section('content')
<div class="container mt-4">

    <!-- Tab Switch -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold mb-0">My Forms</h4>
        <div class="btn-group">
            <button class="btn btn-outline-primary active" id="tab-submitted">Submitted</button>
            <button class="btn btn-outline-primary" id="tab-drafts">Draft (2)</button>
        </div>
    </div>

    <!-- Submitted Forms -->
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
                    <tr class="border-bottom">
                        <td>
                            <a href="{{ route('form.detail', ['id' => 0]) }}" class="text-decoration-none text-dark">
                                Request for Vehicle Use
                            </a>
                        </td>
                        <td>Mar 11, 2025</td>
                        <td>2 days</td>
                        <td><span class="badge bg-warning text-dark">In Progress</span></td>
                        <td class="text-center"><i class="bi bi-three-dots-vertical" role="button" title="Options"></i></td>
                    </tr>
                    <tr class="border-bottom">
                        <td>
                            <a href="{{ route('admin.form.approved', ['id' => 1]) }}" class="text-decoration-none text-dark">
                                Facilities Reservation
                            </a>
                        </td>
                        <td>Mar 08, 2025</td>
                        <td>5 days</td>
                        <td><span class="badge bg-success">Complete</span></td>
                        <td class="text-center"><i class="bi bi-three-dots-vertical" role="button"></i></td>
                    </tr>
                    <tr class="border-bottom">
                        <td>
                            <a href="{{ route('admin.form.approved', ['id' => 2]) }}" class="text-decoration-none text-dark">
                                Equipment Checkout
                            </a>
                        </td>
                        <td>Mar 06, 2025</td>
                        <td>7 days</td>
                        <td><span class="badge bg-success">Complete</span></td>
                        <td class="text-center"><i class="bi bi-three-dots-vertical" role="button"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Draft Forms -->
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
                    <tr class="border-bottom">
                        <td>Training Request Form</td>
                        <td>Mar 12, 2025</td>
                        <td>1 day</td>
                        <td class="text-center">
                            <i class="bi bi-trash text-danger" role="button" title="Delete"></i>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <td>Leave of Absence</td>
                        <td>Mar 09, 2025</td>
                        <td>4 days</td>
                        <td class="text-center">
                            <i class="bi bi-trash text-danger" role="button" title="Delete"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tab Switching Script -->
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
