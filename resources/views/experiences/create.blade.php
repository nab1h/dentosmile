@extends('layouts.dashboard')
@section('title', 'Add A&Q')
@section('content')
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
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
            <form action="{{ route('experiences.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="company" class="form-label">Question</label>
                    <input type="text" class="form-control" id="company" name="company" value="{{ old('company') }}"
                        required placeholder="اكتب سؤالك الطبي هنا بكل وضوح...">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Answer</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required
                        placeholder="اكتب نصيحتك الطبية للمريض هنا...">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Add A&Q</button>
                <a href="{{ route('experiences.index') }}" class="btn btn-secondary">Back to List</a>
            </form>
        </div>
    </div>
@endsection