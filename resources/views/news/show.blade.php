<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 py-8">

        <div class="p-6 border rounded shadow-sm bg-white">

            <h1 class="text-2xl font-bold mb-4">
                {{ $news->title }}
            </h1>

            @if($news->image)
                <img src="{{ asset('storage/'.$news->image) }}"
                     class="mb-4 rounded max-w-full"
                     alt="{{ $news->title }}">
            @endif

            <p class="text-sm text-gray-500 mb-4">
                {{ $news->published_at }}
            </p>

            <div class="prose max-w-none">
                {{ $news->content }}
            </div>

        </div>

    </div>
</x-app-layout>
