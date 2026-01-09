<x-app-layout>
    <div class="max-w-2xl mx-auto px-4 py-8">

        <h1 class="text-2xl font-bold mb-6">
            Create FAQ Question
        </h1>

        <form method="POST"
              action="{{ route('admin.faqs.store') }}"
              class="bg-white border rounded shadow-sm p-6 space-y-5">

            @csrf

            <div>
                <label class="block text-sm font-medium mb-1">
                    Category
                </label>

                <select name="faq_category_id"
                        required
                        class="w-full border rounded px-3 py-2 bg-white focus:outline-none focus:ring focus:border-blue-500">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">
                    Question
                </label>

                <input type="text"
                       name="question"
                       required
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">
                    Answer
                </label>

                <textarea name="answer"
                          rows="5"
                          required
                          class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-green-500 rounded hover:bg-blue-700">
                    Create
                </button>
            </div>

        </form>

    </div>
</x-app-layout>
