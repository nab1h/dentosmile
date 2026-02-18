@extends('layouts.dashboard')
@section('title', 'Manage Articles')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>إدارة المقالات</h2>
            <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">إضافة مقال جديد</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>العنوان</th>
                        <th>التصنيف</th>
                        <th>تاريخ النشر</th>
                        <th>مقتطف</th>
                        <th>التحكم</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td><strong>{{ $article->title }}</strong></td>
                            <td>{{ $article->category ?: '-' }}</td>
                            <td>{{ optional($article->published_at)->format('Y-m-d') ?: '-' }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($article->excerpt ?? $article->body, 80) }}</td>
                            <td>
                                <a href="{{ route('articles.show', $article->slug) }}" class="btn btn-sm btn-outline-secondary" target="_blank">
                                    عرض
                                </a>
                                <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-sm btn-info">
                                    تعديل
                                </a>
                                <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST"
                                      style="display:inline-block"
                                      onsubmit="return confirm('هل أنت متأكد من حذف هذا المقال؟');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">لا توجد مقالات حالياً.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $articles->links() }}
    </div>
@endsection

