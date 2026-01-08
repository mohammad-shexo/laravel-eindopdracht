<x-app-layout>
    <h1>Create FAQ Question</h1>

    <form method="POST" action="{{ route('admin.faqs.store') }}">
        @csrf

        <label>Category</label>
        <select name="faq_category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <label>Question</label>
        <input type="text" name="question" required>

        <label>Answer</label>
        <textarea name="answer" rows="5" required></textarea>

        <button>Create</button>
    </form>
</x-app-layout>
