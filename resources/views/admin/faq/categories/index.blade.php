<x-app-layout>
    <h1>FAQ Categories</h1>

    <a href="{{ route('admin.faq-categories.create') }}">➕ Add category</a>

    <ul>
        @foreach($categories as $category)
            <li>
                {{ $category->name }}

                <a href="{{ route('admin.faq-categories.edit', $category) }}">Edit</a>

                <form method="POST"
                      action="{{ route('admin.faq-categories.destroy', $category) }}"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>

                <a href="{{ route('admin.faqs.create') }}">➕ Add question</a>
            </li>
        @endforeach
    </ul>
</x-app-layout>
