<x-app-layout>
    <h1>News</h1>

    @foreach($news as $item)
        <article>
            <h2>
                <a href="{{ route('news.show', $item) }}">
                    {{ $item->title }}
                </a>
            </h2>
            <p>{{ $item->published_at }}</p>
        </article>
    @endforeach
</x-app-layout>
