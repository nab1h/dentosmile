@extends('layouts.dashboard')
@section('title', 'Howrs Working')
@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-11">

                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h6 class="mb-0"><i class="fas fa-plus-circle me-2"></i> Add New Working Day/Shift</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('working-hours.store') }}" method="POST" class="row g-3 align-items-end">
                            @csrf
                            <div class="col-md-4">
                                <label class="form-label small fw-bold">Day Name</label>
                                <input type="text" name="day_name" class="form-control" placeholder="e.g. Saturday" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small fw-bold">Time Range</label>
                                <input type="text" name="hours_range" class="form-control" placeholder="10:00 AM - 05:00 PM">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small fw-bold">Order</label>
                                <input type="number" name="sort_order" class="form-control" value="0">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="fas fa-save me-1"></i> Save Day
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white py-3">
                        <h6 class="mb-0"><i class="fas fa-list me-2"></i> Current Schedule</h6>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="ps-4">Day Name</th>
                                        <th>Work Schedule</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($workingHours as $hour)
                                        <tr>
                                            <form action="{{ route('working-hours.update', $hour->id) }}" method="POST">
                                                @csrf @method('PUT')
                                                <td class="ps-4 fw-bold text-primary">{{ $hour->day_name }}</td>
                                                <td>
                                                    <input type="text" name="hours_range" value="{{ $hour->hours_range }}" 
                                                           class="form-control form-control-sm border-primary" 
                                                           {{ $hour->is_closed ? 'disabled' : '' }}>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check form-switch d-inline-block">
                                                    
                                                        <input class="form-check-input" type="checkbox" name="is_closed" id="switch-{{ $hour->id }}"
                                                            onchange="updateStatusText({{ $hour->id }})" {{ $hour->is_closed ? 'checked' : '' }}>

                                                        <label class="form-check-label fw-bold ms-2" id="status-text-{{ $hour->id }}" for="switch-{{ $hour->id }}">
                                                            {{ $hour->is_closed ? 'Closed' : 'Open' }}
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="submit" class="btn btn-sm btn-success px-4 text-white">Update</button>
                                                </td>
                                            </form>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script>
        function updateStatusText(id) {
            const checkbox = document.getElementById('switch-' + id);
            const statusText = document.getElementById('status-text-' + id);
            const timeInput = document.querySelector(`input[id="input-${id}"]`); // لو كنت مدي للوقت id

            if (checkbox.checked) {
                statusText.innerText = 'Closed';
                statusText.classList.replace('text-success', 'text-danger'); // اختياري لتغيير اللون
                if (timeInput) timeInput.disabled = true;
            } else {
                statusText.innerText = 'Open';
                statusText.classList.replace('text-danger', 'text-success'); // اختياري لتغيير اللون
                if (timeInput) timeInput.disabled = false;
            }
        }
    </script>
@endsection