@extends('layouts.app')

@section('title', 'Form Detail')

@section('content')
<div class="container mt-4">
    <div class="bg-white p-4 rounded shadow-sm">
        <!-- Status Badge -->
        <div class="alert alert-success small py-2 px-3 mb-4 rounded-pill" role="alert">
            This form is currently <strong>In Progress</strong>.
        </div>

        <h5 class="fw-bold mb-4">Form Details</h5>

        <div class="mb-3 row">
            <label class="col-sm-3 fw-semibold">Form Title:</label>
            <div class="col-sm-9">Request for use of SCC</div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-3 fw-semibold">Response #:</label>
            <div class="col-sm-9">0098</div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-3 fw-semibold">Submitted By:</label>
            <div class="col-sm-9">Kevin Miranda</div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-3 fw-semibold">Workflow Step:</label>
            <div class="col-sm-9">Approve Student</div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-3 fw-semibold">Created On:</label>
            <div class="col-sm-9">Mon Mar 14 2025</div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-3 fw-semibold">Action Requested:</label>
            <div class="col-sm-9">Approval</div>
        </div>

    </div>
</div>
@endsection
