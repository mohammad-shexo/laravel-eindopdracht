<x-app-layout>
    <h1>Create FAQ Category</h1>

    <form method="POST" action="{{ route('admin.faq-categories.store') }}">
        @csrf

        <input type="text" name="name" placeholder="Category name" required>

        <button>Create</button>
    </form>
</x-app-layout>
