<x-app-layout>
    <h1>{{ $news->title }}</h1>

    @if($news->image)
        <img src="{{ asset('storage/'.$news->image) }}" width="400">
    @endif

    <p>{{ $news->published_at }}</p>
    <div>{{ $news->content }}</div>
</x-app-layout>
