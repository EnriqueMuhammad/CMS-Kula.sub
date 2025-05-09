@extends('layouts.app')

@section('title', $article->title)

@section('content')
<div class="prose mx-auto">
    <h1>{{ $article->title }}</h1>
    <p class="text-sm text-gray-500">Published on {{ $article->published_at->format('M d, Y') }} by {{ $article->user->name }}</p>
    <div class="mt-4">
        <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-auto rounded-lg">
    </div>
    <div class="mt-6">
        {!! $article->content !!}
    </div>
</div>
@endsection
