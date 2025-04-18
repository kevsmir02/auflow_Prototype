@extends('layouts.app')

@section('title', 'Form Detail')

@section('content')
<div class="container mt-4">
    <div class="d-flex gap-4 flex-wrap">

        <!-- Sidebar: View Toggles & Pages -->
        <div class="bg-white shadow-sm rounded p-3" style="min-width: 180px;">
            <div class="mb-4">
                <small class="fw-semibold text-muted d-block mb-2">View Mode</small>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="reviewToggle" checked>
                    <label class="form-check-label small" for="reviewToggle">Review</label>
                </div>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" id="statusToggle">
                    <label class="form-check-label small" for="statusToggle">Status</label>
                </div>
            </div>

            <div>
                <small class="fw-semibold text-muted d-block mb-2">Pages</small>
                <div class="small text-muted">Page 1 of 2</div>
                <div class="small text-muted">Page 2 of 2</div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-white shadow-sm rounded p-4 flex-fill">
            <h5 class="fw-bold mb-4">Form Details</h5>

            <table class="table table-sm mb-0 border rounded overflow-hidden">
                <tbody class="small">
                    <tr class="border-bottom">
                        <th class="text-muted w-25">Form Title</th>
                        <td class="fw-semibold">Request for use of SCC</td>
                    </tr>
                    <tr class="border-bottom">
                        <th class="text-muted">Response #</th>
                        <td>#0098</td>
                    </tr>
                    <tr class="border-bottom">
                        <th class="text-muted">Submitted By</th>
                        <td>Kevin Miranda</td>
                    </tr>
                    <tr class="border-bottom">
                        <th class="text-muted">Workflow Step</th>
                        <td>Approve Student</td>
                    </tr>
                    <tr class="border-bottom">
                        <th class="text-muted">Created On</th>
                        <td>Mon, Mar 14, 2025</td>
                    </tr>
                    <tr>
                        <th class="text-muted">Action Requested</th>
                        <td>Approval</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
