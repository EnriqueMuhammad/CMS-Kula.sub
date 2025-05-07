@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
    @foreach($articles as $article)
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
        <div class="p-6">
            <div class="flex items-center text-sm text-gray-500 mb-2">
                <span>{{ $article->published_at->format('M d, Y') }}</span>
                <span class="mx-2">•</span>
                <a href="{{ route('category', $article->category) }}" class="hover:text-blue-500">
                    {{ $article->category->name }}
                </a>
            </div>
            <h2 class="text-xl font-bold mb-2">
                <a href="{{ route('article.show', $article) }}" class="hover:text-blue-500">
                    {{ $article->title }}
                </a>
            </h2>
            <p class="text-gray-600 mb-4">
                {{ Str::limit(strip_tags($article->content), 150) }}
            </p>
            <div class="flex items-center">
                <div class="text-sm">
                    <p class="text-gray-900 font-medium">
                        {{ $article->user->name }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="mt-6">
    {{ $articles->links() }}
</div>
@endsection