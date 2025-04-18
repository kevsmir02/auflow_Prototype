@extends('layouts.app')

@section('title', 'Workflow Builder')

@section('content')
<div class="container-xl mt-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold mb-0">Workflow: Test Form</h5>
        <div class="d-flex align-items-center gap-2">
            <a href="#" class="btn btn-outline-secondary btn-sm">Responses</a>
            <a href="{{ route('admin.formbuilder') }}" class="btn btn-outline-secondary btn-sm">Form</a>
            <a href="{{ route('admin.workflow') }}" class="btn {{ request()->routeIs('admin.workflow') ? 'btn-primary' : 'btn-outline-secondary' }} btn-sm">Workflow</a>
            <a href="{{ route('form.publish') }}" class="btn {{ request()->routeIs('form.publish') ? 'btn-primary' : 'btn-outline-secondary' }} btn-sm">Publish</a>
            <span class="text-muted small ms-2">
                <i class="bi bi-gear me-1"></i> Workflow Settings
            </span>
        </div>
    </div>

    <!-- Bounded Workflow Area -->
    <div class="d-flex flex-wrap gap-3">
        <!-- Sidebar -->
        <div class="bg-white shadow-sm rounded p-3 small" style="width: 180px;">
            <h6 class="fw-bold mb-3">Add Steps</h6>
            <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i> Approval</li>
                <li class="mb-2"><i class="bi bi-list-task text-primary me-2"></i> Task</li>
                <li class="mb-2"><i class="bi bi-envelope-check text-info me-2"></i> Acknowledge</li>
                <li class="mb-2"><i class="bi bi-bell text-warning me-2"></i> Notification</li>
                <li class="mb-2"><i class="bi bi-diagram-3-fill text-danger me-2"></i> Branch</li>
                <li class="mb-2"><i class="bi bi-lightning-charge text-danger me-2"></i> Integration</li>
            </ul>
        </div>

        <!-- Workflow Canvas -->
        <div class="flex-fill bg-white shadow-sm rounded p-4" style="max-width: 960px;">
            <div class="d-flex align-items-start flex-wrap gap-3 mb-4">
                <!-- START -->
                <div class="d-flex align-items-center">
                    <span class="badge bg-secondary">START</span>
                </div>

                <!-- Workflow Steps -->
                @php
                    $steps = [
                        [
                            'label' => 'Form Submission',
                            'icon' => 'file-earmark-text',
                            'class' => 'primary',
                            'content' => 'flow test form'
                        ],
                        [
                            'label' => 'Approval',
                            'icon' => 'check2-circle',
                            'class' => 'success',
                            'content' => '<i class="bi bi-person"></i> Don David<br>
                                <span class="text-muted small">If denied: <span class="text-danger fw-semibold">stop</span></span>'
                        ],
                        [
                            'label' => 'Task',
                            'icon' => 'list-task',
                            'class' => 'primary',
                            'content' => '<i class="bi bi-person"></i> Don David'
                        ],
                        [
                            'label' => 'Acknowledge',
                            'icon' => 'envelope-check',
                            'class' => 'info',
                            'content' => '<i class="bi bi-person"></i> Kevin Miranda'
                        ],
                        [
                            'label' => 'Notification',
                            'icon' => 'bell',
                            'class' => 'warning',
                            'content' => 'To: Kevin Miranda<br><span class="text-muted">Form has been approved</span>'
                        ],
                        [
                            'label' => 'Integration',
                            'icon' => 'lightning-charge',
                            'class' => 'danger',
                            'content' => 'Student Information System'
                        ]
                    ];
                @endphp

                @foreach ($steps as $step)
                    <div class="d-flex align-items-center">
                        <div class="p-2 px-3 rounded border border-{{ $step['class'] }} bg-light" style="min-width: 180px;">
                            <div class="small fw-semibold text-{{ $step['class'] }}">
                                <i class="bi bi-{{ $step['icon'] }} me-1"></i> {{ $step['label'] }}
                            </div>
                            <div class="small">{!! $step['content'] !!}</div>
                        </div>

                        @if (!$loop->last)
                            <div class="d-flex align-items-center mx-2">
                                <i class="bi bi-arrow-right text-muted fs-5"></i>
                            </div>
                        @endif
                    </div>
                @endforeach

                <!-- END -->
                <div class="d-flex align-items-center">
                    <span class="badge bg-secondary">END</span>
                </div>
            </div>

            <!-- Controls -->
            <div class="d-flex gap-2">
                <button class="btn btn-light btn-sm"><i class="bi bi-arrow-counterclockwise me-1"></i> Undo</button>
                <button class="btn btn-light btn-sm"><i class="bi bi-arrow-clockwise me-1"></i> Redo</button>
            </div>
        </div>
    </div>
</div>
@endsection
