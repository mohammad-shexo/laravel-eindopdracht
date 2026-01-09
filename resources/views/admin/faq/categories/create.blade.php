<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 py-8">

        <h1 class="text-2xl font-bold mb-6">
            Create FAQ Category
        </h1>

        <div class="p-6 border rounded shadow-sm bg-white">

            <form method="POST" action="{{ route('admin.faq-categories.store') }}">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">
                        Category name
                    </label>
                    <input type="text"
                           name="name"
                           placeholder="Category name"
                           required
                           class="w-full border rounded px-3 py-2">
                </div>

                <button class="px-4 py-2 bg-blue-600 text-green-500 rounded hover:bg-blue-700">
                    Create
                </button>
            </form>

        </div>

    </div>
</x-app-layout>
