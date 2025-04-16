@extends('layouts.app')

@section('title', 'Approver View')

@section('content')
<div class="container mt-4">
    <div class="d-flex gap-3">

        <!-- Left Sidebar Card -->
        <div class="bg-white rounded shadow-sm p-3" style="min-width: 180px;">
            <div class="mb-4">
                <small class="fw-semibold d-block mb-1">View</small>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="reviewToggle" checked>
                    <label class="form-check-label small" for="reviewToggle">Review</label>
                </div>
                <div class="form-check form-switch mt-1">
                    <input class="form-check-input" type="checkbox" id="statusToggle">
                    <label class="form-check-label small" for="statusToggle">Status</label>
                </div>
            </div>

            <div>
                <small class="fw-semibold d-block mb-2">Pages</small>
                <p class="mb-1 small">PAGE 1 OF 2</p>
                <p class="mb-0 small">PAGE 2 OF 2</p>
            </div>
        </div>

        <!-- Main Content (Form Details in Table Format) -->
        <div class="bg-white rounded shadow-sm p-4 flex-grow-1">
            <h5 class="fw-bold mb-4">Form Details</h5>

            <table class="table table-sm mb-0" style="border: 1px solid #dee2e6;">
                <tbody>
                    <tr style="border-bottom: 1px solid #f1f1f1;">
                        <th class="w-25 text-muted">Form Title:</th>
                        <td>Request for use of SCC</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f1f1f1;">
                        <th class="text-muted">Response #:</th>
                        <td>0098</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f1f1f1;">
                        <th class="text-muted">Submitted By:</th>
                        <td>Kevin Miranda</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f1f1f1;">
                        <th class="text-muted">Workflow Step:</th>
                        <td>Approve Student</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f1f1f1;">
                        <th class="text-muted">Created On:</th>
                        <td>Mon Mar 14 2025</td>
                    </tr>
                    <tr>
                        <th class="text-muted">Action Requested:</th>
                        <td>Approval</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <!-- Actions Card -->
        <div class="bg-white rounded shadow-sm p-3" style="min-width: 140px;">
            <small class="fw-semibold mb-3 d-block">Actions</small>
            <button class="btn btn-success btn-sm w-100 mb-2">Approve</button>
            <button class="btn btn-danger btn-sm w-100 mb-2">Reject</button>
            <button class="btn btn-secondary btn-sm w-100">Add Comment</button>
        </div>

    </div>
</div>
@endsection
