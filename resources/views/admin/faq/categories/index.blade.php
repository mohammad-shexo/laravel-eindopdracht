<x-app-layout>
    <div class="max-w-5xl mx-auto px-4 py-8">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold">
                FAQ Categories
            </h1>

            <a href="{{ route('admin.faq-categories.create') }}"
               class="px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">
                ➕ Add category
            </a>
        </div>

        {{-- List --}}
        <div class="bg-white border rounded shadow-sm divide-y">
            @foreach($categories as $category)
                <div class="flex items-center justify-between p-4">

                    <div class="font-medium">
                        {{ $category->name }}
                    </div>

                    <div class="flex items-center gap-4 text-sm">

                        <a href="{{ route('admin.faqs.create') }}"
                           class="text-green-600 hover:underline">
                            ➕ Add question
                        </a>

                        <a href="{{ route('admin.faq-categories.edit', $category) }}"
                           class="text-blue-600 hover:underline">
                            Edit
                        </a>

                        <form method="POST"
                              action="{{ route('admin.faq-categories.destroy', $category) }}"
                              onsubmit="return confirm('Delete this category?');">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="text-red-600 hover:underline">
                                Delete
                            </button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-app-layout>
