@extends('layouts.app')

@section('title', 'Publish')

@section('content')
<div class="container mt-3">
    <div class="mx-auto" style="max-width: 960px;">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h6 class="fw-bold mb-0">Publish</h6>
            <div class="btn-group btn-group-sm">
                <button class="btn btn-outline-secondary">Responses</button>
                <a href="{{ route('admin.formbuilder') }}" class="btn btn-outline-secondary">Form</a>
                <a href="{{ route('admin.workflow') }}" class="btn {{ request()->routeIs('admin.workflow') ? 'btn-primary' : 'btn-outline-secondary' }}">Workflow</a>
                <a href="{{ route('form.publish') }}" class="btn {{ request()->routeIs('form.publish') ? 'btn-primary' : 'btn-outline-secondary' }}">Publish</a>
            </div>
        </div>

        <!-- Main Card -->
        <div class="bg-white rounded shadow-sm p-4">
            <!-- Admin Permissions -->
            <div class="mb-4">
                <h6 class="fw-semibold">Administrators</h6>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small">Users</label>
                        <div class="border rounded p-2 small bg-light">
                            <i class="bi bi-person me-1"></i> Don David
                        </div>
                        <label class="form-label small mt-3">Group</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Group name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small">Permissions</label>
                        <div class="form-check small">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Administer, design, and publish this app</label>
                        </div>
                        <div class="form-check small">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Create documents in this app</label>
                        </div>
                        <div class="form-check small">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Read documents in this app</label>
                        </div>
                        <div class="form-check small">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Update documents in this app</label>
                        </div>
                        <div class="form-check small">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Delete documents in this app</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- All Authorized Users -->
            <div class="mb-4">
                <h6 class="fw-semibold">All Authorized Users</h6>
                <p class="small text-muted mb-2">
                    Permissions granted here apply to all users who are able to log in successfully.
                    Only enable this if everyone in your institution should access the form.
                </p>
                <div class="form-check form-check-inline small">
                    <input class="form-check-input" type="checkbox" checked>
                    <label class="form-check-label">Administrator</label>
                </div>
                <div class="form-check form-check-inline small">
                    <input class="form-check-input" type="checkbox" checked>
                    <label class="form-check-label">Faculty</label>
                </div>
                <div class="form-check form-check-inline small">
                    <input class="form-check-input" type="checkbox" checked>
                    <label class="form-check-label">Student</label>
                </div>
            </div>

            <!-- Send To -->
            <div class="mb-4">
                <h6 class="fw-semibold">Send it to:</h6>
                <div class="form-check small">
                    <input class="form-check-input" type="checkbox" checked>
                    <label class="form-check-label">Administrator</label>
                </div>
                <div class="form-check small">
                    <input class="form-check-input" type="checkbox" checked>
                    <label class="form-check-label">Faculty</label>
                </div>
                <div class="form-check small">
                    <input class="form-check-input" type="checkbox" checked>
                    <label class="form-check-label">Student</label>
                </div>
            </div>

            <!-- Buttons -->
            <div class="text-end">
                <button class="btn btn-outline-secondary">Export</button>
                <a href="{{ route('admin.form.approved', ['id' => 0]) }}" class="btn btn-primary">Create</a>
            </div>

        </div>
    </div>
</div>
@endsection
