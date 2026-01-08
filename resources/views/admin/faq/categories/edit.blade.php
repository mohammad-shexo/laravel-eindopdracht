<x-app-layout>
    <h1>Edit FAQ Category</h1>

    <form method="POST"
          action="{{ route('admin.faq-categories.update', $faqCategory) }}">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $faqCategory->name }}" required>

        <button>Save</button>
    </form>
</x-app-layout>
