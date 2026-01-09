<x-app-layout>
    <div class="max-w-xl mx-auto px-4 py-8">

        <h1 class="text-2xl font-bold mb-6">
            Edit FAQ Category
        </h1>

        <form method="POST"
              action="{{ route('admin.faq-categories.update', $faqCategory) }}"
              class="bg-white border rounded shadow-sm p-6 space-y-4">

            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium mb-1">
                    Category name
                </label>

                <input type="text"
                       name="name"
                       value="{{ $faqCategory->name }}"
                       required
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-green-500 rounded hover:bg-blue-700">
                    Save
                </button>
            </div>

        </form>

    </div>
</x-app-layout>

