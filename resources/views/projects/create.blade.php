@extends('layouts.dashboard')
@section('title', 'create Service')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Add Services</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="description" name="description" rows="5" required
                                    placeholder="Describe the Service"></textarea>
                            </div>
                            <hr class="my-4">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="photo_1" class="form-label">Image Service</label>
                                    <input class="form-control" type="file" id="photo_1" name="photo_1">
                                </div>
                            </div>
                            <br>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Save My Service</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!--/.main-->
@endsection