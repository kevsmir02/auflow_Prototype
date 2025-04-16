@extends('layouts.app')

@section('title', 'Action List')

@section('content')
<div class="container mt-4">
    <!-- Search Bar Right-Aligned -->
    <div class="d-flex justify-content-end mb-3">
        <input type="text" class="form-control w-25" placeholder="Search..." />
    </div>

    <!-- Action List Table -->
    <div class="bg-white rounded shadow-lg p-3" style="min-height: 500px;">
        <div class="table-responsive">
            <table class="table table-borderless align-middle mb-0">
                <thead class="border-bottom fw-semibold">
                    <tr>
                        <th>FORM</th>
                        <th>Response #</th>
                        <th>Submitted By</th>
                        <th>Workflow Step</th>
                        <th>Created On</th>
                        <th>Action Requested</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 4; $i++)
                        <tr class="border-bottom">
                            <td>
                                <a href="{{ route('form.detail', ['id' => $i]) }}" class="text-decoration-none text-dark">
                                    Request for use of SCC
                                </a>
                            </td>
                            <td>0098</td>
                            <td>Kevin Miranda</td>
                            <td>Approve Student</td>
                            <td>Mon Mar 14 2025</td>
                            <td>Approval</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
