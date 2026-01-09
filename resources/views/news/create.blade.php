<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 py-8">

        <div class="p-6 border rounded shadow-sm bg-white">

            <h1 class="text-2xl font-bold mb-6">
                Add news
            </h1>

            <form method="POST"
                  enctype="multipart/form-data"
                  action="{{ isset($news)
                        ? route('admin.news.update', $news)
                        : route('admin.news.store') }}">

                @csrf

                @isset($news)
                    @method('PUT')
                @endisset

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">
                        Title
                    </label>
                    <input name="title"
                           value="{{ old('title', $news->title ?? '') }}"
                           required
                           class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">
                        Content
                    </label>
                    <textarea name="content"
                              class="w-full border rounded px-3 py-2"
                              rows="5">{{ old('content', $news->content ?? '') }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">
                        Published at
                    </label>
                    <input type="date"
                           name="published_at"
                           value="{{ old('published_at', $news->published_at ?? '') }}"
                           required
                           class="border rounded px-3 py-2">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium mb-1">
                        Image
                    </label>
                    <input type="file" name="image">
                </div>

                <button class="px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">
                    Save
                </button>
            </form>

        </div>

    </div>
</x-app-layout>
