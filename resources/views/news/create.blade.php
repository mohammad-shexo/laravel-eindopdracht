<x-app-layout>
    <form method="POST"
          enctype="multipart/form-data"
          action="{{ isset($news)
                ? route('admin.news.update', $news)
                : route('admin.news.store') }}">

        @csrf

        @isset($news)
            @method('PUT')
        @endisset

        <input name="title"
               value="{{ old('title', $news->title ?? '') }}"
               required>

        <textarea name="content">{{ old('content', $news->content ?? '') }}</textarea>

        <input type="date"
               name="published_at"
               value="{{ old('published_at', $news->published_at ?? '') }}"
               required>

        <input type="file" name="image">

        <button>Save</button>
    </form>
</x-app-layout>
