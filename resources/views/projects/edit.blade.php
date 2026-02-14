@extends('layouts.dashboard')
@section('title', 'Edit My Services')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Edit My Service (ID: {{ $project->id }})</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <label for="name" class="form-label">Service Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', $project->name) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="description" name="description" rows="5" required
                                    >{{ old('description', $project->description) }}</textarea>
                            </div>
                            <hr class="my-4">
                            <br>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="photo_1" class="form-label">Image My Service</label>
                                    @if($project->photo_1)
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $project->photo_1) }}" class="img-thumbnail"
                                                alt="{{ $project->name }}" width="100" height="100">
                                        </div>
                                    @endif
                                    <input class="form-control" type="file" id="photo_1" name="photo_1">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Save Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection