@extends('layouts.app')

@section('title', 'Form Preview')

@section('content')
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center align-items-start gap-4 flex-wrap">

        {{-- Preview Panel --}}
        <div class="bg-white shadow-sm rounded p-4" style="width: 750px; font-size: 0.9rem;">
            
            {{-- Logo --}}
            <div class="text-center mb-4">
                <img src="{{ asset('images/auflog.png') }}" alt="AUFlow Logo" style="height: 60px;">
            </div>

            {{-- Form --}}
            <form>
                @php
                    $fields = [
                        ['label' => 'Enter your name', 'type' => 'text', 'col' => 12, 'bg' => true],
                        ['label' => 'ID No.', 'type' => 'text', 'col' => 6],
                        ['label' => 'Email', 'type' => 'email', 'col' => 6],
                        ['label' => 'Program / Department', 'type' => 'text', 'col' => 12, 'bg' => true],
                        ['label' => 'Year / Level', 'type' => 'text', 'col' => 6],
                        ['label' => 'Section', 'type' => 'text', 'col' => 6],
                        ['label' => 'Purpose of Request', 'type' => 'text', 'col' => 12],
                        ['label' => 'Type of Document Needed', 'type' => 'select', 'col' => 6, 'placeholder' => 'Select an option'],
                        ['label' => 'Number of Copies', 'type' => 'number', 'col' => 6],
                        ['label' => 'Preferred Receiving Method', 'type' => 'select', 'col' => 6, 'placeholder' => 'Select a method'],
                        ['label' => 'Request Date of Release', 'type' => 'date', 'col' => 6],
                        ['label' => "Approver's Name", 'type' => 'text', 'col' => 6],
                        ['label' => "Approver's Email", 'type' => 'email', 'col' => 6],
                    ];
                @endphp

                @foreach ($fields as $index => $field)
                    @if ($field['col'] === 12)
                        {{-- Full-width row --}}
                        <div class="mb-3 {{ $field['bg'] ?? false ? 'bg-light p-2 px-3 rounded' : '' }}">
                            <label class="form-label {{ $field['bg'] ?? false ? 'fw-semibold' : '' }} small mb-1">
                                {{ $field['label'] }} <span class="text-danger">*</span>
                            </label>
                            @if ($field['type'] === 'select')
                                <select class="form-select form-select-sm" disabled>
                                    <option selected>{{ $field['placeholder'] ?? 'Select' }}</option>
                                </select>
                            @else
                                <input type="{{ $field['type'] }}" class="form-control form-control-sm" disabled>
                            @endif
                        </div>
                    @else
                        {{-- Start a row every 2 fields --}}
                        @if ($loop->index % 2 === 0)<div class="row g-2 mb-3">@endif

                        <div class="col-md-{{ $field['col'] }}">
                            <label class="form-label small">
                                {{ $field['label'] }} <span class="text-danger">*</span>
                            </label>
                            @if ($field['type'] === 'select')
                                <select class="form-select form-select-sm" disabled>
                                    <option selected>{{ $field['placeholder'] ?? 'Select' }}</option>
                                </select>
                            @else
                                <input type="{{ $field['type'] }}" class="form-control form-control-sm" disabled>
                            @endif
                        </div>

                        @if ($loop->index % 2 === 1 || $loop->last)</div>@endif
                    @endif
                @endforeach

                {{-- Image Upload --}}
                <div class="text-center">
                    <i class="bi bi-image" style="font-size: 1.4rem;"></i>
                    <div class="small text-muted mt-1">Image Upload</div>
                </div>
            </form>
        </div>

        {{-- Sidebar Actions --}}
        <div class="bg-white shadow-sm rounded p-3" style="width: 220px; margin-top: 10px;">
            <h6 class="fw-semibold mb-3">Actions</h6>
            <a href="{{ route('admin.formbuilder') }}" class="btn btn-outline-secondary btn-sm w-100 mb-2">Edit</a>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm w-100 mb-2">Done</a>
            <button class="btn btn-danger btn-sm w-100">Delete</button>
        </div>

    </div>
</div>
@endsection
