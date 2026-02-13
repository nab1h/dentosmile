@extends('layouts.dashboard')
@section('title', 'Booking')
@section('content')

    <div class="container-fluid py-4" style="background-color: #f8f9fa; min-height: 100vh;">

        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" style="border-left: 5px solid #00d4ff !important;">
                    <div class="card-body">
                        <h6 class="text-muted text-uppercase small">Total Appointments</h6>
                        <h2 class="fw-bold mb-0" style="color: #007bff;">{{ $appointments->count() }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-8 d-flex align-items-center justify-content-end">
                <h3 class="fw-bold" style="color: #007bff;">Patient Bookings Management</h3>
            </div>
        </div>

        <div class="card border-0 shadow-sm" style="border-radius: 15px;">
            <div class="card-header bg-white border-0 py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="mb-0 fw-bold"><i class="fa fa-list me-2"></i>Recent Appointments</h5>
                    </div>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead style="background-color: #00d4ff; color: #fff;">
                            <tr>
                                <th class="ps-4">Patient Name</th>
                                <th>Contact Info</th>
                                <th>Date of Birth</th>
                                <th>Appt. Date</th>
                                <th style="width: 25%">Message</th>
                                <th class="text-center">whatsapp</th>
                                <th class="text-center">call</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($appointments as $app)
                                <tr>
                                    <td class="ps-4">
                                        <div class="fw-bold" style="color: #333;">{{ $app->patient_name }}</div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="text-dark"><i class="fa fa-phone-alt small me-1"></i>
                                                {{ $app->phone }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $app->dob }}</td>
                                    <td>
                                        <span class="badge bg-primary-soft text-primary px-3 py-2" style="background: #e7f1ff;">
                                            {{ $app->appointment_date }}
                                        </span>
                                    </td>
                                    <td>
                                        <p class="small text-muted mb-0" title="{{ $app->message }}">
                                            {{ Str::limit($app->message, 50) }}
                                        </p>
                                    </td>
                                    <td class="text-center">
                                        <a href="https://api.whatsapp.com/send?phone={{ preg_replace('/[^0-9]/', '', $app->phone) }}&text={{ urlencode('أهلاً بك في العيادة، نود تأكيد حجزك باسم: ' . $app->patient_name) }}"
                                            target="_blank" class="btn btn-success btn-sm text-white" style="background-color: #25d366; border: none;">
                                            <i class="fab fa-whatsapp"></i> WhatsApp
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="tel:{{ $app->phone }}" class="btn btn-cyan btn-sm text-white">
                                            <i class="fa fa-phone me-1"></i> Call
                                        </a>
                                    </td>
                                    <td class="text-center">
                                            <form action="{{ route('booking.destroy', $app->id) }}" method="POST"
                                                onsubmit="return confirm('Delete this appointment?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">No appointments found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* لمسة جمالية للسماوي (Cyan) */
        .btn-cyan {
            background-color: #00d4ff;
            border: none;
            transition: 0.3s;
        }

        .btn-cyan:hover {
            background-color: #00b8e6;
            box-shadow: 0 4px 8px rgba(0, 212, 255, 0.3);
        }

        .table thead th {
            font-weight: 600;
            font-size: 0.9rem;
            border: none;
        }

        .table tbody td {
            border-bottom: 1px solid #f1f1f1;
            padding: 15px 10px;
        }

        .card {
            transition: transform 0.2s;
        }
    </style>


@endsection