<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 py-8">

        <div class="p-6 border rounded shadow-sm bg-white mb-8">

            <h1 class="text-2xl font-bold mb-6">
                Edit news
            </h1>

            {{-- UPDATE FORM --}}
            <form method="POST"
                  enctype="multipart/form-data"
                  action="{{ route('admin.news.update', $news) }}">

                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">
                        Title
                    </label>
                    <input name="title"
                           value="{{ old('title', $news->title) }}"
                           required
                           class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">
                        Content
                    </label>
                    <textarea name="content"
                              class="w-full border rounded px-3 py-2"
                              rows="5">{{ old('content', $news->content) }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">
                        Published at
                    </label>
                    <input type="date"
                           name="published_at"
                           value="{{ old('published_at', $news->published_at->format('Y-m-d')) }}"
                           required
                           class="border rounded px-3 py-2">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium mb-1">
                        Image
                    </label>
                    <input type="file" name="image">
                </div>

                <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">
                    Save changes
                </button>
            </form>
        </div>

        {{-- DELETE FORM (APART!) --}}
        <div class="p-6 border border-red-200 rounded bg-red-50">
            <form method="POST"
                  action="{{ route('admin.news.destroy', $news) }}"
                  onsubmit="return confirm('Are you sure you want to delete this news item?');">
                @csrf
                @method('DELETE')

                <button type="submit"
                        class="text-red-600 font-medium hover:underline">
                    Delete news item
                </button>
            </form>
        </div>

    </div>
</x-app-layout>
