@extends('layouts.dashboard')
@section('title', 'Clinic Message')
@section('content')
    <div class="container">
        <div class="row col-12 col-lg-11">
            <div class="col-md-10 mx-auto">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('settings.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <input class="form-control" id="home" name="home"
                                    value="{{$settings['home'] ?? ''}}" style="height: 100px">{{$settings['home'] ?? ''}}</input>
                                @error('home')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                            <br>
                            <br>
                            <div class="text-end">
                                <button type="submit" class="btn btn-success btn-lg">Update The Clinc</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection