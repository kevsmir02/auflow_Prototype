@extends('layouts.app')

@section('title', 'Form Detail')

@section('content')
@php
    $role = session('role', 'user');
    $isAdmin = $role === 'admin';

    $formData = [
        'Form Title' => 'Request for use of SCC',
        'Response #' => '#0098',
        'Submitted By' => 'Kevin Miranda',
        'Workflow Step' => 'Approve Student',
        'Created On' => 'Mon, Mar 14, 2025',
        'Action Requested' => 'Approval',
    ];
@endphp

<div class="container mt-4">
    <div class="d-flex gap-4 flex-wrap">

        {{-- Sidebar: View Controls (Admin Only) --}}
        @if ($isAdmin)
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
        @endif

        {{-- Main Form Details --}}
        <div class="bg-white shadow-sm rounded p-4 flex-fill">
            <h5 class="fw-bold mb-4">Form Details</h5>
            <table class="table table-sm mb-0 border rounded overflow-hidden">
                <tbody class="small">
                    @foreach ($formData as $label => $value)
                        <tr class="{{ !$loop->last ? 'border-bottom' : '' }}">
                            <th class="text-muted w-25">{{ $label }}</th>
                            <td class="{{ $loop->first ? 'fw-semibold' : '' }}">{{ $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Admin Actions Sidebar (Admin Only) --}}
        @if ($isAdmin)
        <div class="bg-white shadow-sm rounded p-3" style="min-width: 160px;">
            <small class="fw-semibold text-muted d-block mb-3">Actions</small>

            <form method="POST" action="{{ route('admin.form.approve', $id) }}">
                @csrf
                <button type="submit" class="btn btn-success btn-sm w-100 mb-2">Approve</button>
            </form>

            <button class="btn btn-danger btn-sm w-100 mb-2">Reject</button>
            <button class="btn btn-outline-secondary btn-sm w-100">Add Comment</button>
        </div>
        @endif

    </div>
</div>
@endsection
