<x-app-layout>
    <h1>News</h1>
    @auth
        @if(auth()->user()->is_admin)
            <a href="{{ route('admin.news.create') }}"
               style="display:inline-block; margin-bottom:1rem; color:blue;">
                ➕ Add news
            </a>
        @endif
    @endauth

    @foreach($news as $item)
        <article>
            <h2>
                <a href="{{ route('news.show', $item) }}">
                    {{ $item->title }}
                </a>
            </h2>
            @auth
                @if(auth()->user()->is_admin)
                    <div style="margin-bottom: 0.5rem;">
                        <a href="{{ route('admin.news.edit', $item) }}">✏ Edit</a>

                        <form method="POST"
                              action="{{ route('admin.news.destroy', $item) }}"
                              style="display:inline;"
                              onsubmit="return confirm('Delete this news item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color:red;">🗑 Delete</button>
                        </form>
                    </div>
                @endif
            @endauth

            <p>{{ $item->published_at }}</p>
        </article>
    @endforeach
</x-app-layout>
