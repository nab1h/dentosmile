@extends('layouts.dashboard')
@section('title', 'Edit A&Q')

@section('content')
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h3>Edit A&Q: {{ $experience->company }}</h3>
            <hr>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('experiences.update', $experience->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="company" class="form-label">Qusetion</label>
                    <input type="text" class="form-control" id="company" name="company"
                        value="{{ old('company', $experience->company) }}"  placeholder="e.g., Google">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Answer</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $experience->title) }}"  placeholder="e.g., Lead UI Designer">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="{{ route('experiences.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection