<x-app-layout>
    <h1>Edit FAQ Question</h1>

    <form method="POST"
          action="{{ route('admin.faqs.update', $faq) }}">
        @csrf
        @method('PUT')

        <label>Category</label>
        <select name="faq_category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $faq->faq_category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <label>Question</label>
        <input type="text" name="question" value="{{ $faq->question }}" required>

        <label>Answer</label>
        <textarea name="answer" rows="5" required>{{ $faq->answer }}</textarea>

        <button>Save</button>
    </form>
</x-app-layout>
