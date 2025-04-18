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
                    <tr class="align-middle border-bottom">
                        <td>
                            <a href="{{ route('form.detail', ['id' => 0]) }}" class="text-decoration-none text-dark">
                                Request for Use of SCC
                            </a>
                        </td>
                        <td>#0098</td>
                        <td>Kevin Miranda</td>
                        <td><span class="badge bg-primary-subtle text-primary">Approve Student</span></td>
                        <td class="text-muted">Mar 14, 2025</td>
                        <td><span class="badge bg-success-subtle text-success">Approval</span></td>
                    </tr>
                    <tr class="align-middle border-bottom">
                        <td>
                            <a href="{{ route('form.detail', ['id' => 1]) }}" class="text-decoration-none text-dark">
                                Equipment Checkout
                            </a>
                        </td>
                        <td>#0102</td>
                        <td>Julia Reyes</td>
                        <td><span class="badge bg-warning-subtle text-warning">Return Review</span></td>
                        <td class="text-muted">Mar 10, 2025</td>
                        <td><span class="badge bg-warning-subtle text-warning">Verification</span></td>
                    </tr>
                    <tr class="align-middle border-bottom">
                        <td>
                            <a href="{{ route('form.detail', ['id' => 2]) }}" class="text-decoration-none text-dark">
                                Facilities Reservation
                            </a>
                        </td>
                        <td>#0108</td>
                        <td>Mia Santos</td>
                        <td><span class="badge bg-info-subtle text-info">Review Booking</span></td>
                        <td class="text-muted">Mar 12, 2025</td>
                        <td><span class="badge bg-info-subtle text-info">Acknowledge</span></td>
                    </tr>
                    <tr class="align-middle border-bottom">
                        <td>
                            <a href="{{ route('form.detail', ['id' => 3]) }}" class="text-decoration-none text-dark">
                                Travel Authorization
                            </a>
                        </td>
                        <td>#0115</td>
                        <td>John Cruz</td>
                        <td><span class="badge bg-danger-subtle text-danger">Financial Review</span></td>
                        <td class="text-muted">Mar 15, 2025</td>
                        <td><span class="badge bg-danger-subtle text-danger">Approval</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
