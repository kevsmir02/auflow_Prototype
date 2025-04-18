@extends('layouts.app')

@section('title', 'Action List')

@section('content')
<div class="container mt-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold mb-0">My Action List</h4>
        <input type="text" class="form-control form-control-sm w-25" placeholder="Search by name, form..." aria-label="Search">
    </div>

    <!-- Action Table -->
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
                    @php
                        $actions = [
                            [
                                'id' => 0,
                                'form' => 'Request for Use of SCC',
                                'ref' => '#0098',
                                'user' => 'Kevin Miranda',
                                'step' => ['label' => 'Approve Student', 'color' => 'primary'],
                                'date' => 'Mar 14, 2025',
                                'request' => ['label' => 'Approval', 'color' => 'success'],
                            ],
                            [
                                'id' => 1,
                                'form' => 'Equipment Checkout',
                                'ref' => '#0102',
                                'user' => 'Julia Reyes',
                                'step' => ['label' => 'Return Review', 'color' => 'warning'],
                                'date' => 'Mar 10, 2025',
                                'request' => ['label' => 'Verification', 'color' => 'warning'],
                            ],
                            [
                                'id' => 2,
                                'form' => 'Facilities Reservation',
                                'ref' => '#0108',
                                'user' => 'Mia Santos',
                                'step' => ['label' => 'Review Booking', 'color' => 'info'],
                                'date' => 'Mar 12, 2025',
                                'request' => ['label' => 'Acknowledge', 'color' => 'info'],
                            ],
                            [
                                'id' => 3,
                                'form' => 'Travel Authorization',
                                'ref' => '#0115',
                                'user' => 'John Cruz',
                                'step' => ['label' => 'Financial Review', 'color' => 'danger'],
                                'date' => 'Mar 15, 2025',
                                'request' => ['label' => 'Approval', 'color' => 'danger'],
                            ],
                        ];
                    @endphp

                    @foreach ($actions as $item)
                        <tr class="align-middle border-bottom">
                            <td>
                                <a href="{{ route('form.detail', ['id' => $item['id']]) }}" class="text-decoration-none text-dark">
                                    {{ $item['form'] }}
                                </a>
                            </td>
                            <td>{{ $item['ref'] }}</td>
                            <td>{{ $item['user'] }}</td>
                            <td>
                                <span class="badge bg-{{ $item['step']['color'] }}-subtle text-{{ $item['step']['color'] }}">
                                    {{ $item['step']['label'] }}
                                </span>
                            </td>
                            <td class="text-muted">{{ $item['date'] }}</td>
                            <td>
                                <span class="badge bg-{{ $item['request']['color'] }}-subtle text-{{ $item['request']['color'] }}">
                                    {{ $item['request']['label'] }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
