@extends('layouts.app')

@section('title', 'Action List')

@section('content')
<div class="container mt-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold mb-0">My Action List</h4>
        <input type="text" class="form-control form-control-sm w-25" placeholder="Search by name, form..." aria-label="Search">
    </div>

    <!-- Action List Table -->
    <div class="bg-white shadow-sm rounded p-4">
        <div class="table-responsive">
            <table class="table align-middle table-borderless">
                <thead class="border-bottom text-secondary small text-uppercase">
                    <tr>
                        <th>Form Name</th>
                        <th>Response #</th>
                        <th>Submitted By</th>
                        <th>Step</th>
                        <th>Created</th>
                        <th>Requested</th>
                    </tr>
                </thead>
                <tbody class="small">
                    @for ($i = 0; $i < 4; $i++)
                        <tr class="align-middle border-bottom">
                            <td>
                                <a href="{{ route('form.detail', ['id' => $i]) }}" class="text-decoration-none text-dark">
                                    Request for use of SCC
                                </a>
                            </td>
                            <td>#0098</td>
                            <td>Kevin Miranda</td>
                            <td>
                                <span class="badge bg-primary-subtle text-primary">Approve Student</span>
                            </td>
                            <td class="text-muted">Mar 14, 2025</td>
                            <td>
                                <span class="badge bg-success-subtle text-success">Approval</span>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
