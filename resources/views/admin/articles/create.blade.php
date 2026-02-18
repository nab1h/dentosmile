@extends('layouts.dashboard')
@section('title', 'Add Article')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">إضافة مقال جديد</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.articles.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">عنوان المقال</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                       id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">الرابط (Slug) - اختياري</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                       id="slug" name="slug" value="{{ old('slug') }}"
                                       placeholder="مثال: teeth-whitening">
                                @error('slug')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">التصنيف</label>
                                <input type="text" class="form-control @error('category') is-invalid @enderror"
                                       id="category" name="category" value="{{ old('category') }}"
                                       placeholder="مثال: تجميل، عناية يومية، أطفال">
                                @error('category')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="published_at" class="form-label">تاريخ النشر</label>
                                <input type="date" class="form-control @error('published_at') is-invalid @enderror"
                                       id="published_at" name="published_at"
                                       value="{{ old('published_at') }}">
                                @error('published_at')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="excerpt" class="form-label">مقتطف قصير (يظهر في قائمة المقالات)</label>
                                <textarea class="form-control @error('excerpt') is-invalid @enderror"
                                          id="excerpt" name="excerpt" rows="3">{{ old('excerpt') }}</textarea>
                                @error('excerpt')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label">محتوى المقال</label>
                                <textarea class="form-control @error('body') is-invalid @enderror"
                                          id="body" name="body" rows="8" required>{{ old('body') }}</textarea>
                                @error('body')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-success">حفظ المقال</button>
                                <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">رجوع للقائمة</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

