<x-app-layout>
    <div class="max-w-5xl mx-auto px-4 py-8">

        <h1 class="text-2xl font-bold mb-6">News</h1>

        @auth
            @if(auth()->user()->is_admin)
                <a href="{{ route('admin.news.create') }}"
                   class="inline-block mb-6 px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">
                    ➕ Add news
                </a>
            @endif
        @endauth

        @foreach($news as $item)
            <article class="p-4 border rounded shadow-sm bg-white mb-6">

                <h2 class="text-xl font-semibold mb-2">
                    <a href="{{ route('news.show', $item) }}"
                       class="text-blue-600 hover:underline">
                        {{ $item->title }}
                    </a>
                </h2>

                @auth
                    @if(auth()->user()->is_admin)
                        <div class="mb-3 flex items-center gap-3 text-sm">
                            <a href="{{ route('admin.news.edit', $item) }}"
                               class="text-blue-600 hover:underline">
                                ✏ Edit
                            </a>

                            <form method="POST"
                                  action="{{ route('admin.news.destroy', $item) }}"
                                  class="inline"
                                  onsubmit="return confirm('Delete this news item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-red-600 hover:underline">
                                    🗑 Delete
                                </button>
                            </form>
                        </div>
                    @endif
                @endauth

                <p class="text-sm text-gray-500">
                    {{ $item->published_at }}
                </p>

            </article>
        @endforeach

    </div>
</x-app-layout>
