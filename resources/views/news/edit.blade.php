<x-app-layout>
    {{-- UPDATE FORM --}}
    <form method="POST"
          enctype="multipart/form-data"
          action="{{ route('admin.news.update', $news) }}">

        @csrf
        @method('PUT')

        <input name="title"
               value="{{ old('title', $news->title) }}"
               required>

        <textarea name="content">{{ old('content', $news->content) }}</textarea>

        <input type="date"
               name="published_at"
               value="{{ old('published_at', $news->published_at->format('Y-m-d')) }}"
               required>

        <input type="file" name="image">

        <button type="submit">Save</button>
    </form>

    <hr class="my-6">

    {{-- DELETE FORM (APART!) --}}
    <form method="POST"
          action="{{ route('admin.news.destroy', $news) }}"
          onsubmit="return confirm('Are you sure you want to delete this news item?');">
        @csrf
        @method('DELETE')

        <button type="submit" style="color: red;">
            Delete news item
        </button>
    </form>
</x-app-layout>
